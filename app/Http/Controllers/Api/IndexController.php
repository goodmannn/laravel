<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Jobs\SendReminderEmail;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redis;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/4
 * Time: 14:22
 */
class IndexController extends Controller
{
    public function test(Request $request)
    {
        /*if (!$request->input('id')) {
            return array('die');
        }*/
        $User = User::where('id', '=', 1)->first();
        $this->dispatch(new SendReminderEmail($User));
        return $User;
//        $redis = new \Redis();


    }
}