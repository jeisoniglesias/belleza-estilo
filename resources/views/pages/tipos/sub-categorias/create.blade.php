@extends('layouts.dashboard')

@section('content')
<div class="container p-3">
    <form action="{{ route('sub.categorias.store') }}" method="POST">
        @csrf
        <div class="m-2 border-bottom">
            <h2>Nueva Sub Categoria</h2>
        </div>

        <div class="row">
            @include('pages.tipos.forms.fields-sub-categorias')
        </div>

    </form>
</div>
@endsection