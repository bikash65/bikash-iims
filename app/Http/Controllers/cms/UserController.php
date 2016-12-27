<?php
/**
 * Created by PhpStorm.
 * User: samina
 * Date: 12/7/16
 * Time: 4:34 PM
 */

namespace App\Http\Controllers\cms;


use App\Http\Controllers\Controller;
use App\Client;

class UserController extends Controller
{
    public function __construct()
    {

    }

    public function user()
    {
        return view('cms.user');
    }

    public function client()
    {		
    	$data["list"] = Client::all();
        return view('cms.client',$data);
    }

}