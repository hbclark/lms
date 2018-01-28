@extends('layouts.default')
@section('title','Add student')
@section('content')
    <div class="container" style="margin-top: 30px">
        <div class="panel panel-default col-md-9 col-md-offset-1">
            <div class="panel-body">
                @include('shared._messages')
                @include('shared._errors')
                <form action="{{route('students.store')}}" method="post" accept-charset="UTF-8"
                      enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="Profile Photo">Profile Photo: </label>
                        <input type="file" name="avatar" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="firstName">FIRST NAME</label>
                        <input type="text" name="firstName" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="lastName">LAST NAME</label>
                        <input type="text" name="lastName" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">EMAIL ADDRESS</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="phoneNumber">PHONE NUMBER</label>
                        <input type="text" name="phoneNumber" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success"
                            style="float:right;margin-left:10px;border-radius: 24px">UPDATE
                    </button>
                </form>
                <a href="{{route('students.index')}}">
                    <button class="btn btn-success" style="float:right;border-radius: 24px">Cancel</button>
                </a>
            </div>
        </div>
    </div>


@stop