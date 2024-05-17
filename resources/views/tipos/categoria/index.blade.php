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
    <div class="container">
        <div class="row w-100">
            <div class="col-8">
                <h1 class="display-4 mb-2 text-primary">Categorias</h1>
                <p class="lead text-muted">Listado de categorias</p>
            </div>
            <div class="col-4">
                <!--<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProduct">Add Product</button>-->



                <!--
                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Nueva Categoria</button>-->
                @livewire('tipos.category-form' )
            </div>


        </div>
    </div>

</div>
@endsection