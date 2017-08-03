<?php
/**
 * Created by PhpStorm.
 * User: nifengpoyun
 * Date: 2017/4/17
 * Time: 上午10:53
 *
 */
namespace App\Http\Controllers;
use Illuminate\Contracts\View\View;

public function index()
{
    return View::make('welcome.index');
}
?>