<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $fillable= ['name','url','thumb','sort','active','user_id'];
    public function user(){
        return $this->belongsTo(User::class);
    }
}