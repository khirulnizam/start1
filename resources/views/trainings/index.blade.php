@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Listing Trainings</div>

                <div class="card-body">
                    <table class="table table-striped">
					<thead>
					  <tr>
						<th>ID</th>
						<th>Training Name</th>
						<th>Desc</th>
						<th>Action</th>
					  </tr>
					</thead>
					<tbody>
					  @foreach($trainings as $training)
					  <tr>
						<td>{{$training['id']}}</td>
						<td>{{$training['trainingname']}}</td>
						<td>{{$training['desc']}}</td>
						<td></td>
					  </tr>
					  @endforeach
					<tbody>
					</table>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
