@extends('layouts.default')
@section('title','login')
@section('content')
    <div class="col-md-offset-2 col-md-8 jumbotron">
        <div class="panel panel-default">
            <div class="panel panel-heading">
                <h4>Login</h4>

            </div>
            <div class="panel panel-body">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="post" action="{{route('login')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" name='email' class="form-control" value="{{old('email')}}">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" name='password' class="form-control" value={{old('password')}}>
                    </div>
                    <div class="form-group">
                        <label for="captcha">Cpatcha code:      </label>
                        <input type="text" id="captcha" class="form-control" name="captcha">
                        <img class="thumbnail captcha" src="{{captcha_src('flat')}}" onclick="this.src='/captcha/flat?'+Math.random()" title="Click the image to refresh the code">
                    </div>
                    <div>
                        <label><input type="checkbox" name="remember">Remember me</label>
                    </div>
                    <button tyep="submit" class="btn btn-success">Login</button>
                </form>
            </div>
        </div>
    </div>
@endsection