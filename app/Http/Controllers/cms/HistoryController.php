<?php
/**
 * Created by PhpStorm.
 * User: samina
 * Date: 12/7/16
 * Time: 5:40 PM
 */

namespace App\Http\Controllers\cms;


use App\Http\Controllers\Controller;

class HistoryController extends Controller
{
    public function __construct()
    {
    }

    public function getHistory()
    {
        return view('cms.history-detail');
    }

}