@extends('layouts.generic')

@section('content')

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
                    <h2>Edit Training Record</h2>
                    <br>
                    <form method="post" action="{{action('TrainingController@update', $id)}}">
                    @csrf
                    <input name="_method" type="hidden" value="PATCH">

                            <label for="trainingname">Training Name:</label>
                            <input type="text" class="form-control" name="trainingname"
                                   value="{{$training->trainingname}}">

                            <label for="desc">Description:</label>
                            <input type="text" class="form-control" name="desc"
                                   value="{{$training->desc}}">

                            <label for="trainer">Trainer:</label>
                            <input type="text" class="form-control" name="trainer"
                                   value="{{$training->trainer}}">

                            <button type="submit" class="btn btn-success">Save Update</button>

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection