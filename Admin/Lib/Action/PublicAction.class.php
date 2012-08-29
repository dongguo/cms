<?php 
/*
 *
 * 
 */
class PublicAction extends Action {
	public function index(){
		$this->login();
		
	}
	public function login(){
		if(!isset($_SESSION[C('USER_AUTH_KEY')])) {
			$this->display();
		}else{
			$this->redirect('Index/index');
		}
	}
	 function checkLogin(){
		if(empty($_POST['username'])) {
			$this->error('帐号错误！');
		}elseif (empty($_POST['password'])){
			$this->error('密码必须！');
		}
        //生成认证条件
        $map            =   array();
		// 支持使用绑定帐号登录
		$map['username']	= $_POST['username'];
		import ( 'ORG.Util.RBAC' );
        $authInfo = RBAC::authenticate($map);
        //使用用户名、密码和状态的方式进行认证
        if(false === $authInfo) {
            $this->error('帐号不存在或已禁用！');
        }else {
            if($authInfo['password'] != md5($_POST['password'])) {
            	$this->error('密码错误！');
            }
            $_SESSION[C('USER_AUTH_KEY')]	=	$authInfo['id'];
            $_SESSION['loginUserName']		=	$authInfo['username'];
            $_SESSION['lastLoginTime']		=	$authInfo['last_login_time'];
            $_SESSION['login_count']	=	$authInfo['login_count'];
            if($authInfo['username']=='admin') {
            	$_SESSION['administrator']		=	true;
            }
            //保存登录信息
            $User	=	M('User');
            $ip		=	get_client_ip();
            $time	=	time();
            $data = array();
            $data['id']	=	$authInfo['id'];
            $data['last_login_time']	=	$time;
            $data['login_count']	=	array('exp','login_count+1');
            $data['last_login_ip']	=	$ip;
            $User->save($data);

			// 缓存访问权限
            RBAC::saveAccessList();
			$this->success('登录成功！');

		}

	}
	public function logout(){
		if(isset($_SESSION[C('USER_AUTH_KEY')])) {
			unset($_SESSION[C('USER_AUTH_KEY')]);
			unset($_SESSION);
			session_destroy();
			$this->assign("jumpUrl",__URL__.'/login/');
			$this->success('登出成功！');
		}else {
			$this->error('已经登出！');
		}		
	}
	public function verify(){
		import('ORG.Util.Image');
		Image::buildImageVerify();
	}
	// 后台首页 查看系统信息
	public function main() {
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
}

?>