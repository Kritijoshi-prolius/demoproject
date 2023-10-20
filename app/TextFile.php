<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TextFile extends Model
{
    protected $table ="employees";
    protected $fillable = ['name','email','gender','address','dob','state','country','password'];
    

}
