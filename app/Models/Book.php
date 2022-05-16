<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'page_count',
        'edition',
        'volume',
        'description',
        'image',
        'file',
    ];

    public $timestamps = false;


    public function borrows()
    {
        return $this->hasMany(Borrow::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function authors()
    {
        return $this->belongsToMany(Author::class, 'book_author');
    }

    public function getData(): array
    {
        return [
            'id' => $this->id,
        ];
    }
}
