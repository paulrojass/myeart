<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    /**
     * Método que obtiene los atributos de una categoria
     *
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo Category
     */
    public function attributes()
    {
        return $this->hasMany(Attribute::class);
    }


}
