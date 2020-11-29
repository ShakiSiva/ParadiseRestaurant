<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dessert extends Model
{
    protected $table = 'desserts';
    protected $primaryKey = 'id';
    protected $fillable = [
    	'id', 'dessert_name', 'price', 'created_at', 'updated_at'
    ];
}
