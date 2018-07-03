<?php
/**
 * Created by PhpStorm.
 * User: oem
 * Date: 01/07/18
 * Time: 21:20
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Residencias extends Model
{
    protected $fillable = [
        'RD_CODIGO',
        'RD_RUA',
        'RD_BAIRRO',
        'RD_NUMERO',
        'RD_MUNICIPIO',
        'RD_DTUCOLETA',
    ];


    public function coletas(){
        return $this->hasMany(Residencias::class);
    }

}