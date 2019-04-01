<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendMailController extends Controller
{
    public function send(){
    	Mail::send(['text'=>'mail'],['name','fadwa'],function($message){
    		$message->to('fadwaana99@gmail.com','fadwa')->subject('test Email');
    		$message->from('fadwaana99@gmail.com');
    	});
    }
}
