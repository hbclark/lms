@foreach(['danger','warning','success','info'] as $msg)
    @if(session()->has($msg))
        <div class="col-md-offset-2 col-md-8">
            <div class="flash-message">
                <p class="alert alert-{{$msg}}">
                    {{session()->get($msg)}}<br>
                </p>
            </div>
        </div>
    @endif
@endforeach


