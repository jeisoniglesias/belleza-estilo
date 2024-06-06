<?php

namespace App\Http\Controllers\Tipos;

use App\Http\Controllers\Controller;
use App\Models\Tipos\Categoria;
use App\Http\Requests\tipos\StoreCategoriaRequest;
use App\Http\Requests\tipos\UpdateCategoriaRequest;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index1()
    {
        return view('pages.tipos.categorias.index', [
            'categorias' => Categoria::paginate(8)
        ]);
    }
    public function index(Request $request)
    {
        $query = Categoria::query();

        if ($request->filled('search')) {
            $query->where('nombre', 'like', '%' . $request->input('search') . '%');
        }

        return view('pages.tipos.categorias.index', [
            'categorias' => $query->paginate(8)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.tipos.categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoriaRequest $request)
    {
        $data = $request->validated();
        Categoria::create($data);
        return redirect()->route('categorias.index')->with('success', 'Categoria ' . $request->nombre . ' creada con éxito.');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoria $categoria)
    {
        return view('pages.tipos.categorias.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoriaRequest $request, Categoria $categoria)
    {
        $data = $request->validated();
        $categoria->update($data);
        return redirect()->route('categorias.index')->with('success', 'Categoría ' . $request->nombre . ' actualizada con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categoria)
    {
        if ($categoria->subcategorias()->exists()) {
            // La categoría tiene subcategorías asociadas
            return redirect()->route('categorias.index')->with('error', 'No se puede eliminar la categoría porque tiene subcategorías asociadas.');
        }

        // No hay subcategorías asociadas, proceder con la eliminación
        $categoria->delete();
        return redirect()->route('categorias.index')->with('success', 'Categoría eliminada con éxito.');
    }
}
