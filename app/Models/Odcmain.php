<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Odcmain extends Model
{
    use HasFactory;

    protected $guarded = ['id'];



    public function maincores()
    {
        return $this->hasMany(Maincore::class);
    }


    
}
