<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'birthdate',
        'gender',
        'address',
        'city',
        'email',
        'phone'
    ];

    public $timestamps = false;

    public function jobs()
    {
        return $this->hasOne(Job::class);
    }

    public function borrows()
    {
        return $this->hasMany(Borrow::class);
    }
}
