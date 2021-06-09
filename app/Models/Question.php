<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'artwork_id',
        'buyer_id',
        'content',
        'answer'
    ];

    /**
     * Método que obtiene  la pregunta a la que pertenece la respuesta
     *
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo Answer
     */
    public function artwork()
    {
        return $this->belongsTo(Artwork::class);
    }

    /**
     * Método que obtiene el comprador que formula la pregunta
     *
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo Answer
     */
    public function buyer()
    {
        return $this->belongsTo(Buyer::class);
    }
}
