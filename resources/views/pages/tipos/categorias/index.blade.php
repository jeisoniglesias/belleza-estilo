@extends('layouts.dashboard')

@section('content')

<div class="container ">
    <div class="row border-bottom">
        <div class="col-12 col-sm-8">
            <h1 class="display-4 mb-2 text-primary">Categorias</h1>
            <p class="lead text-muted">Listado de categorias</p>
        </div>
        <div class="col-12 col-sm-4 py-2">
            <div class="container  center-div">

                <a type="button" class="btn btn-outline-primary" href="{{route('categorias.create')}}">
                    <i class="bi bi-plus-circle-dotted"></i>
                </a>
            </div>

        </div>
    </div>
    <div class="container">
        <x:dashboard.alert />

        <div class="table-responsive">
            <table class="table table-sm details border border-light-subtle mb-1 border-bottom border-light rounded">
                <thead class="table-light ">
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descipcion</th>
                    <th scope="col" colspan="2"></th>
                </thead>
                <tbody class="table-group-divider">
                    @foreach($categorias as $categoria)
                    <tr>
                        <th scope="row"> {{$categoria->id}} </th>
                        <td> {{$categoria->nombre}} </td>
                        <td> {{$categoria->descripcion}} </td>
                        <td>
                            <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-transparent">
                                    <i class="bi bi-trash me-0 p-2 text-danger"></i>
                                </button>
                            </form>
                        </td>
                        <td>
                            <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-transparent">
                                <i class="bi bi-pencil-square me-0 p-2 text-success"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $categorias->links('vendor.pagination.bootstrap-5') }}

        </div>
    </div>
</div>

@endsection