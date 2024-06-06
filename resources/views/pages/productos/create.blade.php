@extends('layouts.dashboard')

@section('content')
<div class="container p-3">
    <form action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="m-2 border-bottom">
            <h2>Nueva Categoria</h2>
        </div>
        @include('pages.productos.forms.fields-producto')


    </form>
</div>

@endsection