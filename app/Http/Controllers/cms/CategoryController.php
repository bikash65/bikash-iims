<?php
/**
 * Created by PhpStorm.
 * User: samina
 * Date: 12/7/16
 * Time: 5:40 PM
 */

namespace App\Http\Controllers\cms;


use App\Http\Controllers\Controller;
use Validator;
use Illuminate\Http\Request;
use App\Category;
use App\Product;
use Image;

class CategoryController extends Controller
{
    public function __construct()
    {
    	$this->category = new Category();
        $this->product = new Product();
    }

    public function getCategoryList()
    {
    	$data['categories'] = Category::orderBy('created_at','DESC')->get();
        return view('cms.category-list',$data);
    }

    public function add(Request $request)
    {
    	   $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/category')
                        ->withErrors($validator)
                        ->withInput();
        }
        $file = $request->file('image');
        $destinationPath =public_path().'/uploads/category';
        $filename  = time() . '.' . $file->getClientOriginalExtension();
        $path = public_path('uploads/category/thumbnail');
        $thumb_img = Image::make($file->getRealPath())->resize(360, 250);
        $thumb_img->save($path.'/'.$filename,80);
        $file->move($destinationPath, $filename);
        $inputData = $request->except('image') ;
        $inputData['image'] = $filename;
        $this->category->add($inputData);
        return redirect('/category');

    }

    public function delete(Request $request)
    {
       $categoryId =$request->get('id');
       $this->category->deleteCategory($categoryId);
       return redirect('/category');
    }

    public function edit(Request $request)
    {
        $categoryId =$request->get('id');
        $data['category'] = $this->category->getCategoryById($categoryId);
        return view('cms.edit_category',$data);
    }

    public function editCategory(Request $request)
    {
         $categoryId =$request->get('id');
        $categoryData = $this->category->getCategoryById($categoryId);
        if (!empty($categoryData->image) && file_exists(public_path()."/uploads/category/" . $categoryData->image) && file_exists(public_path()."/uploads/category/thumbnail" . $categoryData->image)) {
            File::delete(public_path()."/uploads/category/" . $categoryData->image);
        }
         $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/category')
                        ->withErrors($validator)
                        ->withInput();
        }

        $inputData = $request->except('_token','id');

         if( $request->hasFile('image') ){
           $file = $request->file('image');
            $destinationPath =public_path().'/uploads/category';
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $path = public_path('uploads/category/thumbnail');
            $thumb_img = Image::make($file->getRealPath())->resize(360, 250);
            $thumb_img->save($path.'/'.$filename,80);
            $file->move($destinationPath, $filename);
            $inputData = $request->except('_token','id');
            $inputData['image'] = $filename;
         }   
        

        $this->category->edit($inputData,$categoryId);
        return redirect('/category');
    }



 public function editProduct(Request $request)
    {
         $productId =$request->get('id');
        $productData = $this->product->find($productId);
        if (!empty($productData->image) && file_exists(public_path()."/uploads/product/" . $productData->image) && file_exists(public_path()."/uploads/product/thumbnail" . $productData->image)) {
            File::delete(public_path()."/uploads/product/" . $productData->image);
        }
         $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/product-list')
                        ->withErrors($validator)
                        ->withInput();
        }

        $inputData = $request->except('_token','id');

         if( $request->hasFile('image') ){
            
           $file = $request->file('image');
            $destinationPath =public_path().'/uploads/product';
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $path = public_path('uploads/product/thumbnail');
            $thumb_img = Image::make($file->getRealPath())->resize(360, 250);
            $thumb_img->save($path.'/'.$filename,80);
            $file->move($destinationPath, $filename);
            $inputData = $request->except('_token','id');
            $inputData['image'] = $filename;
         }   
        

        $this->product->edit($inputData,$productId);
        return redirect('/product-list');
    }

}