<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
        protected $table = 'order';
	    
	    protected $fillable = [
	        'qty',
	        'product_id',
	        'order',
	        'type',
	        'user_id',
	         'day',
	          'time',
	        'created_at',
	        'updated_at'
	    ];

	    public function addOrder($data)
	    {
	    	Order::create($data);
	    }

	    public function getOrders()
	    {
	    	Order::all();
	    }
	    
	    public function user()
	    {
	    	return $this->belongsTo('App\Client','user_id','id');
	    }

	  
}
