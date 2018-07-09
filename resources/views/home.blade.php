@extends('layouts.generic')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>You are logged as administrator. Add a new record or update record now!</p>
                        <a href="{{ url("trainings/create") }}" class="btn btn-success"> Insert a record</a>
                        <a href="{{ url("trainings") }}" class="btn btn-warning"> Update/delete a record</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
