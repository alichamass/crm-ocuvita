<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    protected $table = 'oferta';
    protected $primaryKey = 'id';
    protected $fillable = ['regla_porciento', 'tipo_oferta'];
    public $timestamps = false;
}
