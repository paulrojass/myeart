<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
    use HasFactory;

    protected $fillable = [
        'buyer_id',
        'artwork_id',
        'comment',
        'rating'
    ];

    /**
     * Método que obtiene el comprador al de la obra
     *
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo Buy
     */
    public function buyer()
    {
        return $this->belongsTo(Buyer::class);
    }

    /**
     * Método que obtiene la obra comprada
     *
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo Buy
     */
    public function artwork()
    {
        return $this->belongsTo(Artwork::class);
    }
}
