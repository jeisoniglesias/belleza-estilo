@extends('layouts.dashboard')

@section('content')
<div class="container p-3">
    <form action="{{ route('categorias.update',$categoria->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="m-2 border-bottom">
            <h2>Actualizar Categoria</h2>
        </div>

        <div class="row">
            @include('pages.tipos.forms.fields-categoria')
        </div>

    </form>
</div>
@endsection