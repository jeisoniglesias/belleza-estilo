@extends('layouts.dashboard')

@section('content')
<div class="container p-3">
    <form action="{{ route('categorias.store') }}" method="POST">
        @csrf
        <div class="m-2 border-bottom">
            <h2>Nueva Categoria</h2>
        </div>

        <div class="row">
            @include('pages.tipos.forms.fields-categoria', ['buttonText' => 'Crear'])
        </div>

    </form>
</div>
@endsection