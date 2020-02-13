<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        
        /*
        DB::table('contacts')->insert([
            'firstname' => 'Remy',
            'lastname' => 'Girodon',
            'mail' => 'remy.girodon@gmail.com',
            'phone' => '0123456',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        */
        
        // Create three App\Contact instances...
        $contacts = factory(App\Contact::class, 3)->make();
        
        foreach ($contacts as $contact) {
            
            $contact->save();
            
            $contact->comments()->save(factory(App\Comment::class)->make());
            
            $contact->comments()->save(factory(App\Comment::class)->make());
        }
    }
}
