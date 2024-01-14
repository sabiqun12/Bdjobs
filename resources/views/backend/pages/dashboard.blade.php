@extends('backend.layouts.master')

@section('backend_title')
Dashboard
@endsection
@section('content_title')
@section('content')
<div class="container">
    @if(session()->has('status'))
    <div class="alert alert-success text-center">{{ session()->get('status') }}</div>
    @endif
</div>
<h3 class="text-center">Welcome to Dashboard</h3>
@endsection