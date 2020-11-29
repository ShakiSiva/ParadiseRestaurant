<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SideDish extends Model
{
    protected $table = 'side_dishes';
    protected $primaryKey = 'id';
    protected $fillable = [
    	'id', 'side_dish_name', 'price', 'created_at', 'updated_at'
    ];
}
