<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //para que acepto los datos
    protected $fillable = [
        'title',
        'slug',
        'body',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
