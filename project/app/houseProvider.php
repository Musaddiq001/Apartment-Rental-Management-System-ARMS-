<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class houseProvider extends Model
{
    protected $table = "houseowners";
    public $timestamps = false;
	protected $primaryKey = "userId";
}
