<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filme_favorito extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'filmes_favoritos';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['titulo', 'ano', 'diretor', 'id_pessoa'];

    
}
