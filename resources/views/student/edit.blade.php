@extends('layout.master')

@section('content')
<h2 class="text-center">Edit Student Information</h2>

<div class="container">
	@if(session()->has('message'))
	    <div class="alert alert-success">
	        {{ session()->get('message') }}
	    </div>
	@endif
	<form action="{{ Route('student.update', $student->id) }}" class="col-md-6 m-auto" method="post" >
		@csrf
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" class="form-control" name="name" id="name" value="{{$student->name}}">
			<span class="text-danger">@error('name') {{ $message }} @enderror</span>
		</div>
		<div class="form-group">
			<label for="roll">Roll</label>
			<input type="text" class="form-control" name="roll" id = "roll" value="{{ $student->roll}}">
			<span class="text-danger">@error('roll') {{ $message }} @enderror</span>
		</div>
		<div class="form-group">
			<label for="address">Address</label>
			<input type="text" class="form-control" name="address" id = "address" value="{{$student->address}}">
			<span class="text-danger">@error('address') {{ $message }} @enderror</span>
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-primary" name ="submit" value="update">
		</div>
	</form>


</div>

@endsection
