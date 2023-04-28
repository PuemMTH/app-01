<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use App\Mail\MyEmail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail()
    {
        $recipient = 'tcgamer.061@gmail.com';
        Mail::to($recipient)->send(new MyEmail(
            $recipient,
            'puemmth'
        ));

        return response()->json([
            'message' => 'Email has been sent.'
        ], 200);
    }
}
