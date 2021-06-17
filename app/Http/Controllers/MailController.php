<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function sendEmail(){
        $details = [
            'title'=>'mail from todo.com',
            'body'=>'this is for testing mail using gmail'
        ];
        Mail::to('mihirmer2000@gmail.com')->send(new TestMail($details, $details));
        return 'mail sent';
    }
}
