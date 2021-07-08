<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'artwork_id',
        'finished',
        'comment',
        'rating',
    ];

    /**
     * Método que obtiene la orden a la que pertenece la compra
     *
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo Buy
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
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
