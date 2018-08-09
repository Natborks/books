<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $table = 'books';

    protected $primaryKey = 'isbn';

    public $incrementing = false;

    public $timestamps = false;
}