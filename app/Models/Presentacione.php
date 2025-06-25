<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Presentacione
 *
 * @property $id
 * @property $nombre
 * @property $unidad_medida
 * @property $cantidad
 * @property $created_at
 * @property $updated_at
 *
 * @property Producto[] $productos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Presentacione extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'unidad_medida', 'cantidad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productos()
    {
        return $this->hasMany(\App\Models\Producto::class, 'id', 'presentacion_id');
    }
    
    // /**
    //  * @return \Illuminate\Database\Eloquent\Relations\HasMany
    //  */
    // public function productos()
    // {
    //     return $this->hasMany(\App\Models\Producto::class, 'id', 'id_presentacion');
    // }
    
    // /**
    //  * @return \Illuminate\Database\Eloquent\Relations\HasMany
    //  */
    // public function productos()
    // {
    //     return $this->hasMany(\App\Models\Producto::class, 'id', 'id_presentacion');
    // }
    
}
