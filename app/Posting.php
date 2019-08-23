<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posting extends Model
{
    protected $table = 'post';
    protected $fillable = ['title','content'];
}
