<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/4
 * Time: 14:22
 */
class IndexController
{
    public function test(Request $request)
    {
        $User = new User();

        var_dump($User->getConnection());
    }
}