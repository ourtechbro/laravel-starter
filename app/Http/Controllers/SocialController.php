<?php
namespace App\Http\Controllers;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use Illuminate\Support\Facades\Auth;

class SocialController extends Controller
{
    public function redirect($platform)
    {
        return Socialite::driver($platform)->redirect();
    }

    public function login($platform)
    {
        switch ($platform) {
            case 'facebook':
                $key = 'fb_id';
                break;
            case 'google':
                $key = 'google_id';
                break;
            case 'twitter':
                $key = 'twitter_id';
                break;
            case 'github':
                $key = 'github_id';
                break;
        }
        try {
            $user = Socialite::driver($platform)->user();
            $appUser = User::where($key, $user->id)->first();

            if($appUser){
                Auth::login($appUser);
                return redirect()->route('dashboard');
            }else{
                $appUser = User::where('email', $user->email)->first();
                if ($appUser) {
                    $appUser->update([
                        $key => $user->id
                    ]);
                } else {
                    $appUser = User::create([
                        'name' => $user->name,
                        'email' => $user->email,
                        $key => $user->id,
                        'password' => bcrypt($user->id . rand())
                    ]);
                }

                Auth::login($appUser);
                return redirect()->route('dashboard');
            }

        } catch (Exception $exception) {
            logger($exception->getMessage());
        }
    }
}
