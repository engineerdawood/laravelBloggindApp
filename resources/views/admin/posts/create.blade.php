@extends('layouts.app')

@section('content')


<div class="panel panel-info">
    <div class="panel-heading">
        <div class="panel-title">Sign Up</div>
    </div>
    <hr>
    <div class="panel-body" >
        <form action="{{route('post.store')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="title" class="control-label">Title</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="title" placeholder="Title">
                </div>
            </div>

            <div class="form-group">
                <label for="featured" class="control-label">Featured</label>
                <div class="col-md-9">
                    <input type="file" class="form-control" name="featured">
                </div>
            </div>
            <div class="form-group">
                <label for="content" class="control-label">Content</label>
                <div class="col-md-9">
                    <textarea name="content" id="content" cols="44" rows="5"></textarea>
                </div>
            </div>

            <div class="form-group">
                <!-- Button -->
                <div class="col-md-offset-3 col-md-9">
                    <button id="btn-signup" type="sybmit" class="btn btn-success"><i class="icon-hand-right"></i>Store Post</button>
                </div>
            </div>

        </form>
    </div>
</div>

@include('admin.includes.errors')



@endsection
