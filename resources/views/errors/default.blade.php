@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container_error">


        <span class="left">404</span><br>
        <div class="pulse"></div>
        <i class="fas fa-heart fa-heart_error"></i>
        <span class="right text-center">
            <strong>{{$error_title}} </strong><br>
            <small>{{$error}}</small>
        </span>
    </div>
</div>
@endsection