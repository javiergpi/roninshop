<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    public $table = "orders";

    protected $fillable = [
        'status'
     ];
    
    public function items()
    {
        return $this->belongsToMany(Product::class, 'order_items','order_id','product_id')->withPivot('quantity','price');
    }

}
