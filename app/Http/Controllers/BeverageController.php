<?php
/**
 * Created by PhpStorm.
 * User: daviddell
 * Date: 5/1/19
 * Time: 5:59 PM
 */

namespace App\Http\Controllers;


use App\Beverage;

class BeverageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $beverages = Beverage::get();
        return view('beverages.index', compact('beverages'));

    }
}