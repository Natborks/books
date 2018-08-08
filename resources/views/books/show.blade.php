@extends('layouts.layout');

@section('content')
	<div class="jumbotron jumbotron-fluid">
	  <div class="container">
	    <h1 class="display-4">Title: {{$book->title}}</h1>
	    <p class="lead">Author: {{$book->author}}</p>
	     <p class="lead">Year: {{$book->year}}</p>
	  </div>
	</div>

@endsection