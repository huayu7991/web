<?php
namespace app\index\controller;
use think\Db;
class Index
{
    public function index()
    {
        return view('index',['name'=>'index']);
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }

    public function  testsql(){
     
     $res=Db::table('v9_users')->select();
     
     sd($res);
     
    }
}
