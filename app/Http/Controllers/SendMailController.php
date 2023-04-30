<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function sendEmail()
    {
        $recipient = 'tcgamer.061@gmail.com';
        $name = 'puemmth';
        Mail::to($recipient)->send(new SendMail(
            $recipient,
            $name
        ));

        return response()->json([
            'message' => 'Email has been sent.'
        ], 200);
    }
}
