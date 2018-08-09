<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Review;

class Book extends Model
{
    //
    protected $table = 'books';

    protected $primaryKey = 'isbn';

    public $incrementing = false;

    public $timestamps = false;


    public function reviews() {
    	return $this->hasMany(Review::class);
    }


    public function addReviews($rating , $review) {

    	return $this->reviews()->create(compact('rating','review'));

    	/*Review::create([
    		'body' => $body,

    		'$review' => $review
    	]);*/
    }
   
}
