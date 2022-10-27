<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;
    protected $table = 'campaigns';
    protected $fillable = ['id','titulo','fechaFin','cliente_id','observacion','tipoPublico',
                           'tipoObjetivo','tipoAudiencia','interesPublico','novedad',
                           'actualidad','autoridadCliente','mediaticoCliente',
                           'autoridadVoceros','mediaticoVoceros'  
                          ];
}
