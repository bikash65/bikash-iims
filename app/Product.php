<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
        protected $table = 'products';
	    
	    protected $fillable = [
	        'title',
	        'image',
	        'description',
	        'price',
	        'category_id',
	        'created_at',
	        'updated_at'
	    ];

	    public function add($data)
	    {
	    	Product::create($data);
	    }

	    public function getAllProduct()
	    {
	    	Product::get();
	    }

	    public function deleteProduct($id)
	    {
		return Product::where('id',$id)->delete();
	    }

	    public function getProductById($id)
	    {
	    	return Product::where('id',$id)->first();
	    }

	    public function edit($data,$categoryId)
	    {
	    	return Product::where('id',$categoryId)->update($data);
	    }

	    public function category()
	    {
	    	return $this->belongsTo('App\Category', 'category_id', 'id');
	    }

	    public function getProductByCategoryId($categoryId)
	    {
	    	return Product::where('category_id',$categoryId)->get();
	    }

	  
}
