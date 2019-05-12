@extends('layouts.app')

@section('content')
    <div class="panel-heading">
        <div class="panel-title">Categories</div>
    </div>
    <hr>
    <table class="table table-hover">
        <thead>
            <th>Category Name</th>
            <th>Editing</th>
            <th>Deleting</th>
        </thead>

        <tbody>
            @if (count($categories) > 0)
                @foreach ($categories as $category)
                <tr>
                    <td>
                        {{$category->name}}
                    </td>
                    <td>
                        <a href="{{route('category.edit', ['id' => $category->id])}}" class="btn btn-xs btn-info">
                            <span >Edit</span>
                        </a>
                    </td>
                    <td>
                        <a href="{{route('category.delete', ['id' => $category->id])}}" class="btn btn-xs btn-danger">
                            <span >Delete</span>
                        </a>
                    </td>
                </tr>
                @endforeach
            @else
                <tr>
                    <th colspan="5" class="text-center">No category created</th>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
