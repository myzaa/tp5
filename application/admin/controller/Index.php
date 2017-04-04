<?php
namespace app\admin\controller;
use think\Controller;
use think\Config;
class Index extends Controller
{
    public function index()
    {
    	$this->redirect('add');
    	echo'后台首页';
    	//return $this->fetch();

    }
    public function add()
    {
    	echo '后台添加';
    }
	public function edit()
	{
		echo '修改';
	}
}
?>
