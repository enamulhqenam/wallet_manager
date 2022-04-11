<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function send()
    {
        $Data = [
            'Name' => 'Demo Name',
            'Email' => 'Demo Email',
            'Subject' => 'Demo Subject',
            'Message' => 'Demo Message',
        ];

        Mail::send(['text' => 'Wallet.email.mail'],$Data , function($Message){
            $Message->to('enamulhqenam50607210@gmail.com','Enamul Hq')
            ->subject('Massage From Aplication')
            ->from('info@demo.com');
        });

        return back();
    }
}
