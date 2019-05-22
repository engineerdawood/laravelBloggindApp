@extends('layouts.app')

@section('content')


<div class="panel panel-info">
    <div class="panel-heading">
        <div class="panel-title">Create Category</div>
    </div>
    <hr>
    <div class="panel-body" >
        <form action="{{route('setting.store')}}" method="POST" class="form-horizontal" >
            @csrf

            <div class="form-group">
                <label for="Name" class="control-label">Site Name</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="site_name" value="{{ $settings->site_name }}">
                </div>
            </div>
            <div class="form-group">
                <label for="contact_number" class="control-label">Contact Number</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="contact_number" value="{{ $settings->contact_number }}">
                </div>
            </div>
            <div class="form-group">
                <label for="contact_email" class="control-label">Contact Email</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="contact_email" value="{{ $settings->contact_email }}">
                </div>
            </div>
            <div class="form-group">
                <label for="address" class="control-label">Address</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="address" value="{{ $settings->address }}">
                </div>
            </div>


            <div class="form-group">
                <!-- Button -->
                <div class="col-md-offset-3 col-md-9">
                    <button id="btn-signup" type="sybmit" class="btn btn-success"><i class="icon-hand-right"></i>Update Site Setting</button>
                </div>
            </div>

        </form>
    </div>
</div>

@include('admin.includes.errors')


@endsection
