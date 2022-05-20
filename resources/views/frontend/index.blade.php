@extends('frontend.layouts.default')

@section('content')

@include('frontend.pages.home')
@include('frontend.pages.services')
@include('frontend.pages.about')
{{-- @include('frontend.pages.portfolio') --}}
@include('frontend.pages.blog')
@include('frontend.pages.skills')
@include('frontend.pages.contact-form')


@stop