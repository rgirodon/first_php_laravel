<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {
    
    public function contact() {
        
        return $this->belongsTo('App\Contact');
    }
}
