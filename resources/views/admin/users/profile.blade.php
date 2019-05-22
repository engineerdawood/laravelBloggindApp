@extends('layouts.app')

@section('content')


<div class="panel panel-info">
    <div class="panel-heading">
        <div class="panel-title">Your Profile</div>
    </div>
    <hr>
    <div class="panel-body" >
        <div class="form-horizontal" >

            <div class="form-group">
                <label for="name" class="control-label">Name</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="title" placeholder="{{$user->name}}" disabled>
                </div>
            </div>

            <div class="form-group">
                <label for="name" class="control-label">Picture</label>
                <div class="col-md-9">
                    <img src="{{ asset($user->profile->avatar) }}" alt="" width="60px" height="60px" style="border-radius: 50%">
                </div>
            </div>

            <div class="form-group">
                <label for="featured" class="control-label">Email</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="{{$user->email}}"disabled>
                </div>
            </div>

            <div class="form-group">
                <label for="featured" class="control-label">Facebook</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="{{$user->profile->facebook}}"disabled>
                </div>
            </div>

            <div class="form-group">
                <label for="featured" class="control-label">Youtube</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="{{$user->profile->youtube}}"disabled>
                </div>
            </div>

            <div class="form-group">
                <label for="content" class="control-label">About</label>
                <div class="col-md-9">
                    <textarea name="content" id="content" cols="44" rows="5" disabled>{{$user->profile->about}}</textarea>
                </div>
            </div>

            <div class="form-group">
                <!-- Button -->
                <div class="col-md-offset-3 col-md-9">
                    <a href="{{route('profile.edit')}}">
                        <button id="btn-signup" type="sybmit" class="btn btn-success"><i class="icon-hand-right"></i>Edit Profile</button>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

@include('admin.includes.errors')



@endsection
