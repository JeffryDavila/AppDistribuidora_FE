<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class articuloBD extends Model
{
    use HasFactory;

    protected $table='tbl_articulovariante';
    protected $primaryKey = 'idarticulov';

    protected $fillable = ['talla','color','cantidad','precio','idarticulos'];

    public $timestamps = false;
}
