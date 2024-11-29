<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory; // I do not yet know why this is used...

    // title (string)
    // description (text)
    protected $fillable = [
        'title',
        'description',
    ];
}