@extends('layouts.body')

@section('title', 'Travel Transport Phuket - create activities')

@section('bgmenu', ' ')

@section('activity', 'active bottonmenu')

@section('content')

	<div class="iBannerFix">
		<div class="row">
			<div class="col-md-12 col-md-offset-1">
				<div class="divbox">
					<h3>create entertainment</h3>
					<form action="/activity" method="post">
						<label for="activity name">activity name</label>
							<input type="text1" name="activity_name" placeholder="activity name">
						<label for="price adult">price adult</label>
							<input type="number" name="price_adult" placeholder="price adult">
						<label for="price child">price child</label>
							<input type="number" name="price_child" placeholder="price child">
						<label for="desciption">desciption</label>
							<textarea name="desciption"></textarea>
							<!-- <input type="file" name="pic" accept="image/*"> -->


<!-- MINIMUM IMAGE DIMENSIONS -->
<div class="file-loading">
    <input id="input-dim-1" name="input-dim-1[]" multiple type="file" accept="image/*">
</div>



							<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<input type="submit" value="Submit">
					</form>
					<a href="/home">next>>home</a>

				</div>
			</div>
		</div>
	</div>


<script>
$("#input-dim-1").fileinput({
    uploadUrl: "/file-upload-batch/2",
    allowedFileExtensions: ["jpg", "png", "gif"],
    minImageWidth: 50,
    minImageHeight: 50
});
</script>


@endsection