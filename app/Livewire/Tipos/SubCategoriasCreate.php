<?php

namespace App\Livewire\Tipos;

use App\Models\Tipos\Categoria;
use App\Models\Tipos\SubCategorias;
use Livewire\Component;
use Livewire\Attributes\Validate;

class SubCategoriasCreate extends Component
{
    public $idOff = 'formSubCategoria';

    #[Validate('required', message: 'El nombre es requerido')]
    #[Validate('string', message: 'El nombre debe ser un texto')]
    #[Validate('min:4', message: 'El nombre  debe tener almenos :min caracteres')]
    #[Validate('unique:sub_categorias,nombre', message: 'El nombre ya existe')]
    public $nombre;
    #validaciones para categoria_id, debe existir en la tabla categorias, requerido
    #[Validate('required', message: 'La categoría es requerida')]
    #[Validate('exists:categorias,id', message: 'La categoría no existe')]
    public $categoria_id;
    public function render()
    {
        return view('livewire.tipos.sub-categorias-create', [
            'categorias' => Categoria::all()->pluck('nombre', 'id')
        ]);
    }
    public function save()
    {

        try {
            $this->validate();
        } catch (\Throwable $th) {
            $this->dispatch('errorOffcanvas', ['offcanvasId' => $this->idOff]);
        }
        $validatedData = $this->validate();
        SubCategorias::create($validatedData);
        $message = 'SubCategoría ' . $this->nombre . ' creada exitosamente';
        $this->resetFields();
        $this->dispatch('closeOffcanvas', ['offcanvasId' => 'offcanvasRight']);
        session()->flash('success', $message);
        return redirect()->route('subcategorias.index');
    }
    public function resetFields()
    {
        $this->resetValidation();
        $this->nombre = '';
        $this->categoria_id = '';
    }
}
