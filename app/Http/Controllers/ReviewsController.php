<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;

use App\Review;

class ReviewsController extends Controller
{
    //
    public function store(Book $book) {

    	$book->addReviews(request('rating'), request('review'));

    	return back();
    }
}
