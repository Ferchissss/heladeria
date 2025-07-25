<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    /** @use HasFactory<\Database\Factories\CategoriaFactory> */
    use HasFactory;
    protected $primaryKey = 'categoria_id';
    protected $table = 'categorias';

    protected $fillable = [
        'nombre',
        'descripcion',
        'imagen_url',
        'orden_display',
        'activa',
    ];

    // Relación con Productos
    public function productos()
    {
        return $this->hasMany(Producto::class, 'categoria_id');
    }
}
