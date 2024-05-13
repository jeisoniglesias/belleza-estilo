@extends('layouts.base')

@section('content_base')

<div class="container_error">
    <span class="left">404</span><br>
    <div class="pulse"></div>
    <i class="fas fa-heart heart-error"></i>
    <span class="right text-center">
        <strong>{{$error_title}} </strong><br>
        <small>{{$error}}</small>
    </span>
</div>

@endsection