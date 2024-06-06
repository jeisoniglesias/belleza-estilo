@extends('layouts.dashboard')

@section('content')
<style>

</style>
<div class="container ">
    <div class="row border-bottom">
        <div class="col-12 col-sm-8">
            <h1 class="display-4 mb-2 text-primary">Productos</h1>
            <p class="lead text-muted">Listado de Productos</p>
        </div>
        <div class="col-12 col-sm-4 py-2">
            <div class="container  center-div">

                <a type="button" class="btn btn-outline-primary" href="{{route('productos.create')}}">
                    <i class="bi bi-plus-circle-dotted"></i>
                </a>
            </div>

        </div>
    </div>
    <div class="container">
        <x:dashboard.alert />
        <form method="GET" action="{{ route('productos.index') }}" class="mb-3" role="search">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Buscar por nombre">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
        </form>
        <table class="table table-hover table-responsive">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productos as $producto)
                <tr>
                    <th scope="row">{{ $producto->id }}</th>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->precio }}</td>
                    <td>{{ $producto->stock }}</td>
                    <td>{{ $producto->subcategoria->nombre }}</td>
                    <td>
                        <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-outline-primary">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
                {{ $productos->links('vendor.pagination.bootstrap-5') }}

            </tbody>
        </table>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        localStorage.removeItem('thumbnail');

    });
</script>
@endsection