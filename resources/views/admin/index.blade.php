@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('admin.create') }}" class="btn btn-success">New post</a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <p><strong>Learn Laravel</strong> <a href="{{ route('admin.edit') }}">Edit</a></p>
        </div>
    </div>
@endsection