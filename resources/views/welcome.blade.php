@extends('layouts.generic')

@section('content')
    <div class="col-sm-3 col-md-9">
        <img src="{{ asset('images/bannerfstm.jpg')}}" width="100%">
        <br>
        Faculty of Information & Science Technology<br>
    </div>
    <div class="col-sm-3 col-md-3">
            <form method="post" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="usr">Email:</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-info"> Login </button>
            </form>
    </div>
@endsection
