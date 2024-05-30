<?php

namespace App\Models\Tipos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategorias extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'categoria_id'];
}
