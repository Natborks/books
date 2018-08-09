<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;

class BooksController extends Controller
{
    //
    public function index() {
    	/*if (($handle = fopen ( public_path () . '/books.csv', 'r' )) !== FALSE) {
	        while ( ($data = fgetcsv ( $handle, 1000, ',' )) !== FALSE ) {
	            $csv_data = new Book ();
	            $csv_data->isbn = $data [0];
	            $csv_data->title = $data [1];
	            $csv_data->author = $data [2];
	            $csv_data->year = $data [3];
	            $csv_data->save ();
	        }
        fclose ( $handle );
    	}*/

    	$books = \App\Book::all();

    	return view('books.index',compact('books'));
    }

    public function show($isbn) {
    	$book = \App\Book::find($isbn);

    	return view('books.show', compact('book'));
    }

    
}
