<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\sendMail ;

class MailController extends Controller
{
    public function send()
    {
        $Data = [
            'Name' => 'Ranz',
            'Email' => 'Demo Email',
            'Subject' => 'Demo Subject',
            'Message' => 'Demo Message',
            'Containt' => 'Demo Containt',
        ];

        // Mail::send(['text' => 'Wallet.email.mail'],$Data , function($Message){
        //     $Message->to('enamulhqenam50607210@gmail.com','Enamul Hq')
        //     ->subject('Massage From Wallet Manager')
        //     ->from('info@walletmanager.com');
        // });

        Mail::to('enamulhqenam50607210@gmail.com')->send(new sendMail($Data) );

        return back();
    }
}
