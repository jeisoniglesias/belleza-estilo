<?php

namespace App\Http\Controllers\Productos;

use App\Http\Controllers\Controller;
use App\Http\Requests\productos\StoreProductoRequest;
use App\Http\Requests\productos\UpdateProductoRequest;
use App\Models\Productos\Producto;
use App\Models\Tipos\PublicTarget;
use App\Models\Tipos\SubCategorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::paginate(8);
        return view('pages.productos.index', compact('productos'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $subcategorias = SubCategorias::pluck('nombre', 'id');
        $target = PublicTarget::pluck('name', 'id');
        return view('pages.productos.create', compact('subcategorias', 'target'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductoRequest $request)
    {
        $data = $request->all();
        $data['thumbnail'] = $this->_saveImage($request->file('thumbnail'), $data['nombre']);
        Producto::create($data);
        return redirect()->route('productos.index');
    }

    private function _saveImage($imagen, $name)
    {
        /*$nombreImagen = 'imagenes/' . date('d-m-Y') . '-' . $name . '.' . $file->getClientOriginalExtension();
        $rutaImagen = Storage::disk('public')->put($nombreImagen, file_get_contents($file));
        return 'storage/' . $rutaImagen;*/
        $nombreImagen = date('d-m-Y') . '-' . $name . $imagen->getClientOriginalName();
        $rutaImagen = $imagen->storeAs('imagenes', $nombreImagen, 'public');

        return  Storage::url($rutaImagen);
    }
    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        return view('pages.productos.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        $subcategorias = SubCategorias::pluck('nombre', 'id');
        $target = PublicTarget::pluck('name', 'id');
        return view('pages.productos.edit', compact('producto', 'subcategorias', 'target'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductoRequest $request, Producto $producto)
    {

        $data = $request->all();
        if ($request->hasFile('thumbnail')) {
            Storage::disk('public')->delete($producto->thumbnail);
            $data['thumbnail'] = $this->_saveImage($request->file('thumbnail'), $data['nombre']);
        }
        $producto->update($data);
        return redirect()->route('productos.index')->with('success', 'Producto actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        Storage::disk('public')->delete($producto->thumbnail);
        $producto->delete();
        return redirect()->route('productos.index')->with('success', 'Producto eliminado con éxito');
    }

    public function addToCart(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');
        $product = Producto::find($productId);

        if (!$product) {
            return redirect()->back()->with('error', 'Producto no encontrado.');
        }
        $cart = session()->get('cart', []);

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $quantity;
        } else {
            $cart[$productId] = [
                "name" => $product->nombre,
                "quantity" => $quantity,
                "subcategoria" => $product->subcategoria->nombre,
                "price" => $product->precio,
                "photo" => $product->thumbnail
            ];
        }

        session()->put('cart', $cart);

        return redirect()->route('store')->with('success', 'Producto añadido al carrito.');
    }
}
