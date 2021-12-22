<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book_Author extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id',
        'author_id'
    ];

}