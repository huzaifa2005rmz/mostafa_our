<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $tabel = "posts";

    protected $fillable = ['title', 'descrption', 'price', 'tiam', 'img'];
    protected $primaryKey = 'id';
}
