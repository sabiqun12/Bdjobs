@extends('frontend.layouts.master')


@section('content')

@include('frontend.pages.Banner')
@include('frontend.pages.product')
@include('frontend.pages.client')
@include('frontend.pages.contact')

@endsection

@section('banner_script')
@include('frontend.layouts.inc.script')
@endsection
