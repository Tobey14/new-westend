<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Purchase;
use App\Models\Agent;
use App\Models\Wallet;
use App\Models\Transaction;
use Inertia\Inertia;


class UserController extends Controller
{
    public function getName($n)
    {

        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        return $randomString;
    }


    public function sendSms($phone, $message)
    {
        $api_token = "1Ag9dKxkKxutIGJy6IdwMjTY9G5USW4qIzAjWspgvtObzrEnkLHBrNHk0on5";
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://www.bulksmsnigeria.com/api/v1/sms/create?api_token=" . $api_token . "&from=Westend Nig&to=" . $phone . "&body=" . $message . "&dnd=6",
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_HTTPHEADER => [
                "Content-Type: application/json",
                "Accept: application/json"
            ],
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "Invalid Request";
        } else {
            $result = json_decode($response);
        }
    }


    public function raveCreatePurchase(Request $request)
    {

        $number_of_tickets = floor($request->playAmount / $request->denomination);

        $purchase = new Purchase;
        $purchase->denomination = $request->denomination;
        $purchase->phone = $request->phone;
        $purchase->total_amount = $request->playAmount;
        $purchase->platform = $request->platform;
        $purchase->referral = $request->referral;
        $purchase->payment_id = $request->ref;
        $purchase->no_of_tickets = $number_of_tickets;
        $purchase->status = 0;
        $purchase->save();
        return $purchase;


    }


    public function paystackCreatePurchase(Request $request)
    {

        try {

            $number_of_tickets = floor($request->playAmount / $request->denomination);

            $purchase = new Purchase;
            $purchase->denomination = $request->denomination;
            $purchase->phone = $request->phone;
            $purchase->total_amount = $request->playAmount;
            $purchase->platform = $request->platform;
            $purchase->referral = $request->referral;
            $purchase->payment_id = $request->ref;
            $purchase->no_of_tickets = $number_of_tickets;
            $purchase->status = 1;


            $transaction = new Transaction;
            $transaction->type = 'Purchase';
            $transaction->amount = $purchase->total_amount;
            $transaction->status = 'successful';
            $transaction->platform = $purchase->platform;
            $transaction->transaction_id = $purchase->payment_id;


            $purchase->save();

            $transaction->purchase_id = $purchase->id;

            $transaction->save();


            $all_tickets = [];

            for ($i = 0; $i < $number_of_tickets; $i++) {

                $randStr = $this->getName(3);

                $ticket = new Ticket;
                $ticket->amount = $request->denomination;
                $ticket->phone = $request->phone;
                $ticket->ticket_id = 'WG-' . rand(9999, 100000) . $randStr;
                $ticket->referred_by = $request->referral;
                $ticket->purchase_id = $purchase->id;


                $all_tickets[$i] = $ticket->ticket_id;


                $ticket->save();
            }

            $tickets = ' ';

            foreach ($all_tickets as $tick) {

                $tickets = $tickets . ' ' . $tick . ',';
            }

            //$message = 'Hey player, thank you for playing with WestEnd Games Limited, your ' . count($all_tickets) . ' ticket(s) with ID(s)' . $tickets . ' has been played successfully, check out the winners corner to see if you are a winner. Good lucks to you.';
            $message = 'Hey player, thank you for playing with WestEnd. Your ' . count($all_tickets) . ' ticket(s): ' . $tickets . '. Check out the winners corner to see if you are a lucky winner.';
            $phone = $request->phone;

            $this->sendSms($phone, $message);

            return $purchase;
        } catch (Exception $e) {
            DB::rollBack();
            return [
                'message' => 'Error Occured:' . $e->getMessage(),
                'status' => 401
            ];
        }
    }


    public function playTicketRave(Request $request)
    {

        try {

            $purchase = Purchase::where('payment_id', $request->tx_ref)->first();

            
            $transaction = new Transaction;
            $transaction->type = 'Purchase';
            $transaction->amount = $purchase->total_amount;
            $transaction->platform = $purchase->platform;
            $transaction->transaction_id = $purchase->payment_id;

            $purchase->status = 1;
            $transaction->status = 'successful';
            
            $transaction->purchase_id = $purchase->id;

             
            $nos = floor($purchase->total_amount / $purchase->denomination);

            $all_tickets = [];

            for ($i = 0; $i < $nos; $i++) {

                $randStr = $this->getName(3);

                $ticket = new Ticket;
                $ticket->amount = $purchase->denomination;
                $ticket->phone = $purchase->phone;
                $ticket->ticket_id = 'WG-' . rand(9999, 100000) . $randStr;
                $ticket->purchase_id = $purchase->id;

                $all_tickets[$i] = $ticket->ticket_id;

                $ticket->save();
            }


            $tickets = ' ';

            foreach ($all_tickets as $tick) {

                $tickets = $tickets . ' ' . $tick . ',';
            }

            //$message = 'Hey player, thank you for playing with WestEnd Games Limited, your ' . count($all_tickets) . ' ticket(s) with ID(s)' . $tickets . ' has been played successfully, check out the winners corner to see if you are a winner. Good lucks to you.';
            $message = 'Hey player, thank you for playing with WestEnd. Your ' . count($all_tickets) . ' ticket(s): ' . $tickets . '. Check out the winners corner to see if you are a lucky winner.';
            $phone = $purchase->phone;

            $purchase->save();
            $transaction->save();

            $this->sendSms($phone, $message);

            return redirect()->route('playNow')->cookie('ticket-played', 'Ticket Played Successfully', 0.1);
        } catch (Exception $e) {
            DB::rollBack();
            return [
                'message' => 'Error Occured:' . $e->getMessage(),
                'status' => 401
            ];
        }
    }

    public function ticketStatus($id)
    {

        $ticket = Ticket::where('ticket_id', $id)->first();

        return Inertia::render('TicketStatus', ['ticket' => $ticket]);
    }

    // public function (Request $request)
    // {
    //     $ticket_no = $request->ticket_id;
    //     $ticket = Ticket::where('ticket_id', $ticket_no)->first();
    //     $data = ['ticket' => $ticket];
    //     return $data;
    // }


    public function agentPlayTicket(Request $request)
    {

        try {

            $all_tickets = [];
            $all_tickets_id = [];
            $agent = Agent::find($request->user);

            $purchase = new Purchase;
            $purchase->denomination = $request->amount;
            $purchase->phone = $request->phone;
            $purchase->total_amount = $request->playAmount;
            $purchase->platform = 'Agent Purchase';
            $purchase->referral = $agent->referral_code;
            $purchase->agent_id = $agent->id;
            $purchase->no_of_tickets = $request->nos;
            $purchase->status = 1;

            $transaction = new Transaction;
            $transaction->type = 'Agent Purchase';
            $transaction->amount = $purchase->total_amount;
            $transaction->status = 'successful';
            $transaction->agent_id = $agent->id;
            $transaction->platform = 'Agent Purchase';
            $transaction->transaction_id = 'T' . rand(99999, 1000000) . 'W' . rand(9999, 100000);

            $purchase->save();

            for ($i = 0; $i < $request->nos; $i++) {

                $randStr = $this->getName(3);
                $ticket = new Ticket;
                $ticket->amount = $request->amount;
                $ticket->phone = $request->phone;
                $ticket->ticket_id = 'WG-' . rand(9999, 100000) . $randStr;
                $ticket->agent_id = $request->user;
                $ticket->purchase_id = $purchase->id;
                $ticket->referred_by = $agent->referral_code;
                $ticket->referral_earning = $request->amount * 0.2;

                $all_tickets_id[$i] = $ticket->ticket_id;


                $ticket->save();
                $all_tickets[$i] = $ticket;
            }

            $wallet = Wallet::where('agent_id', $agent->id)->first();
            $old_balance = $wallet->total_balance;
            $new_balance = $old_balance - $request->playAmount;
            $wallet->total_balance  = $new_balance;



            $tickets = ' ';

            foreach ($all_tickets_id as $tick) {

                $tickets = $tickets . ' ' . $tick . ',';
            }

            //$message = 'Hey player, thank you for playing with WestEnd Games Limited, your ' . count($all_tickets) . ' ticket(s) with ID(s)' . $tickets . ' has been played successfully, check out the winners corner to see if you are a winner. Good lucks to you.';
            $message = 'Hey player, thank you for playing with WestEnd. Your ' . count($all_tickets_id) . ' ticket(s): ' . $tickets . '. Check out the winners corner to see if you are a lucky winner.';
            $phone = $request->phone;


            $transaction->purchase_id = $purchase->id;

            $wallet->save();

            $transaction->save();

            $this->sendSms($phone, $message);

            return $all_tickets;


        } catch (Exception $e) {
            DB::rollBack();
            return [
                'message' => 'Error Occured:' . $e->getMessage(),
                'status' => 401
            ];
        }
    }

    public function getWinningTickets(){
        $tickets = Ticket::where('status', 'won')->orderBy('created_at', 'desc')->take(8)->get();
        return $tickets;
    }
}
