<?php

namespace App\Livewire\Tipos;

use App\Models\Tipos\Categoria;
use Livewire\Component;
use Livewire\Attributes\Validate;

class CategoriaFormEdit extends Component
{
    public $idOff = 'formCategoriaEdit';

    public $categoria;

    #[Validate('required', message: 'El nombre es requerido')]
    #[Validate('string', message: 'El nombre debe ser un texto')]
    #[Validate('min:4', message: 'El nombre  debe tener almenos :min caracteres')]
    #[Validate('unique:categorias,nombre,{$this->id},id', message: 'El nombre ya existe')]

    public $nombre;

    #[Validate('string', message: 'La descripción debe ser un texto')]
    #[Validate('max:255', message: 'La descripción no debe exceder los 255 caracteres')]
    public $descripcion;


    public function render()
    {
        return view('livewire.tipos.categoria-form-edit');
    }
    public function mount(Categoria $categoria)
    {
        $this->categoria = $categoria;
        $this->nombre = $categoria->nombre;
        $this->descripcion = $categoria->descripcion;
    }
    //logic for component actions
    public function saveCategoria()
    {

        try {
            //code...
            $this->validate();
        } catch (\Throwable $th) {
            $this->dispatch('errorOffcanvas', ['offcanvasId' => $this->idOff]);
            //dd($th->getMessage());
        }
        $validatedData = $this->validate();

        $this->categoria->update($validatedData);

        $message = 'Categoría ' . $this->nombre . ' actualizada exitosamente';

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
