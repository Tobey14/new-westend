<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\Agent;
use App\Models\Wallet;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:11'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        try{

            $user = User::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'role' => 'Agent',
                'phone' => $input['phone'],
                'password' => Hash::make($input['password']),
            ]);

            $agent = Agent::create([
                'name' => $input['name'],
                'referred_by' => $input['referred_by'],
                'referral_code' => rand(99999,999999),
                'email' => $input['email'],
                'phone' => $input['phone'],
                'user_id'=> $user['id'],
                'state'=> $input['state'],
            ]);

            $wallet = Wallet::create([
                'agent_id' => $agent['id'],
            ]);

            return $user;
    
    
            

        } catch (Exception $e) {
            return('Error Occured:'. $e->getMessage());
        }
    }
}
