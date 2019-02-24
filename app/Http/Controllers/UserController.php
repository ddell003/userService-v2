<?php
/**
 * Created by PhpStorm.
 * User: daviddell
 * Date: 2/24/19
 * Time: 3:39 PM
 */

namespace App\Http\Controllers;

use App\UserType;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $types = UserType::withCount('users')->get();
        return view('users.index', compact('types'));

    }
}