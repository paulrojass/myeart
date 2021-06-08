<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'names',
        'surnames',
        'address',
        'city',
        'country',
        'region',
        'postal_code',
        'card_number',
        'security_code',
        'expiration_date'
    ];

    /**
     * Método que obtiene la compra asociados al comprador
     *
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo Family
     */
/*    public function compras()
    {
        return $this->hasMany(Student::class);
    }*/

    /**
     * Método que obtiene el usuario al que pertenece un comprador
     *
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo Buyer
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Método que obtiene las compras de un comprador
     *
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo Buyer
     */
    public function buys()
    {
        return $this->hasMany(Buy::class);
    }
}
