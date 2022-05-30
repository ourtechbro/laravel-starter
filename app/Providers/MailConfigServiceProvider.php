<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
use Illuminate\Support\Facades\Config;

class MailConfigServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $mail       = DB::table('settings')->where('key', 'mail_driver')->pluck('value');
        $host       = DB::table('settings')->where('key', 'mail_host')->pluck('value');
        $port       = DB::table('settings')->where('key', 'mail_port')->pluck('value');
        $user_name  = DB::table('settings')->where('key', 'mail_username')->pluck('value');
        $password   = DB::table('settings')->where('key', 'mail_password')->pluck('value');
        $encryption = DB::table('settings')->where('key', 'mail_encryption')->pluck('value');
        $name       = DB::table('settings')->where('key', 'mail_sender_company')->pluck('value');
        $address    = DB::table('settings')->where('key', 'mail_sender_address')->pluck('value');

        if (!empty($mail[0]) and !empty($host[0]) and !empty($port[0]) and !empty($user_name[0]) and !empty($password[0]) and !empty($encryption[0]) and !empty($name[0]) and !empty($address[0])) {

            $config = array(
                'driver'     => $mail[0],
                'host'       => $host[0],
                'port'       => $port[0],
                'username'   => $user_name[0],
                'password'   => $password[0],
                'encryption' => $encryption[0],
                'from'       =>  array('address' => $address[0], 'name' => $name[0]),
            );
            Config::set('mail', $config);
        }
    }
}
