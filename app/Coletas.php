<?php
/**
 * Created by PhpStorm.
 * User: oem
 * Date: 01/07/18
 * Time: 22:25
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Coletas extends Model
{

    protected $fillable = [
        'CL_CODIGO',
        'CL_DATA',
        'CL_RESIDENCIA',
        'CL_CONSUMO',
        'CL_MES',
    ];

    public function residencias(){ //many-to-one
        return $this->belongsTo(Residencias::class);
    }


}