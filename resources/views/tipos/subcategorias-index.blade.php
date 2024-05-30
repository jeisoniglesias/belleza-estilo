@extends('layouts.dashboard')

@section('content')

<div class="jumbotron jumbotron-fluid rounded bg-white border-0 shadow-sm  px-4 bg-danger h-100">
    <div class="container h-100">
        <div class="row w-100">
            <div class="col-12 col-sm-8">
                <h1 class="display-4 mb-2 text-primary">SubCategorias</h1>
                <p class="lead text-muted">Listado de Subsubcategorias</p>
            </div>
            <div class="col-12 col-sm-4">
            @livewire('tipos.sub-categorias-create')

            </div>
        </div>
        <div class="mx-3">
            <div class="table-responsive">
                <table class="table table-sm">
                    <thead class="table-light">
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Categoria</th>
                        <th scope="col" colspan="2"></th>
                    </thead>
                    <tbody>
                        @foreach($subcategorias as $subcategoria)
                        <tr>
                            <th scope="row"> {{$subcategoria->id}} </th>
                            <td> {{$subcategoria->nombre}} </td>
                            <td> {{$subcategoria->categoria_id}} </td>
                            <td>
                                <!--buton delete $categoria->id route controller subcategorias.delete not livewire-->

                                <form action="{{ route('subcategorias.destroy', $subcategoria->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-transparent">
                                        <i class="bi bi-trash me-0 p-2"></i>
                                    </button>
                                </form>



                            </td>
                            <td> @livewire('tipos.sub-categorias-edit', $subsubcategoria ? ['subsubcategoria' => $subsubcategoria] : [])</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $subcategorias->links('vendor.pagination.bootstrap-5') }}

            </div>
        </div>
    </div>
</div>
@endsection