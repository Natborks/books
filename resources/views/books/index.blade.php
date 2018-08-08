@extends ('layouts.layout')

@section('content')
	<div class="container">
		<div class="row">
		  @foreach($books as $book)
		  <div class="col-sm-3">
		    <div class="card">
		      <div class="card-body">
		        <h5 class="card-title">{{$book->title}}</h5>
		        <p class="card-text">{{$book->author}} : {{$book->year}}</p>
		        <a href="/book/{{$book->isbn}}" class="btn btn-primary">View Details</a>
		      </div>
		    </div>
		  </div>
		  @endforeach
		</div>
	</div>
	
@endsection