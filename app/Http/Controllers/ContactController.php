<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

#Facades
use Mail;
use Carbon\Carbon;

class ContactController extends Controller
{
    public function send(Request $request)
    {
    	$data = $request->all();
    	Mail::raw($request->input('name').'<br>'.$request->input('email').'<br>'.$request->input('message'), function ($message) use($request) {
    		$message->from('oimintw@gmail.com', 'I\'m In Studio System');
    		$message->subject('[聯繫表單] from '.$request->input('name').' '.Carbon::now());
		    $message->to('side112358@gmail.com');
		});

		return 'SEND';
    }
}
