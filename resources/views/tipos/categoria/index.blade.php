@extends('layouts.dashboard')

@section('content')
<style>
    table {
        border: 0;
        width: 100%;
        margin: 0;
        padding: 0;
        border-collapse: collapse;
        border-spacing: 0;
        box-shadow: 0 1px 1px rgba(0, 0, 0, .3);

        thead {
            background: red !important;
            ;
            height: 60px !important;

            tr {
                th:first-child {
                    padding-left: 45px;
                }

                th {
                    text-transform: uppercase;
                    line-height: 60px !important;
                    text-align: left;
                    font-size: 11px;
                    padding-top: 0px !important;
                    padding-bottom: 0px !important;
                }
            }
        }

        tbody {
            background: #fff;

            tr {
                border-top: 1px solid #e5e5e5;
                height: 60px;

                td:first-child {
                    padding-left: 45px;
                }

                td {
                    height: 60px;
                    line-height: 60px !important;
                    text-align: left;
                    padding: 0 10px;
                    font-size: 14px;

                    i {
                        margin-right: 8px;
                    }
                }
            }
        }
    }

    @media screen and (max-width: 800px) {
        table {
            border: 1px solid transparent;
            box-shadow: none;

            thead {
                display: none;
            }

            tbody {
                tr {
                    border-bottom: 45px solid #F8F8F8;

                    td:first-child {
                        padding-left: 10px;

                    }

                    td:before {
                        content: attr(data-label);
                        float: left;
                        font-size: 10px;
                        text-transform: uppercase;
                        font-weight: bold;
                    }

                    td {
                        display: block;
                        text-align: right;
                        font-size: 14px;
                        padding: 0px 10px !important;
                        box-shadow: 0 1px 1px rgba(0, 0, 0, .3);
                    }
                }
            }
        }
    }
</style>
<div class="jumbotron jumbotron-fluid rounded bg-white border-0 shadow-sm  px-4 bg-danger">
    @error('nombre')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
    <div class="container">
        <div class="row w-100">
            <div class="col-8">
                <h1 class="display-4 mb-2 text-primary">Categorias</h1>
                <p class="lead text-muted">Listado de categorias</p>
            </div>
            <div class="col-4">

            </div>


        </div>
    </div>


    <table class="table">
        <thead>
            <tr>
                <th></th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorias as $categoria)
            <tr>
                <td data-label="">{{ $categoria->id }}</td>
                <td data-label="Nombre">{{ $categoria->nombre }}</td>
                <td data-label="Descripcion">{{ $categoria->descripcion }}</td>
                <td data-label="">
                    <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-primary btn-sm">
                        <i class="fa fa-pencil"></i>
                    </a>
                    <a href="{{ route('categorias.destroy', $categoria->id) }}" class="btn btn-danger btn-sm">
                        <i class="fa fa-trash"></i>
                    </a>
            </tr>
            @endforeach

        </tbody>
    </table>

    <form action="{{ route('categorias.store') }}" id="categoria-form" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" aria-describedby="emailHelp">
            @error('nombre')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <div id="nombreHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripcion</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" aria-describedby="emailHelp">
            <div id="descripcionHelp" class="form-text">We'll never share your email with anyone else.</div>

    </form>
</div>
<button type="submit" class="btn btn-primary" onclick="event.preventDefault();document.getElementById('categoria-form').submit();">Enviar</button>

<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Toggle right offcanvas</button>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas right</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

    </div>
</div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('categorias.store') }}" id="myform" name="myform" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" aria-describedby="emailHelp">
                        @error('nombre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div id="nombreHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripcion</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion" aria-describedby="emailHelp">
                        <div id="descripcionHelp" class="form-text">We'll never share your email with anyone else.

                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary" onclick="event.preventDefault();document.getElementById('myform').submit();">Save changes</button>
            </div>
        </div>
    </div>
</div>
@if(session()->has('error'))
<script>
    $('#exampleModalLabel').modal('show');
</script>
@endif

@endsection