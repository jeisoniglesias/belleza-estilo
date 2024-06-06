@extends('layouts.app')

@section('content')
<style>
    .nav-link-home {
        text-decoration: none !important;
        color: black;
    }

    .nav-link-home.active {
        border-bottom: 2px solid red;
    }
</style>
<div class="row">
    <div class="container my-0">
        <ul class="nav justify-content-end ">
            <!--TODO: add event button for filter method and update var products -->
            <li class="nav-item nav-item-home ">
                <a class="nav-link nav-link-home {{($subcategoria)?:'active'}}" aria-current="page" href="/">Todos</a>
            </li>

            @foreach($subCategorias as $id => $nombre)
            <li class="nav-item">
                <a class="nav-link nav-link-home 
                {{($subcategoria==$id)?'active':''}}" href="{{ route('store', ['subcategoria' => $id]) }}">{{ $nombre }}</a>
            </li>
            @endforeach



        </ul>
        <div class="container">
            @if($productos->isEmpty())
            <div class="p-5 text-center bg-white rounded-3 h-auto">
                <h2>No hay productos disponibles</h2>
            </div>
            @else
            <div class="row">
                @foreach($productos as $producto)
                <x:card-product :producto="$producto" />
                @endforeach
                @endif

            </div>
        </div>

    </div>
</div>
@endsection