@extends('layouts.default')
@section('title','student detail')
@section('content')
<div class="container jumbotron" id="studentDetail">

        <div class="row">
            <div class="col-md-1 avatar">
            @if(!$student->avatar)
                <img src="{{$student->gravatar(40)}}"
                     style="float:left;margin-right:20px;border-radius:50%">
            @else
                <img src="{{$student->avatar}}" style="width:40px;height:40px;float:left;margin-right:20px;border-radius:50%">
            @endif
            </div>
            <div class="col-md-4">
                <p class="info">Name:</p>
                <p class="info em">{{$student->firstName}} {{$student->lastName}}</p>
            </div>
            <div class="col-md-7">

                <a href="{{route('students.destroy',$student)}}"><button class="btn btn-success pull-right" style="magin-left:40px">Delete</button></a>
                <a href="{{route('students.edit',$student)}}"><button class="btn btn-success pull-right" style="padding-right:20px;">Edit</button></a>
            </div>
        </div>
    <div class="row">
        <div class="col-md-4">
            <p class="info">Contact Number</p>
            <p class="info em">{{$student->phoneNumber}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <p class="info">Login Email</p>
            <p class="info em">{{$student->email}}</p>
        </div>
    </div>

</div>
@stop