<?php
/**
 * Created by PhpStorm.
 * User: samina
 * Date: 12/7/16
 * Time: 4:52 PM
 */

namespace App\Http\Controllers\cms;


use App\Http\Controllers\Controller;
use App\Order;

class OrderController extends Controller
{
    public function __construct()
    {
 		$this->order = new Order();
    }

    public function getOrders()
    {
    	$data['orders'] = Order::orderBy('created_at','DESC')->get();
        return view('cms.order-list',$data);
    }

}