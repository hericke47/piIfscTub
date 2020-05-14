<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class FastEvent extends Model
{
    use SoftDeletes;
    protected $fillable = ['title', 'start', 'end', 'color'];
}
