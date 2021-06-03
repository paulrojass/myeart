<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    use HasFactory;

    protected $fillable = [];

    /**
     * Método que obtiene el vendedor al que pertenece la obra
     *
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo Artwork
     */
    public function seller()
    {
        return $this->belongTo(Seller::class);
    }

    /**
     * Método que obtiene las imagenes de una obra
     *
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo Artwork
     */
    public function artworkImages()
    {
        return $this->hasMany(ArtworkImage::class);
    }

}
