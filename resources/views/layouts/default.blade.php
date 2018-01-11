<!DOCTYPE html>
<html>
<head>
    <title>@yield('title','LMS')</title>
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="/css/app.css">

</head>
<body>
@include('layouts._header')
    <main class="col-md-offset-1 container">
        <div class="col-md-10">

        @yield('content')
            @include('layouts._footer')

        </div>
    </main>
<script src="/js/app.js"></script>
</body>
</html>