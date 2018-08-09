<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;

class BooksController extends Controller
{
    //
    public function index() {

    	$books = \App\Book::all();

    	return view('books.index',compact('books'));
    }

    public function show($isbn) {
    	$book = \App\Book::find($isbn);

        //$reviews = $book->reviews;

       /* $client = new \GuzzleHttp\Client();

        $result = $client->get("https://www.goodreads.com/book/isbn/ISBN?format=json", [
            'form_params' => [
                'format'=> 'json',
                'user_id' => '12362246',
                //'title' => "The Dark is Rising",
                //'key' => 'pUZgFp2Vrq1OZlgyCsFAlA'
                'isbn' =>'0380795272'

            ]
        ]);
        
        //$body = $result->getHeader('content-type');
        $body = $result->getBody()->getContents();

    	//dd($reviews);

        
        return (compact('body'));*/

        //dd($reviews);

        return view('books.show', compact('book'));
    }

    
}
