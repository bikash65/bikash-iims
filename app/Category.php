<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
        protected $table = 'category';
	    
	    protected $fillable = [
	        'title',
	        'description',
	        'created_at',
	        'updated_at',
	        'image'
	    ];

	    public function add($data)
	    {
	    	Category::create($data);
	    }

	    public function getAllCategory()
	    {
	    	Category::orderBy('created_at','DESC')->get();
	    }

	    public function deleteCategory($id)
	    {
		return Category::where('id',$id)->delete();
	    }

	    public function getCategoryById($id)
	    {
	    	return Category::where('id',$id)->first();
	    }

	    public function edit($data,$categoryId)
	    {
	    	return Category::where('id',$categoryId)->update($data);
	    }
}
