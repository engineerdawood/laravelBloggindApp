@extends('layouts.app')

@section('content')
    <div class="panel-heading">
        <div class="panel-title">Trashed Posts</div>
    </div>
    <hr>
    <table class="table table-hover">
        <thead>
            <th>Image</th>
            <th>Title</th>
            <th>Restore</th>
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
                        <a href="{{route('post.restore', ['id' => $post->id])}}" class="btn btn-xs btn-primary">
                            <span >Restore</span>
                        </a>
                    </td>
                    <td>
                        <a href="{{route('post.kill', ['id' => $post->id])}}" class="btn btn-xs btn-danger">
                            <span >Delete</span>
                        </a>
                    </td>
                </tr>
                @endforeach

            @else
                <tr>
                    <th colspan="5" class="text-center">No trashed post</th>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
