<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class TestController extends Controller
{
    public function send_mail()
    {
        $to_email = "almamun@gmail.com";
        $name = "PHP Programmers";
        $data = [
            'message' => "Hi this is testing mail",
        ];
        Mail::send('mail.send_mail', $data, function ($m) use ($to_email, $name) {
            $m->to($to_email, $name)->subject('PHP Programmers');
            $m->from('noreply@phpprogrammers.in', 'PHP Programmers');
        });
    }
}
