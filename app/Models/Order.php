<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $table = 'orders';
    public $timestamps = true;
    protected $fillable = array('address', 'net','cost', 'delivery_cost', 'total', 'commission', 'payment_method', 'special_note', 'status', 'restaurant_id', 'client_id');

    public function clients()
    {
        return $this->belongsTo('App\Models\Client');
    }
    public function products()
    {
        return $this->belongsToMany('App\Models\Product')->withPivot('price','quantity','note');
    }
    public function restaurant()
    {
        return $this->belongsTo('App\Models\Restaurant');
    }

}
