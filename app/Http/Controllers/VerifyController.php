<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Models\Credit;
use Base64Url\Base64Url;

class VerifyController extends Controller
{
    public function verify_index(){
        return view('auth.verify');
    }

    public function check(Request $request){
        $code_input = $request->input('code');
        $email = $request->input('email');

        $users = DB::table('users')
            ->select('verify_code', 'id', 'is_activated')
            ->where('email', $email)
            ->first();

        if($users->is_activated == 1){
            return redirect('login')->withErrors('Account have already been activated.');
        }
        else{
            if($code_input == $users->verify_code){
                DB::table('users')
                    ->where('email', $email)
                    ->update([
                        'is_activated' => '1'
                    ]);

                $credit = new Credit();

                $credit->credit = 100;
                $credit->user_id = $users->id;
                $credit->save();

                return redirect('login')->with('message', 'Account activated. Please login to access the system.');
            }
            else{
                return back()->withErrors('Incorrect activation code. Please try again');
            }
        }
    }

    public function resend(Request $request){
        $email = $request->input('email');

        $users = DB::table('users')
            ->select('is_activated', 'username')
            ->where('email', $email)
            ->first();

        if($users->is_activated == 1){
            return redirect('login')->withErrors('Account have already been activated.');
        }
        else{
            $code = Str::random(5);

            $email_member = array(
                'username' => $users->username,
                'email' => $email,
                'code' => $code,
            );

            Mail::send('email.welcome', $email_member, function ($message) use ($email_member) {
                $message->to($email_member['email'], $email_member['username'])
                    ->subject('Account Activation')
                    ->from('time-banking@noreply.com', 'Time Banking System');
            });

            DB::table('users')
                ->where('email', $email)
                ->update([
                    'verify_code' => $code
                ]);

            return redirect('/verification?e='.Base64Url::encode($email))->with('message', 'Activation code sent. Please check your email to activate your account.');
        }
    }
}
