<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Odcmain extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = ['name','sto', 'segment_feeder_old', 'segment_feeder_new', 'segment_feeder_new', 'lat', 'long', 'address', 'koordinat', 'updated_by'];



    public function maincores()
    {
        return $this->hasMany(Maincore::class);
    }


    
}
