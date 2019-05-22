@extends('layouts.app')

@section('content')
<div class="container">
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
					<form action="/insert" method="get">
                                                                          Name:  <input type="text" name="Name"><br>
                                                                          Email:  <input type="text" name="Email"><br>
																		  Salary: <input type="text" name="Salary"><br>

                                                                                     <input type="submit" name="login" value="Insert" >
                    </form>
					</div>
            </div>
        </div>
    </div>
</div>
@endsection