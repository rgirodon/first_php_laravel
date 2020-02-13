<?php

namespace App\Listeners;

use App\Events\ContactConsultationEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class ContactConsultationEventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ContactConsultationEvent  $event
     * @return void
     */
    public function handle(ContactConsultationEvent $event)
    {
        Log::info('Consultation for contact '.$event->contact->firstname.' '.$event->contact->lastname);
    }
}
