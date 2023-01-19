<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 *
 * @property $id
 * @property $categoria_id
 * @property $nombre
 * @property $apellido
 * @property $pais
 * @property $email
 * @property $direccion
 * @property $celular
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usuario extends Model
{

    static $rules = [
		'categoria_id' => 'required',
		'nombre' => 'required|max:100',
		'apellido' => 'required|max:100',
		'pais' => 'required',
		'email' => 'required|max:150',
		'direccion' => 'required|max:180',
		'celular' => 'required|min:10',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['categoria_id','nombre','apellido','pais','email','direccion','celular'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'categoria_id');
    }


}
