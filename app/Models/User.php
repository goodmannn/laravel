<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/4
 * Time: 15:27
 */
class User extends Model
{
    protected $connection = 'mysql';
    protected $table = 'table1';
}