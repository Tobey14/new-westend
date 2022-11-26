<?php

namespace App\Http\Controllers;
use App\Models\Agent;
use App\Models\Wallet;
use App\Models\Ticket;
use App\Models\Funding;
use App\Models\Transaction;
use App\Models\Purchase;
use Illuminate\Support\Facades\Auth;



use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function getAgentDetails(Request $request){

        $user_id = $request->id;
        $agent = Agent::where('user_id', $user_id)->first();
        $wallet = Wallet::where('agent_id', $agent->id)->first();
        $all_referrals = Agent::where('referred_by', $agent->referral_code)->get();
        $referrals = count($all_referrals);
        $all_tickets = Ticket::where('agent_id', $agent->id)->orderBy('created_at','desc')->get();
        $purchases = Purchase::where('agent_id', $agent->id)->orderBy('created_at', 'desc')->get();

        $all_purchase = [];
        
        foreach($purchases as $purchase){
            $ticket_ids = '';
            $purchase_tickets = Ticket::where('purchase_id', $purchase->id)->get();

            foreach($purchase_tickets as $tick){
                $ticket_ids = $ticket_ids . ' ' . $tick->ticket_id . ',';
            }
            $purchase['ticket_ids'] = $ticket_ids;

            array_push($all_purchase, $purchase);
        }


        $tickets = count($all_tickets);
        $wins = count(Ticket::where('agent_id', $agent->id)->where('status', 'won')->get());

        
        $t_funding = Funding::where('agent_id', $agent->id)->where('status', 'successful')->orderBy('created_at', 'desc')->first();
        $last_funding = 0;
        if($t_funding){
            $last_funding = $t_funding->amount;
        }
        $amount_won = Ticket::where('agent_id', $agent->id)->where('status', 'won')->sum('amount_won');
        $transactions = Transaction::where('agent_id', $agent->id)->orWhere('funded_referral_id', $agent->id)->orderBy('created_at','desc')->get();
        $data = ['agent'=>$agent, 'all_purchase'=>$all_purchase, 'all_tickets'=>$all_tickets, 'all_referrals'=>$all_referrals, 'wallet'=>$wallet, 'referrals'=> $referrals, 'tickets'=>$tickets, 'wins'=>$wins, 'last_funding'=>$last_funding, 'amount_won'=>$amount_won, 'transactions'=>$transactions];
        
        return $data;

    }
    
    public function paystackFundWallet(Request $request){

        $agent_id=htmlentities($request->input('agent'));
        $wallet_id=htmlentities($request->input('wallet'));

        $failed_funding = Funding::where('agent_id', $agent_id)->where('status', 'processing')->get();
        $failed_Transaction = transaction::where('agent_id', $agent_id)->where('status', 'processing')->get();

        //mark pending transactions as failed since you are creating a new one
        if($failed_funding){
            foreach($failed_funding as $fund){
                $fund->status = 'failed';
                $fund->save();
            }
        }
        
        if($failed_Transaction){

            foreach($failed_Transaction as $trans){
                $trans->status = 'failed';
                $trans->save();
            }
        }

        //marking ends

        $old_funding = Funding::where('agent_id', $agent_id)->where('status', 'successful')->first();

        try{

            $wallet = Wallet::find($wallet_id);
            $old_amount = $wallet->total_balance;
            

            if(!$old_funding){

                //50% of first funding to be as bonus
                $bonus = ($request->amount) * 0.2;

            }else{
                $bonus = 0;
            }

            $new_amount = $old_amount + $request->amount + $bonus;
            $wallet->total_balance = $new_amount;

            $old_bonus = $wallet->bonus;

            $wallet->bonus = $old_bonus + $bonus;

            $funding = new Funding;
            $funding->amount = $request->amount;
            $funding->agent_id = $agent_id;
            $funding->payment_platform = $request->platform;
            $funding->payment_id = $request->ref; 
            $funding->status = $request->status;
            
            $transaction = new Transaction;
            $transaction->type = 'Funding';
            $transaction->amount = $request->amount;
            $transaction->agent_id = $agent_id;
            $transaction->status = 'successful';
            $transaction->platform = $request->platform;
            $transaction->transaction_id = $request->ref;

            $wallet->save();
            $funding->save();
            
            $transaction->funding_id = $funding->id;

            $transaction->save();

            return $transaction;


        }catch (Exception $e) {
            DB::rollBack();
            return ['message'=>'Error Occured:'. $e->getMessage(),
                    'status'=> 401
            ];
        }
    } 


    public function raveFundWallet(Request $request){

        $agent_id=htmlentities($request->input('agent'));
        $wallet_id=htmlentities($request->input('wallet'));

        $failed_funding = Funding::where('agent_id', $agent_id)->where('status', 'processing')->get();
        $failed_Transaction = Transaction::where('agent_id', $agent_id)->where('status', 'processing')->get();

        //mark pending transactions as failed since you are creating a new one
        if($failed_funding){
            foreach($failed_funding as $fund){
                $fund->status = 'failed';
                $fund->save();
            }
        }
        
        if($failed_Transaction){

            foreach($failed_Transaction as $trans){
                $trans->status = 'failed';
                $trans->save();
            }
        }

        //marking ends



        //create new funding starts
        try{

            $funding = new Funding;
            $funding->amount = $request->amount;
            $funding->agent_id = $agent_id;
            $funding->payment_platform = $request->platform;
            $funding->payment_id = $request->ref; 
            $funding->status = $request->status;
            $funding->save();

            return $funding;


        }catch (Exception $e) {
            DB::rollBack();
            return ['message'=>'Error Occured:'. $e->getMessage(),
                    'status'=> 401
            ];
        }
    } 


    public function agentFunded(Request $request){



        $funding = Funding::where('payment_id', $request->tx_ref)->first();

        $transaction = new Transaction;
        $transaction->type = 'Funding';
        $transaction->amount = $funding->amount;
        $transaction->agent_id = $funding->agent_id;
        $transaction->platform = $funding->payment_platform;
        $transaction->transaction_id = $funding->payment_id;

        $transaction->funding_id = $funding->id;
            
        $old_funding = Funding::where('agent_id', $funding->agent_id)->where('status', 'successful')->first();

        $funding->status = 'successful';

        $transaction->status = 'successful';

        
       
        $wallet = Wallet::where('agent_id', $funding->agent_id)->first();
        $old_amount = $wallet->total_balance;


        if(!$old_funding){

            //50% of first funding to be as bonus
            $bonus = ($funding->amount) * 0.2;

        }else{
            $bonus = 0;
        }

        $new_amount = $old_amount + $funding->amount + $bonus;
        $wallet->total_balance = $new_amount;

        $old_bonus = $wallet->bonus;

        $wallet->bonus = $old_bonus + $bonus;



        $funding->save();
        $transaction->save();
        $wallet->save();

        $transaction->save();
        return redirect()->route('fund')->cookie('funding_success', 'Funding Successful', 0.2);

    }


    public function searchTicket(Request $request){

        $user_id = $request->id;
        $agent = Agent::where('user_id', $user_id)->first();
        
        $tickets = Ticket::where('agent_id', $agent->id)->where('ticket_id','like', "%$request->item%")->orWhere('phone','like', "%$request->item%")->orderBy('created_at','desc')->get();
        
        return $tickets;

    }

    public function updateDetails(Request $request){

        $user_id = $request->id;
        $agent = Agent::where('user_id', $user_id)->first();

        $agent->name = $request->name;
        $agent->phone = $request->phone;
        $agent->gender = $request->gender;
        $agent->email = $request->email;

        if($request->hasFile('image')){
			$image          =   $request->file('image')->getClientOriginalName();
			$image_upload   =   $request->file('image')->storeAs('images/agents', $image, 'public_uploads');

			if($image_upload){
                $agent->image_url = $image;
            }
		}


        $agent->save();

        return $agent;
    }

    public function agentFundReferral(Request $request){

        try{
            $agentWallet = Wallet::where('agent_id', $request->agent)->first();

            $referralWallet = Wallet::where('agent_id', $request->referral)->first();

            $agent_old_balance = $agentWallet->total_balance;
            $agentWallet->total_balance = $agent_old_balance - $request->amount;

            $referral_old_balance = $referralWallet->total_balance;
            $referralWallet->total_balance = $referral_old_balance + $request->amount;

            $transaction = new Transaction;
            $transaction->type = 'AgentReferralFunding';
            $transaction->amount = $request->amount;
            $transaction->agent_id = $request->agent;

            $transaction->platform = "Agent Referral Funding";
            $transaction->funded_referral_id = $request->referral;
            $transaction->transaction_id = 'WGT' . rand(99999, 1000000) . 'W' . rand(9999, 100000);
            $transaction->status = 'successful'; 

            $transaction->save();
            
            $agentWallet->save();

            $referralWallet->save();

            return $transaction;

        }catch (Exception $e) {
            DB::rollBack();
            return ['message'=>'Error Occured:'. $e->getMessage(),
                    'status'=> 401
            ];
        }




    }


    
}
