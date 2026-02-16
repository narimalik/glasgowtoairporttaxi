<?php

namespace App\Http\Controllers;

use App\Events\SendEmailEvent;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function contactUs( Request $request ){
        
        
        SendEmailEvent::dispatch( $request->all() );

        return back()->with('success', 'Your message has been sent successfully.');

    }
}
