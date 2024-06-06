@extends('layouts.dashboard')

@section('content')
<div class="container ">

    <div class="row border-bottom">
        <div class="col-12 col-sm-8">
            <h1 class="display-4 mb-2 text-primary">Publico</h1>
        </div>
        <div class="col-12 col-sm-4 py-2">
            <div class="container  center-div">
                <button class="btn btn-outline-primary" type="button" data-bs-toggle="collapse" data-bs-target="#formCollapse" aria-expanded="false" aria-controls="formCollapse" data-target="{{ isset($target) ?$target->id:null}}" id="formulario">
                    <i class="bi bi-plus-circle-dotted"></i>
                </button>
            </div>

        </div>
    </div>
    <div class="container">
        <x:dashboard.alert />

        <div class="m-2 py-2">
            <form class="d-flex" role="search" action="{{ route('targets.index') }}" method="GET">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" value="{{ request()->input('search') }}">
                <button class="btn btn-outline-success" type="submit" name="search" id="search">Search</button>
            </form>
        </div>

        <div class="collapse py-2" id="formCollapse">
            <div class="card">
                <div class="card-header">
                    <h2>Nueva Target</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ isset($target) ? route('targets.update', $target->id) : route('targets.store') }}">

                        @csrf
                        @if (isset($target))
                        @method('PUT')
                        @endif
                        <div class="container card-body bg-body-tertiary">

                            <div class="my-3 row">
                                <div class="col-12 col-md-8">
                                    <div class="row">
                                        <label for="name" class="col-sm-2 col-form-label">Nombre<span class="text-danger">*</span> :</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control bg-white @error('name') is-invalid @enderror" id="name" name="name" placeholder="Ingrese nombre de la Publico a ofertar" value="{{ old('name', $target->name ?? '') }}">

                                            @error('name')
                                            <span class="error text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>



                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="d-inline-flex gap-1">
                                        <button type="submit" class="btn btn-primary">{{ isset($target) ?"Actualizar":"Regsitrar"}}</button>

                                        <a href="{{route('targets.index')}}" class="btn btn-warning" id="cancelButton">Cancelar</a>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </form>

                </div>

            </div>
        </div>

        <div class=" table-responsive">
            <table class="table table-sm details border border-light-subtle mb-1 border-bottom border-light rounded">
                <thead class="table-light ">
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col" colspan="2"></th>
                </thead>
                <tbody class="table-group-divider">
                    @foreach($publicTarget as $target)
                    <tr>
                        <th scope="row"> {{$target->id}} </th>
                        <td> {{$target->name}} </td>
                        <td>
                            <form action="{{ route('targets.destroy', $target->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-transparent">
                                    <i class="bi bi-trash me-0 p-2 text-danger"></i>
                                </button>
                            </form>

                        </td>
                        <td>
                            <a href="{{ route('targets.edit', $target->id) }}" class="btn btn-sm btn-transparent">
                                <i class="bi bi-pencil-square me-0 p-2 text-success"></i>
                            </a>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $publicTarget->links('vendor.pagination.bootstrap-5') }}

        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        let boton = document.getElementById('formulario');
        const id = boton.getAttribute('data-target');
        if (id) {
            var collapse = document.getElementById('formCollapse');
            var bsCollapse = new bootstrap.Collapse(collapse, {
                toggle: true
            });
        }
        console.log(id);
    });
    document.getElementById('cancelButton').addEventListener('click', function() {
        // Eliminar atributo data-target del botón principal
        document.getElementById('formulario').removeAttribute('data-target');
    });
</script>

@endsection