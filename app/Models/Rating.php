<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
  
    use HasFactory;
    protected $table = 'rating';

    protected $fillable = [
        'name', 
        'comment' ,
      ];
    public function users()
    {
     return $this->belongsTo('App\Models\User', 'user_id' , 'id');
    }
}
