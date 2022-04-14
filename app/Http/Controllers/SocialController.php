<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Two\FacebookProvider;
use Laravel\Socialite\Two\GithubProvider;
use Laravel\Socialite\Two\GoogleProvider;
use Laravel\Socialite\Two\TwitterProvider;

class SocialController extends Controller
{
    public function redirect($platform)
    {
        $social = $this->configDriver(\request(), '',$platform);

        return $social->redirect();
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
                activity_log($appUser, 'signin', __('User Signed In. Via: ') . $platform);
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
                activity_log($appUser, 'signin', __('User Signed In. Via: ') . $platform);
                return redirect()->route('dashboard');
            }

        } catch (Exception $exception) {
            logger($exception->getMessage());
        }
    }

    private function configDriver(Request $request, $domain = '', $driver)
    {
        switch ($driver) {
            case 'facebook':
                $provider = FacebookProvider::class;
                break;
            case 'google':
                $provider = GoogleProvider::class;
                break;
            case 'twitter':
                $provider = TwitterProvider::class;
                break;
            case 'github':
                $provider = GithubProvider::class;
                break;
        }

        $config['client_id'] = setting('social.'. $driver .'.app_id');
        $config['client_secret'] = setting('social.'. $driver .'.app_secret');
        $config['redirect'] = setting('social.'. $driver .'.app_redirect');

        return Socialite::buildProvider($provider, $config);
    }
}
