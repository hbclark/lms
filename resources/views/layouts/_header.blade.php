<nav class="navbar-nav navbar-fixed-top navbar-inverse" role="navigation">
    <div class="container">
        <div class="col-md-offset-1 col-md-10">
            @if(\Illuminate\Support\Facades\Auth::check())
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">LMS</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{route('help')}}" >Help</a></li>
                    <li><a href="{{route('logout')}}" class="active">Logout</a></li>
                </ul>
            @else
            <div class="navbar-header">
                <a class="navbar-brand" href="#">LMS</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{route('help')}}" >Help</a></li>
                <li><a href="{{route('login')}}" class="active">Login</a></li>
            </ul>
            @endif

        </div>


</nav>