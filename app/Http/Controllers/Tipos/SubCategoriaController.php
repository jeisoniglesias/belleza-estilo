<?php

namespace App\Http\Controllers\Tipos;

use App\Http\Controllers\Controller;
use App\Models\Tipos\SubCategorias;
use App\Http\Requests\tipos\StoreSubCategoriasRequest;
use App\Http\Requests\tipos\UpdateSubCategoriasRequest;
use App\Models\Tipos\Categoria;

class SubCategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subCategorias = SubCategorias::with('categoria')->paginate(8);
        return view('pages.tipos.sub-categorias.index', compact('subCategorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('pages.tipos.sub-categorias.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubCategoriasRequest $request)
    {
        try {
            SubCategorias::create($request->all());
            return redirect()->route('sub.categorias.index')->with('success', 'SubCategoría creada con éxito.');
        } catch (\Exception $e) {
            return redirect()->route('sub.categorias.index')->with('error', 'No se puede crear la SubCategoría.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubCategorias $subCategoria)
    {
        $categorias = Categoria::all();
        return view('pages.tipos.sub-categorias.edit', compact('subCategoria', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubCategoriasRequest $request, SubCategorias $subCategoria)
    {
        try {
            $validatedData = $request->validated();
            $subCategoria->fill($validatedData);
            $subCategoria->save();

            return redirect()->route('sub.categorias.index')->with('success', 'SubCategoría actualizada con éxito.');
        } catch (\Exception $e) {
            return redirect()->route('sub.categorias.index')->with('error', 'No se puede actualizar la SubCategoría.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $idsub)
    {
        try {
            $subCategoria = SubCategorias::findOrFail($idsub);
            $subCategoria->delete();
            return redirect()->route('sub.categorias.index')->with('success', 'SubCategoría eliminada con éxito.');
        } catch (\Exception $e) {
            return redirect()->route('sub.categorias.index')->with('error', 'No se puede eliminar la SubCategoría.');
        }
    }
}
