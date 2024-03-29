<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public $table = 'category';

    protected $fillable = [
        'name',
        'description',
    ];

    public $timestamps = false;


    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
