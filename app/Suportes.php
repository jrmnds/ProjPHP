<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suportes extends Model
{
    protected $fillable = ['nome', 'descricao'];
    protected $dates = ['created_at', 'updated_at'];
}
