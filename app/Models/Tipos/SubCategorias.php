<?php

namespace App\Models\Tipos;

use App\Models\Productos\Producto;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tipos\Categoria;

class SubCategorias extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'categoria_id'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
    public function productos()
    {
        return $this->hasMany(Producto::class, 'sub_categoria_id');
    }
}
