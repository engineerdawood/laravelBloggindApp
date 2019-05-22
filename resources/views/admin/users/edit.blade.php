@extends('layouts.app')

@section('content')


<div class="panel panel-info">
    <div class="panel-heading">
        <div class="panel-title">Your Profile</div>
    </div>
    <hr>
    <div class="panel-body" >
        <form action="{{route('profile.update')}}" class="form-horizontal" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name" class="control-label">Name</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="name" value="{{$user->name}}">
                </div>
            </div>

            <div class="form-group">
                <label for="avatar" class="control-label">Picture</label>
                <div class="col-md-9">
                    <input type="file" name="avatar" id="">
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="control-label">Email</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="email" value="{{$user->email}}" >
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="control-label">Password</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="password" placeholder="Enter Password" >
                </div>
            </div>

            <div class="form-group">
                <label for="Facebook" class="control-label">Facebook</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="facebook" value="{{$user->profile->facebook}}">
                </div>
            </div>

            <div class="form-group">
                <label for="Youtube" class="control-label">Youtube</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="youtube" value="{{$user->profile->youtube}}">
                </div>
            </div>

            <div class="form-group">
                <label for="about" class="control-label">About</label>
                <div class="col-md-9">
                    <textarea name="about" id="content" cols="44" rows="5" >{{$user->profile->about}}</textarea>
                </div>
            </div>

            <div class="form-group">
                <!-- Button -->
                <div class="col-md-offset-3 col-md-9">
                    <button type="submit" class="btn btn-success"><i class="icon-hand-right"></i>Update Profile</button>
                </div>
            </div>

        </form>
    </div>
</div>

@include('admin.includes.errors')



@endsection
