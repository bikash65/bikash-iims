<?php
/**
 * Created by PhpStorm.
 * User: samina
 * Date: 12/7/16
 * Time: 4:34 PM
 */

namespace App\Http\Controllers\cms;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Order;
use Session;
use Redirect;
use Carbon\Carbon;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->product = new Product();
        $this->order = new Order();

    }

    public function about()
    {
        return view('cms.about');
    }

      public function home()
    {
    	$data['categories'] = Category::orderBy('created_at','DESC')->get();
        return view('cms.index',$data);
    }

    public function faqs()
    {
        return view('cms.faqs');
    }

     public function products()
    {
        return view('cms.products');
    }


    public function features()
    {
        return view('cms.features');
    }

    public function productCategory(Request $request)
    {
        $categoryId = $request->get('id');
        $data['products'] = $this->product->getProductByCategoryId($categoryId);
          return view('cms.product_category',$data);
    }

     public function order(Request $request)
    {
         $productId = $request->get('id');
        $data['product'] = $this->product->getProductById($productId);
        return view('cms.client_order',$data);
    }

    public function addToCart(Request $request)
    {
        $productId = $request->get('id');
        $date = Carbon::now();
        if (empty($request->get('user_id')) == true) {
            Session::flash('message', "You must log in first !");
            return Redirect::back();
        } else {
            $date = date('d-m-Y');
             if (date('D',strtotime($date)) != $request->get('day')) {
                  $inputData = $request->except('id');
                   $inputData['order'] = 1;
                 $inputData['product_id'] = $productId;
                  Session::flash('message', "You order has been added to cart");
            $this->order->addOrder($inputData); 
             return redirect()->back();  
        }
         
        }

    }

}