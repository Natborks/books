@extends('layouts.layout');

@section('content')
	<div class="jumbotron jumbotron-fluid">
	  <div class="container">
	    <h1 class="display-4">Title: {{$book->title}}</h1>
	    <p class="lead">Author: {{$book->author}}</p>
	     <p class="lead">Year: {{$book->year}}</p>
	  </div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="card">
				  <div class="card-header">
				    Featured
				  </div>
				  <div class="card-body">
				    <h5 class="card-title">Special title treatment</h5>
				    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
				    <a href="#" class="btn btn-primary">Go somewhere</a>
				  </div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="list-group">
				  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
				    <div class="d-flex w-100 justify-content-between">
				      <h5 class="mb-1">List group item heading</h5>
				      <small>3 days ago</small>
				    </div>
				    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
				    <small>Donec id elit non mi porta.</small>
				  </a>
				  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
				    <div class="d-flex w-100 justify-content-between">
				      <h5 class="mb-1">List group item heading</h5>
				      <small class="text-muted">3 days ago</small>
				    </div>
				    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
				    <small class="text-muted">Donec id elit non mi porta.</small>
				  </a>
				  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
				    <div class="d-flex w-100 justify-content-between">
				      <h5 class="mb-1">List group item heading</h5>
				      <small class="text-muted">3 days ago</small>
				    </div>
				    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
				    <small class="text-muted">Donec id elit non mi porta.</small>
				  </a>
				</div>
			</div>
		</div>
	</div>

@endsection