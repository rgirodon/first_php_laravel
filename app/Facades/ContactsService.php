<?php
namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class ContactsService extends Facade {

    protected static function getFacadeAccessor() {
        
        return \App\Services\ContactsService::class;
    }
}

