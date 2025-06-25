<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Marca
 *
 * @property $id
 * @property $nombre
 * @property $pais_origen
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @property Producto[] $productos
 * @property Producto[] $productos
 * @property Producto[] $productos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Marca extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'pais_origen', 'descripcion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productos()
    {
        return $this->hasMany(\App\Models\Producto::class, 'id', 'marca_id');
    }
    
    // /**
    //  * @return \Illuminate\Database\Eloquent\Relations\HasMany
    //  */
    // public function productos()
    // {
    //     return $this->hasMany(\App\Models\Producto::class, 'id', 'id_marca');
    // }
    
    // /**
    //  * @return \Illuminate\Database\Eloquent\Relations\HasMany
    //  */
    // public function productos()
    // {
    //     return $this->hasMany(\App\Models\Producto::class, 'id', 'id_marca');
    // }
    
}
