@extends('layouts.app')

@section('content')

    <div class="panel-heading">
        <div class="panel-title">Posts</div>
    </div>
    <hr>
    <table class="table table-hover">
        <thead>
            <th>Image</th>
            <th>Title</th>
            <th>Edit</th>
            <th>Deleting</th>
        </thead>

        <tbody>
            @if (count($posts) > 0)
                @foreach ($posts as $post)
                <tr>
                    <td>
                        <img src="{{$post->featured}}" width="90px" height="50px" alt="">
                    </td>
                    <td>
                        {{$post->title}}
                    </td>
                    <td>
                        <a href="{{route('post.edit', ['id' => $post->id])}}" class="btn btn-xs btn-info">
                            <span >Edit</span>
                        </a>
                    </td>
                    <td>
                        <a href="{{route('post.delete', ['id' => $post->id])}}" class="btn btn-xs btn-danger">
                            <span>Trash</span>
                        </a>
                    </td>
                </tr>
                @endforeach

            @else
                <tr>
                    <th colspan="5" class="text-center">No post created</th>
                </tr>
            @endif

        </tbody>
    </table>
@endsection
