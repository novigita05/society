<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    protected $table = 'members';
    protected $fillable = ['nik','no_kk','name','images','place_of_birth','date_of_birth','gender','religion','education','work','residence_status','home_number'];
}
