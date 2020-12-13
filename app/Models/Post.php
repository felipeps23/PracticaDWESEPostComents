<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $table = 'post';
    
    //public $timestamps = false;
    
    protected $fillable = ['title', 'text', 'author', 'date'];
    
    public function coments() {
        return $this->hasMany('App\Models\Coment', 'idpost', 'id');
    }
}
