@extends('layouts.app')

@section('content')
    <table class="table table-hover">
        <thead>
            <th>Category Name</th>
            <th>Editing</th>
            <th>Deleting</th>
        </thead>

        <tbody>
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
        </tbody>
    </table>
@endsection
