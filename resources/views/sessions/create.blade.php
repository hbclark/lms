@extends('layouts.default')
@section('title','login')
@section('content')
    <div class="col-md-offset-3 col-md-8">
        <div class="panel panel-default">
            <div class="panel panel-heading">
                <h4>Login</h4>
            </div>
            <div class="panel panel-body">
                <form method="post" action="{{route('login')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" value="{{old('email')}}">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" value="password">
                    </div>
                    <button tyep="submit" class="btn btn-success">Login</button>
                </form>
            </div>
        </div>
    </div>

@stop