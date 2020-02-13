<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Services\ContactsService;

use App\Facades\ContactsService as ContactsServiceFacade;
use Illuminate\Support\Facades\Mail;
use App\Mail\Test;
use Illuminate\Http\Request;
use App\Jobs\ReportGenerationJob;
use Illuminate\Support\Facades\Event;
use App\Events\ContactConsultationEvent;

class ContactsController extends Controller {

    /*
    public function list(ContactsService $contactsService) {
                
        $contacts = $contactsService->listContacts();
        */

    public function list() {

        $contacts = Contact::all();
        
        return view('contacts', ['contacts' => $contacts]);
    }
    
    public function show($id, Request $request) {
                        
        /*
        $contact = ContactsServiceFacade::findContact($id);
        
        Mail::to($request->user())->send(new Test($contact));
        
        ReportGenerationJob::dispatch($contact);
        
        Event::fire(new ContactConsultationEvent($contact));
        */

        $contact = Contact::where('id', $id)->first();
        
        return view('contact_details', ['contact' => $contact]);
    }
}
