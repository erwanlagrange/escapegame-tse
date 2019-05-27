<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Indices extends Model
{
    protected $table = 'indices';

    public $fillable = ['id', 'obj_text', 'rang_x', 'col_yz', 'xyz'];

    public $timestamps = false;


}
