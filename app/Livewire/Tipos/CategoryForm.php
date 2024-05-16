<?php

namespace App\Livewire\Tipos;

use App\Models\Tipos\Categoria;
use Livewire\Component;
use Livewire\Attributes\Validate;

class CategoryForm extends Component
{
    #[Validate('required', message: 'El nombre es requerido')]
    #[Validate('string', message: 'El nombre debe ser un texto')]
    #[Validate('min:4', message: 'El nombre  debe tener almenos :min caracteres')]
    public $nombre;

    #[Validate('string', message: 'La descripción debe ser un texto')]
    #[Validate('max:255', message: 'La descripción no debe exceder los 255 caracteres')]
    public $descripcion;


    public function render()
    {
        return view('livewire.tipos.category-form');
    }

    //logic for component actions
    public function saveProduct()
    {

        $validatedData = $this->validate();

        Categoria::create($validatedData);
        $message = 'Categoría ' . $this->nombre . ' creada exitosamente';

        $this->resetFields();
        //event
        $this->dispatch('closeOffcanvas', ['offcanvasId' => 'offcanvasRight']);
        session()->flash('success', $message);
        return redirect()->route('categorias.index');
        //Livewire::emit('closeOffcanvas', ['offcanvasId' => 'offcanvasRight']);
    }


    public function resetFields()
    {
        $this->resetValidation();
        $this->nombre = '';
        $this->descripcion = '';
    }
}
