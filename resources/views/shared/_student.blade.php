<li>
    <img src="{{$student->gravatar()}}" alt="{{$student->name}}" class="gravatar">
    <a href="{{route('students.show',$user)}}">{{$user->name}}</a>
</li>

<li>
    <img src="{{$user->gravatar()}}" alt="{{$user->name}}" class="gravatar">
    <a href="{{route('users.show',$user)}}" class="username">{{$user->name}}</a>

    @can('destroy',$user)
        <form action="{{route('users.destroy',$user)}}" method="post">
            {{csrf_field()}}
            {{method_field("DELETE")}}
            <button type="submit" class="btn btn-sm btn-danger delete-btn">Delete User</button>
        </form>
    @endcan
</li>