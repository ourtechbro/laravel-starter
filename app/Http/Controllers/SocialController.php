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
//        dd(Socialite::driver('facebook')->redirect());
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
            dd($exception->getMessage());
            logger($exception->getMessage());
        }
    }
}
