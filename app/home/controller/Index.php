<?php
declare (strict_types = 1);

namespace app\home\controller;

use app\BaseController;
use think\facade\Db;
use think\facade\View;

class Index extends BaseController
{
    public function index()
    {
		/*
		$res = Db::name('message')->select();
		print_r($res);
		*/
		echo 111;
		return View::fetch('index');
    }
}
