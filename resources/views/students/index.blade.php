@extends ('layouts.default')
@section('title','Students')
@section('content')
    <div class="row" style="margin-top:20px">
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-3">
                        <i class="fas fa-graduation-cap fa-4x" style="margin:0 20px;float:left"></i>
                        <h4 style="color: #2e8d5c;">{!! count(App\Student::all()) !!}</h4>
                        <h4>STUDENTS</h4>
                    </div>
                    <div class="col-md-9" style="padding-top:15px">
                        <a href="{{route('students.create')}}">
                            <button class="btn btn-primary"
                                    style="border-radius: 24px;float:right;background-color:#2e8d5c">Add Student
                            </button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-body">
                    <ul>
                        @foreach($students as $student)
                            <li style="list-style:none;overflow:auto;border-bottom: 1px solid lightgray">
                                <div class="col-md-4" style="clear:left">
                                    @if(!$student->avatar)
                                    <img src="{{$student->gravatar(40)}}"
                                         style="float:left;margin-right:20px;border-radius:50%">
                                    @else
                                        <img src="{{$student->avatar}}" style="width:40px;height:40px;float:left;margin-right:20px;border-radius:50%">
                                    @endif
                                    <p>{{$student->firstName}} {{$student->lastName}}</p>
                                    <p>{{$student->email}}</p>
                                </div>
                                <div class="col-md-8">
                                    <div style="float:right">
                                        <a href="{{route('students.show',$student)}}">
                                            <button class="btn btn-success" style="border-radius: 24px">View Detail
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <br>


                        @endforeach
                    </ul>

                    {!! $students->links() !!}
                </div>
            </div>
        </div>

    </div>
@stop