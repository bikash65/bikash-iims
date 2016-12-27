<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
/**
 * Created by PhpStorm.
 * User: samina
 * Date: 12/7/16
 * Time: 2:18 PM
 */
class DashboardController extends Controller
{
    public function __construct()
    {
    }

    public function dashboard()
    {
        return view('cms.dashboard');
    }

}