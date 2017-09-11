@extends('layouts.body')

@section('title', 'Travel Transport Phuket')

@section('bgmenu', ' ')

@section('activity', 'active bottonmenu')

@section('content')

		<div class="row">
			<div class="col-md-12 col-md-offset-2">
				<div class="divbox">
					@foreach( $activities as  $index => $item )
						<div>
							<h4> {{$index+1}} : {{$item->activity_name}}</h4>
							<p>{{$item->price_adult}}</p>
							<p>{{$item->price_child}}</p>
							<p>{{$item->desciption}}</p>


								
								<form method="post" action="activity/{{$item->id}}" class="form-inline">
									<a href="activity/{{$item->id}}" class="btn btn-primary">Show</a> | 
									<a href="activity/{{$item->id}}/edit" class="btn btn-success">Edit</a> |		
									<input type="hidden" name="_method" value="Delete">
									<button class="btn btn-danger">Delete</button> 
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
								</form>

						</div>
						<hr>
					@endforeach
					<a href="/activity/create">activity_create</a>

				</div>
			</div>
		</div>

@endsection