<?php
/**
 * Created by PhpStorm.
 * User: samina
 * Date: 12/7/16
 * Time: 5:45 PM
 */

namespace App\Http\Controllers\cms;


use App\Http\Controllers\Controller;

class TestimonalController extends Controller
{
    public function __construct()
    {

    }

    public function getTestimonalDetail()
    {
        return view('cms.testimonals');
    }

}