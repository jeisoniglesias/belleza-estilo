@extends('layouts.dashboard')

@section('content')
<div class="container p-3">
    <form action="{{ route('sub.categorias.update',$subCategoria->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="m-2 border-bottom">
            <h2>Actualiza Sub Categoria</h2>
        </div>

        <div class="row">
            @include('pages.tipos.forms.fields-sub-categorias',['buttonText' => 'Actualizar'])
        </div>

    </form>
</div>
@endsection