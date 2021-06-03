<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar'
    ];

//You can also use below statement 

protected $guarded = ['*'];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Método que obtiene el comprador asociado al un usuario
     *      
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo User
     */
    public function buyer()
    {
        return $this->hasOne(Buyer::class);
    }

    /**
     * Método que obtiene el vendedor asociado al un usuario
     *      
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo User
     */
    public function seller()
    {
        return $this->hasOne(Seller::class);
    }

}
