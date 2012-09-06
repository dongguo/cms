<?php 
class NavModel extends Model{
	protected $_validate = array(
		array('title','require','导航名称必填！'),
		array('title','','导航名称已经存在！',0,'unique',1),
		array('link','require','链接必填！'),
	);
}

?>