@extends('layouts.app')

@section('content')


<div class="panel panel-info">
    <div class="panel-heading">
        <div class="panel-title">Update Post</div>
    </div>
    <hr>
    <div class="panel-body" >
        <form action="{{route('post.update' , ['id'=>$post->id])}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="title" class="control-label">Title</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="title" value="{{$post->title}}">
                </div>
            </div>

            <div class="form-group">
                <label for="featured" class="control-label">Featured</label>
                <div class="col-md-9">
                    <input type="file" class="form-control" name="featured">
                </div>
            </div>
            <div class="form-group">
                <label for="category_id" class="control-label">Category</label>
                <div class="col-md-9">
                    <select name="category_id" id="category" class="form-control">
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}" @if ($category->id == $post->category_id)
                                    selected
                                @endif>{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="checkbox" class="control-label">Select Tags</label>
                @foreach ($tags as $tag)
                    <div class="checkbox">
                        <label for="checkbox">
                            <input type="checkbox" name="tags[]" value="{{$tag->id}}"
                            @foreach ($post->tags as $t)
                                @if ($tag->id == $t->id)
                                    checked
                                @endif
                            @endforeach
                            >
                            {{$tag->tag}}
                        </label>
                    </div>
                @endforeach
            </div>


            <div class="form-group">
                <label for="content" class="control-label">Content</label>
                <div class="col-md-9">
                    <textarea name="content" id="content" cols="44" rows="5">{{$post->content}}</textarea>
                </div>
            </div>

            <div class="form-group">
                <!-- Button -->
                <div class="col-md-offset-3 col-md-9">
                    <button id="btn-signup" type="sybmit" class="btn btn-info"><i class="icon-hand-right"></i>Update Post</button>
                </div>
            </div>

        </form>
    </div>
</div>

@include('admin.includes.errors')



@endsection
