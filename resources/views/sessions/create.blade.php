@extends('layouts.default')
@section('title','login')
@section('content')
<div class="col-md-offset-3 col-md-8">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5>Login</h5>

        </div>
        <div class="panel-body">

            <form method="post" action="{{route('login')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" name="email" class="form-control" value="{{old('email')}}">
                </div>
                <div class="form-group">
                    <label for="password">Password:(<a href="#">Forgot Password</a>)</label>
                    <input type="password" name="password" class="form-control" value="{{old('password')}}">
                </div>
                <div class="form-group">
                    <label><input type="checkbox" name="remember">remember me</label>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
            <hr>
            <p>Not registered?<a href="#}">Enroll Now</a></p>
        </div>
    </div>
</div>
@stop