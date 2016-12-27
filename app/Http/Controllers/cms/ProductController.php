<?php
/**
 * Created by PhpStorm.
 * User: samina
 * Date: 12/7/16
 * Time: 4:49 PM
 */

namespace App\Http\Controllers\cms;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Product;
use Validator;
use Image;

class ProductController extends Controller
{

    public function __construct()
    {
    	$this->product = new Product();
    }

    public function product()
    {
    	$data['categories'] = Category::orderBy('created_at','DESC')->get();
    	$data['products'] = Product::orderBy('created_at','DESC')->get();
        return view('cms.product-list',$data);
    }

    public function add(Request $request)
    {
    	   $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'price' =>'required'
        ]);

        if ($validator->fails()) {
            return redirect('/product-list')
                        ->withErrors($validator)
                        ->withInput();
        }
         $file = $request->file('image');
        $destinationPath =public_path().'/uploads/product';
        $filename  = time() . '.' . $file->getClientOriginalExtension();
        $path = public_path('uploads/product/thumbnail');
        $thumb_img = Image::make($file->getRealPath())->resize(360, 250);
        $thumb_img->save($path.'/'.$filename,80);
        $file->move($destinationPath, $filename);
        $inputData = $request->except('image') ;
        $inputData['image'] = $filename;
        $this->product->add($inputData);
        return redirect('/product-list');

    }


    public function delete(Request $request)
    {
       $productId =$request->get('id');
       $this->product->deleteProduct($productId);
       return redirect('/product-list');
    }

    public function edit(Request $request)
    {
        $productId =$request->get('id');
        $data['product'] = $this->product->getProductById($productId);
        $data['categories'] = Category::orderBy('created_at','DESC')->get();
        return view('cms.edit_product',$data);
    }
}