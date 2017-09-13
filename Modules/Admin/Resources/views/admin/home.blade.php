@extends('admin::layouts.admin')

@section('content')
    <h1>Home Page</h1>

    <p>
        This view is loaded from module: {!! config('admin.name') !!}
    </p>
@stop
