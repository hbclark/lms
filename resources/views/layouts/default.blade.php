<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>@yield('title','LMS')</title>
    <!--CSRF Token -->
    <meta name="csrf-token" content="{{csrf_token()}}">

    <!-- Style -->
    <link rel="stylesheet" href="/css/app.css">
    <script defer src="/js/fontawesome-all.js"></script>

</head>
<body>
    @include('layouts._header')
    <main class="container-fluid" >
        <div class="col-md-2 col-sm-3 sidebar">
            @if(Auth::check())
            <img src="{{Auth::user()->gravatar('30')}}" alt="{{Auth::user()->name}}" style="float:left;margin-right:20px">
            <div style="color:white;margin-left:20px"> Welcome Back!<br>
            <span> {{Auth::user()->name}}</span>
            </div>
            @endif
            <ul class="nav nav-pills nav-stacked">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="far fa-file-alt"></i>Courses
                    <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-graduation-cap"></i>Lectures</a>
                <li class="nav-item"><a class="nav-link" href={{route('students.index')}}><i class="far fa-user"></i>Students</a>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-sign-out-alt"></i>Logout</a>
            </ul>
        </div>


        <div class="col-md-offset-2 col-md-10">

            @include('shared._messages')
            @yield('content')

        </div>
        @include('layouts._footer')

    </main>

<script src="/js/app.js"></script>
</body>
</html>