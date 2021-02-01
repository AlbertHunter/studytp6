<?php
declare (strict_types = 1);

namespace app\test\controller;

use app\BaseController;
use think\facade\Db;

class Index extends BaseController
{
    public function index()
    {
        return '您好！这是一个[test]示例应用';
    }
}
