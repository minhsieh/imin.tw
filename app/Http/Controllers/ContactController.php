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

        Mail::send('mail.comfirm', ['name' => $request->input('name') , 'email' => $request->input('email') , 'content' => $request->input('message')], function ($m) use ($request) {
            $m->from('oimintw@gmail.com', 'I\'m In Studio System');

            $m->to($request->email, $request->name)->subject('[I\'m In Studio]我們收到你的訊息囉');
        });

		return 'SEND';
    }
}
