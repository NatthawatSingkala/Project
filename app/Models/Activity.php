<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = ['activity_name','price_adult','price_child','desciption'];
    
    // public function user(){
    // 	return $this->BelongsTo(User::class);
    // }
}
