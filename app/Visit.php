<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    //

    protected $table = 'visits';
    protected $primaryKey = 'id';


    public function family(){

        return $this->belongsTo(Family::class);
    }
}
