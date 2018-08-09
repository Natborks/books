<?php

use Illuminate\Database\Seeder;

use App\Book;

class BooksTabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (($handle = fopen ( public_path () . '/books.csv', 'r' )) !== FALSE) {
	        while ( ($data = fgetcsv ( $handle, 1000, ',' )) !== FALSE ) {
	            $csv_data = new Book ();
	            $csv_data->isbn = $data [0];
	            $csv_data->title = $data [1];
	            $csv_data->author = $data [2];
	            $csv_data->year = $data [3];
	            $csv_data->save ();
	        }
        fclose ( $handle );
    	}
    }
}
