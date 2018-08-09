<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
	protected $fillable = ['rating', 'review', 'book_isbn'];
    //
    public function reviews() {
    	return $this->belongsTo(Book::class);
    }
    
}
