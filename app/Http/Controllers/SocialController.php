<?php
namespace App\Http\Controllers;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use Illuminate\Support\Facades\Auth;

class SocialController extends Controller
{
    public function facebookRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function loginWithFacebook()
    {
        try {
            $user = Socialite::driver('facebook')->user();
            $isUser = User::where('fb_id', $user->id)->first();

            if($isUser){
                Auth::login($isUser);
                return redirect()->route('dashboard');
            }else{
                //TODO:: validity check for duplicate email
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'fb_id' => $user->id,
                    'password' => bcrypt($user->id . rand())
                ]);

                Auth::login($createUser);
                return redirect()->route('dashboard');
            }

        } catch (Exception $exception) {
            logger($exception->getMessage());
        }
    }


    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }


    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $finduser = User::where('google_id', $user->id)->first();

            if($finduser){
                Auth::login($finduser);

                return redirect()->route('dashboard');
            }else{
                //TODO:: validity check for duplicate email
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => bcrypt($user->id . rand())
                ]);

                Auth::login($newUser);
                return redirect()->route('dashboard');
            }

        } catch (Exception $e) {
            logger($e->getMessage());
        }
    }
}
