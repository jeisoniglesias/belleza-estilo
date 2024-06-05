<?php

namespace App\Models\Tipos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tipos\SubCategorias;

class Categoria extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'descripcion'];
    public function subcategorias()
    {
        return $this->hasMany(SubCategorias::class);
    }
}
