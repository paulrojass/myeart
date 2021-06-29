<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'transaction_id',
        'total'
    ];

    /**
     * Método que obtiene el usuario al que pertenece la orden
     *
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo Order
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Método que obtiene as compras de una orden
     *
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo Order
     */
    public function buys()
    {
        return $this->hasMany(Buy::class);
    }
}
