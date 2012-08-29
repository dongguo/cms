<?php

class IndexAction extends CommonAction {
    public function index(){

    	$this->display();
    }
    public function setting(){
    	$this->display();
    }
    public function del(){
    	echo "index 下面的del";
    }
    public function update(){
    	echo "index 下面的update";
    }
}