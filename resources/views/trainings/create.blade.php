@extends('layouts.generic')
@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div align="right">
                    <a href="{{ url('trainings/create') }}">Insert </a> ||
                    <a href="{{ url('trainings') }}">Listing for Update/Delete</a>
                </div>

                <div class="card">
                    <div class="card-header">Insert new Training</div>

                    <div class="card-body">

                    <form method="post" action="{{url('trainings')}}">
                    @csrf
                      <label for="trainingname">Training Name</label>
                      <input type="text" class="form-control" name="trainingname">

                      <label for="desc">Description</label>
                      <input type="text" class="form-control" name="desc">

                      <label for="trainer">Trainer</label>
                      <input type="text" class="form-control" name="trainer">
                      <button type="submit" class="btn btn-primary"> Insert to DB </button>
                    </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection