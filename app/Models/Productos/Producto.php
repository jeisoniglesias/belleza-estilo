<?php

namespace App\Models\Productos;

use App\Models\Tipos\PublicTarget;
use App\Models\Tipos\SubCategorias;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'precio', 'stock', 'sub_categoria_id', 'public_target_id', 'thumbnail', 'urls_imagenes', 'descripcion'];

    public function subcategoria()
    {
        return $this->belongsTo(SubCategorias::class, 'sub_categoria_id');
    }

    public function publicTarget()
    {
        return $this->belongsTo(PublicTarget::class);
    }
}
