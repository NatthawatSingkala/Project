@extends('layouts.body')

@section('title', 'Travel Transport Phuket - shuttle')

@section('bgmenu', ' ')

@section('shuttle', 'active bottonmenu')

@section('content')

		<div class="row">
			<div class="col-md-12 col-md-offset-2">
				<div class="divbox">
					@foreach( $shuttles as  $index => $item )
						<div>
							<h4> {{$index+1}} : {{$item->room_number}}</h4>
							<p>{{$item->pick_up}}<br>
							{{$item->drop_off}}<br>
							{{$item->drop_off}}<br>
							{{$item->drop_off}}</p>

								
								<form method="post" action="shuttle/{{$item->id}}" class="form-inline">
									<a href="shuttle/{{$item->id}}" class="btn btn-primary">Show</a> | 
									<a href="shuttle/{{$item->id}}/edit" class="btn btn-success">Edit</a> |		
									<input type="hidden" name="_method" value="Delete">
									<button class="btn btn-danger">Delete</button> 
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
								</form>
						</div>
						<hr>
					@endforeach
					<a href="home">home</a>
				</div>
			</div>
		</div>

@endsection