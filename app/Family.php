<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    //

protected $table = 'families';
protected $primaryKey = 'id';


    public function visits(){

        return $this->hasMany(Visit::class);
    }

}
