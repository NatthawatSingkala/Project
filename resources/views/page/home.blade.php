@extends('layouts.body')

@section('title', 'Travel Transport Phuket')

@section('bgmenu', ' ')

@section('home', 'active bottonmenu')

@section('content')

	<div class="iBannerFix">
		<div class="row">
			<div class="col-md-12 col-md-offset-1">
				<div class="divbox">
					<h3>Where to go in area Phuket</h3>
					<form action="/shuttle" method="post">
							<input type="text1" name="room_number" placeholder="Room number">
						<label for="From">From</label>
							<input type="text1" name="pick_up" placeholder="From">
						<label for="To">To</label>
							<input type="text1" name="drop_off" placeholder="To">
							<input type="text1" id="datetimepicker_dark" name="pickupone_date">
							<input type="text1" id="datetimepicker_dark1" name="pickuptwo_date">

							<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<input type="submit" value="Submit">
					</form>
				</div>
			</div>
		</div>
	</div>

@endsection