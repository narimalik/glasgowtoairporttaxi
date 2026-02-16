<?php

namespace App\Listeners;

use App\Events\SendEmailEvent;
use App\Mail\ContactUsMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendEmailListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
       // \Log::info("I am in Listner of Send email Cosnt");

    }

    /**
     * Handle the event.
     */
    public function handle(SendEmailEvent $event): void
    {
        
       Mail::to(env("CONTACTUS_EMAIL"))->send(new ContactUsMail(($event))) ;
        
    }
}
