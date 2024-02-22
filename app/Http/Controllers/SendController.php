<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;

class SendController
{
    public function send()
    {

        flash('Welcome Aboard!');

        $to_name = 'Receiver';
        $to_email = 'receiver@example.com';
        $data = array('name' => "Ogbonna Vitalis(sender)", "body" => "A test mail");

        Mail::send('emails.mail', $data, function ($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                ->subject('Laravel Test Mail');
            $message->from('sender@example.com', 'Test Mail');
        });
    }
}
