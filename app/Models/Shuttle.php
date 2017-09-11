<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shuttle extends Model
{
    protected $fillable = ['room_number','pick_up','drop_off','pickupone_date','pickuptwo_date'];
    
    // public function user(){
    // 	return $this->BelongsTo(User::class);
    // }
}
