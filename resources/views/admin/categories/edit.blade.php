@extends('layouts.app')

@section('content')
<div class="panel panel-info">
    <div class="panel-heading">
        <div class="panel-title">Update Category: {{$category->name}}</div>
    </div>
    <hr>
    <div class="panel-body" >
        <form action="{{route('category.update' , ['id' => $category->id])}}" method="POST" class="form-horizontal" >
            @csrf

            <div class="form-group">
                <label for="name" class="control-label">Name</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="name" value="{{$category->name}}" placeholder="Name">
                </div>
            </div>

            <div class="form-group">
                <!-- Button -->
                <div class="col-md-offset-3 col-md-9">
                    <button id="btn-signup" type="sybmit" class="btn btn-success"><i class="icon-hand-right"></i>Update Category </button>
                </div>
            </div>

        </form>
    </div>
</div>

@include('admin.includes.errors')


@endsection
