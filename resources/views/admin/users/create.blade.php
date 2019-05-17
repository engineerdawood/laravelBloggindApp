@extends('layouts.app')

@section('content')


<div class="panel panel-info">
    <div class="panel-heading">
        <div class="panel-title">Create User</div>
    </div>
    <hr>
    <div class="panel-body" >
        <form action="{{route('user.store')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="name" class="control-label">Name</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="name" placeholder="Enter Username">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="control-label">Email</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="email" placeholder="Enter Username">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="control-label">Password</label>
                <div class="col-md-9">
                    <input type="password" class="form-control" name="password" placeholder="Enter Username">
                </div>
            </div>

            <div class="form-group">
                <!-- Button -->
                <div class="col-md-offset-3 col-md-9">
                    <button id="btn-signup" type="sybmit" class="btn btn-success"><i class="icon-hand-right"></i>Create User</button>
                </div>
            </div>

        </form>
    </div>
</div>

@include('admin.includes.errors')



@endsection
