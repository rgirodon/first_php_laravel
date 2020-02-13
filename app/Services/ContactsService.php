<?php
namespace App\Services;

use App\Contact;

class ContactsService
{

    public function __construct()
    {}
    
    public function listContacts() {
        
        return Contact::all();
    }
    
    public function findContact($id) {
        
        return Contact::where('id', $id)->first();
    }
}

