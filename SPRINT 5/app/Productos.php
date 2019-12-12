<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fitness extends Model
{
    public $table = "fitness";
    // public $primaryKey = "id";
    // public $timestamps = false;
    public $guarded = [];
 
}

class Yoga extends Model
{
    public $table = "yoga";
    // public $primaryKey = "id";
    // public $timestamps = false;
    public $guarded = [];
 
}

class Otros extends Model
{
    public $table = "otros";
    // public $primaryKey = "id";
    // public $timestamps = false;
    public $guarded = [];
 
}
