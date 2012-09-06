<?php
/*
 * 导航管理类
 */ 
class NavAction extends CommonAction{
	public function index(){
		$nav = D("Nav");
		$navinfo = $nav->field('id,title,link,sort')->select();
		$this->assign('navinfo', $navinfo);	
		$this->display();
	}
	//添加导航
	public function add(){
		$this->assign('dsp','add');
		$this->display('index');
	}
	public function adds(){
		$nav = D("Nav");
		if(!$nav->create()){
			$this->error($nav->getError());
		}else {
			if($nav->add()){
				$this->assign('jumpUrl','__URL__');
				$this->success('添加成功！');
			}else {
				$this->error('添加失败！');
			}
		}
	}
	//编辑导航
	public function edit(){
		$nav = D("Nav");
		$id = $_GET['id'];
		$info = $nav->where('id='.$id.'')->field('title,link')->select();
		$this->assign('info',$info);
		$this->assign('dsp','edit');
		$this->display('index');
	}
	public function edits(){
		$nav = D("Nav");
		$id = $_GET['id'];
		$data = $_POST;
		print_r($data);
		/*if($nav->where('id='.$id.'')->save($data)){
			$this->success('更新成功！');
		}else {
			$this->error('更新失败！');
		}*/
		
	}
}

?>

