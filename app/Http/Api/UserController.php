<?php
/**
 * Created by PhpStorm.
 * User: daviddell
 * Date: 2/24/19
 * Time: 3:36 PM
 */

namespace App\Http\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Cache;

class UserController extends Controller
{
    public function index()
    {
        $request = request();
        $type = $request->get('type');
        $clearCache = $request->get('clearCache');

        if($clearCache){
            Cache::flush();
        }

        if($type){

            $users = Cache::remember('users-'.$type, 10, function () use($type){
                return User::byType($type)->orderBy('name', 'asc')->get();
            });

            return $users;

        }
        return User::get();
    }
}