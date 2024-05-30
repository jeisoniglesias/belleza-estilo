<?php

namespace App\Http\Controllers\Tipos;

use App\Http\Controllers\Controller;
use App\Models\Tipos\Categoria;
use App\Http\Requests\StoreCategoriaRequest;
use App\Http\Requests\UpdateCategoriaRequest;
use App\Models\Tipos\SubCategorias;
use Illuminate\Http\Request;

class TiposController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexCategorias()
    {
        return view('tipos.categorias-index', [
            'categorias' => Categoria::paginate(10)
        ]);
    }
    function indexSubCategorias()
    {
        return view('tipos.subcategorias-index', [
            'subcategorias' => SubCategorias::paginate(10)
        ]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categoria)
    {
        $categoria = Categoria::findOrFail($categoria->id);
        $categoria->delete();

        return redirect()->route('categorias.index')->with('success', 'Categoria deleted successfully');
    }
    public function destroySubcategoria(SubCategorias $sub)
    {
        $sub = SubCategorias::findOrFail($sub->id);
        $sub->delete();

        return redirect()->route('subcategorias.index')->with('success', 'Subcategoria deleted successfully');
    }
}
