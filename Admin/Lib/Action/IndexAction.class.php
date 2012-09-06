<?php

class IndexAction extends CommonAction {
    public function index(){
    	$info = array(
    			'操作系统'=>PHP_OS,
    			'运行环境'=>$_SERVER["SERVER_SOFTWARE"],
    			'PHP运行方式'=>php_sapi_name(),
    			'上传附件限制'=>ini_get('upload_max_filesize'),
    			'执行时间限制'=>ini_get('max_execution_time').'秒',
    			'服务器时间'=>date("Y年n月j日 H:i:s"),
    			'北京时间'=>gmdate("Y年n月j日 H:i:s",time()+8*3600),
    			'服务器域名/IP'=>$_SERVER['SERVER_NAME'].' [ '.gethostbyname($_SERVER['SERVER_NAME']).' ]',
    			'剩余空间'=>round((@disk_free_space(".")/(1024*1024)),2).'M',
    	);
    	$this->assign('info',$info);
    	$this->display();
    }
    public function setting(){
    	$website = M("Website")->find();
    	$this->assign('website', $website);
    	$this->display();
    }
    public function settings(){
    	$data = $_POST;
    	$website = M("Website")->where('id=1')->save($data);
    	$this->success("更新成功");
    }
    public function del(){
    	echo "index 下面的del";
    }
    public function update(){
    	echo "index 下面的update";
    }
}