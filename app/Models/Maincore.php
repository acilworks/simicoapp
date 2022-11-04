<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maincore extends Model
{
    use HasFactory;

    protected $guarded = ['id'];



    public function odcmain()
    {
        return $this->belongsTo(Odcmain::class);
    }

    // public function update_by()
    // {
    //     return $this->belongsTo(User::class, 'user_id');
    // }


}
