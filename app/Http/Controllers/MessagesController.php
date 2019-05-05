<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request)
    {
    	$this->validate($request, [
    	'name' => 'required',
    	'surname' => 'required',
    	'country' => 'required',
    	'city' => 'required',
    	'phone' => 'required',
    	'email' => 'required',
    	'cardnum' => 'required',
    	'cvv' => 'required'
    	]);

        $message = new Message; 
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->surname = $request->input('surname');
        $message->country = $request->input('country');
        $message->city = $request->input('city');
        $message->phone = $request->input('phone');
        $message->cardnum = $request->input('cardnum');
        $message->cvv = $request->input('cvv');

        $message->save(); 

        return redirect('/');


    }
}
