<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    use HasFactory;

    protected $fillable = [
        'seller_id',
        'category_id',
        'name',
        'description',
        'price',
        'offer',
        'weight',
        'width',
        'height'
    ];

    /**
     * Método que obtiene el vendedor al que pertenece la obra
     *
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo Artwork
     */
    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }

    /**
     * Método que obtiene la categoria a la que pertenece la obra
     *
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo Artwork
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
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

    /**
     * Método que obtiene la compra de una obra
     *
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo Artwork
     */
    public function buy()
    {
        return $this->hasOne(Buy::class);
    }

    /**
     * Método que obtiene los me gusta de una obra
     *
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo Artwork
     */
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    /**
     * Método que obtiene los comentarios de una obra
     *
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo Artwork
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Método que obtiene los elementos de un obra
     *
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo Artwork
     */
    public function elements()
    {
        return $this->belongsToMany(Element::class, 'artwork_element')
                    ->withPivot('artwork_id');
    }
}
