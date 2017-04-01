<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{

    public function html_email(){
        $data = array('name'=>"Virat Gandhi");
        Mail::send('mail', $data, function($message) {
            $message->to('abc@gmail.com', 'Tutorials Point')->subject
            ('Laravel HTML Testing Mail');
            $message->from('xyz@gmail.com','Virat Gandhi');
        });
        echo "HTML Email Sent. Check your inbox.";
    }


    public function sendMail(){
        $data = array('name'=>"Virat Gandhi");

        Mail::send(['text'=>'mail'], $data, function($message) {
            $message->to('muhamed.kamel.elsayed@gmail.com', 'Tutorials Point')
                ->subject('Laravel Basic Testing Mail');
            $message->from('mazadcompany@gmail.com','Virat Gandhi');
        });
        //return "Basic Email Sent. Check your inbox.";
    }
}
