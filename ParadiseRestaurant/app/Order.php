<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'id';
    protected $fillable = [
    	'id', 'main_dishes', 'side_dishes','desserts', 'amount', 'created_at', 'updated_at'
    ];
}
