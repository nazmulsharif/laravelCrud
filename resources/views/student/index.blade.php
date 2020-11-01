@extends('layout.master')
@section('content')

	<div class="container">
		<h2 class="text-center">Student Information</h2>
		@if(session()->has('message'))
			<div class="alert alert-danger">
				{{ session()->get('message') }}
			</div>

		@endif
		<table class="table table-bordered">
			<tr>
				<th>Sl</th>
				<th>Name</th>
				<th>Roll</th>
				<th>Address</th>
				<th>Action</th>
			</tr>

	</div>
	@php $i =1 ;@endphp
	@foreach($students as $student)
		<tr>
			<td>{{ $i++ }}</td>
			<td>{{ $student->name}}</td>
			<td>{{ $student->roll}}</td>
			<td>{{ $student->address}}</td>
			<td>
				<a href="{{ Route('student.edit', $student->id )}}" class="btn btn-primary">edit</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$student->id}}">
                   Delete
                </button>
			</td>
		</tr>
        <!-- Button trigger modal -->


        <!-- Modal -->
        <div class="modal fade" id="delete{{$student->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Are You sure?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                      Delete Permanently!
                    </div>
                    <div class="modal-footer">
                        <a href="{{ Route('student.delete',$student->id)}}" class ="btn btn-danger">Delete</a>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>




	@endforeach

	</table>

@endsection
