<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
// use Mail;
use App\Mail\NotifyMail;

class SendEmailController extends Controller
{


    public function sendEmail()
    {
        $details = [

            'title' =>  "Mail from surface side Media",
            'body'  => "this is testing mail gmail"
        ];

        Mail::to("ab642070@gmail.com")->send(new NotifyMail($details));
        return "Email send successfully";
    }
}
