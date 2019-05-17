@extends('layouts.app')

@section('content')

    <div class="panel-heading">
        <div class="panel-title">Users</div>
    </div>
    <hr>
    <table class="table table-hover">
        <thead>
            <th>Image</th>
            <th>Name</th>
            <th>Permissions</th>
            <th>Delete</th>
        </thead>

        <tbody>
            @if (count($users) > 0)
                @foreach ($users as $user)
                <tr>
                    <td>
                        <img src="{{asset($user->profile->avatar)}}" alt="" width="60px" height="60px" style="border-radius: 50%">
                    </td>
                    <td>
                        {{$user->name}}
                    </td>
                    <td>
                        @if($user->admin)
                            <a href="{{route('user.make.user', ['id'=>$user->id])}}">
                                <button type="button" class="btn btn-danger">Remove Admin</button>
                            </a>
                        @else
                            <a href="{{route('user.make.admin', ['id'=>$user->id])}}">
                                <button type="button" class="btn btn-primary">Make Admin</button>
                            </a>
                        @endif
                    </td>
                    <td>
                        Delete
                    </td>

                </tr>
                @endforeach

            @else
                <tr>
                    <th colspan="5" class="text-center">No Users</th>
                </tr>
            @endif

        </tbody>
    </table>
@endsection
