<?php 
class TypeinfoModel extends CommonModel{
	protected  $trueTableName = 'mis_hr_typeinfo';
	public $_auto		=	array(
		array('createid','getMemberId',self::MODEL_INSERT,'callback'),
		array('updateid','getMemberId',self::MODEL_UPDATE,'callback'),
		array('createtime','time',self::MODEL_INSERT,'function'),
		array('updatetime','time',self::MODEL_UPDATE,'function'),
	    array("companyid","getCompanyID",self::MODEL_INSERT,"callback"),
			array("departmentid","getDeptID",self::MODEL_INSERT,"callback"),
			array('sysdutyid','getDutyID',self::MODEL_INSERT,'callback'),

	);
	
}

?>
