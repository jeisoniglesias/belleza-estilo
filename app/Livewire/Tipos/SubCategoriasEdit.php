<?php

namespace App\Livewire\Tipos;

use App\Models\Tipos\Categoria;
use App\Models\Tipos\SubCategorias;
use Livewire\Component;
use Livewire\Attributes\Validate;

class SubCategoriasEdit extends Component
{
    public $idOff = 'formSubCategoriaEdit';

    public $subcategoria;

    #[Validate('required', message: 'El nombre es requerido')]
    #[Validate('string', message: 'El nombre debe ser un texto')]
    #[Validate('min:4', message: 'El nombre  debe tener almenos :min caracteres')]
    #[Validate('unique:sub_categorias,nombre,{$this->id},id', message: 'El nombre ya existe')]
    public $nombre;

    #[Validate('required', message: 'La categoría es requerida')]
    #[Validate('exists:categorias,id', message: 'La categoría no existe')]
    public $categoria_id;
    public function render()
    {
        return view('livewire.tipos.sub-categorias-edit', [
            'categorias' => Categoria::all()->pluck('nombre', 'id')
        ]);
    }
    public function mount(SubCategorias $subcategoria)
    {
        $this->subcategoria = $subcategoria;
        $this->nombre = $subcategoria->nombre;
        $this->categoria_id = $subcategoria->categoria_id;
    }
    public function update()
    {
    }
    public function resetFields()
    {
        $this->resetValidation();
        $this->nombre = '';
        $this->categoria_id = '';
    }
    
}
