<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $table ='articles'

    // way 1,list all your columns' name
    protected $fillable = ['title','body','slug','user_id'];

    // way 2, every cloumn in the database
    protected $guarded=[];
}
