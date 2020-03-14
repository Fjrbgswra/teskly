<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable = ['nama','email','tanggal_lahir','no_telp','gender'];
}
