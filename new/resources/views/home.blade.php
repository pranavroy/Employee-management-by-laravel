@extends('layouts.app')

@section('content')
<div class="container" style="background-color:#C4FC8C">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table border="1px" width="600px">
					<tr><td>Id</td>
					<td>Name</td>
					<td>Email</td>
					<td>Salary</td>
					<td>Action</td></tr>
					@foreach($students as $student)
					<tr border="1px">
						<td>{{$student->id}}</td>
                        <td> {{$student->Name}}</td>
							<td>{{$student->Email}}</td>
							<td>{{$student->Salary}}</td>
							<td><a href="/delete/{{$student->id}}"><button>Delete</button></a></td>
					</tr>
					@endforeach
					</table>
					
					<a href="/add"><button>Add</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
