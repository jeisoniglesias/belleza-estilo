<?php

namespace App\Models\Tipos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicTarget extends Model
{
    use HasFactory;
    protected $table = 'public_target';
    protected $fillable = ['name'];
}
