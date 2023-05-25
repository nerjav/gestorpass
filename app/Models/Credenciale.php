<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Credenciale extends Model
{
    protected $fillable = [
        'usuario',
        'contraseña',
        'enlace',
        'fecha',
        'servidor_id',
        'tipodeconexion_id',
        'estados_id',
        //'cat_informaciones_id',
        'cat_informaciones_id',
        'grupo_id',

    ];


    protected $dates = [

    ];
    public $timestamps = false;

    protected $appends = ['resource_url'];
    protected $with = ['estado','servidor','grupo','cat_informaciones','tipodeconexion'];


    public function cat_informaciones()
    {
        return $this->belongsTo('App\Models\CatInformacione','id','credenciales_id');

    }



    public function Servidor()
    {
        return $this->belongsTo('App\Models\Servidor');

    }


    public function Grupo()
    {
        return $this->belongsTo('App\Models\Grupo');

    }


    public function Estado()
    {
        return $this->belongsTo('App\Models\Estado','estados_id','id');

    }


    public function tipodeconexion()
    {
        return $this->belongsTo('App\Models\Tipodeconexion','id');

    }


    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/credenciales/'.$this->getKey());
    }
}
