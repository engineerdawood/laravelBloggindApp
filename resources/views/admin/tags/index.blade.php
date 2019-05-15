@extends('layouts.app')

@section('content')
    <div class="panel-heading">
        <div class="panel-title">Tags</div>
    </div>
    <hr>
    <table class="table table-hover">
        <thead>
            <th>Tag Name</th>
            <th>Editing</th>
            <th>Deleting</th>
        </thead>

        <tbody>
            @if (count($tags) > 0)
                @foreach ($tags as $tag)
                <tr>
                    <td>
                        {{$tag->tag}}
                    </td>
                    <td>
                        <a href="{{route('tag.edit', ['id' => $tag->id])}}" class="btn btn-xs btn-info">
                            <span >Edit</span>
                        </a>
                    </td>
                    <td>
                        <a href="{{route('tag.delete', ['id' => $tag->id])}}" class="btn btn-xs btn-danger">
                            <span >Delete</span>
                        </a>
                    </td>
                </tr>
                @endforeach
            @else
                <tr>
                    <th colspan="5" class="text-center">No Tags created</th>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
