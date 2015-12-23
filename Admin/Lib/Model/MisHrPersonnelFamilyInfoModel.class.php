<?php
/**
 * @Title: file_name 
 * @Package package_name 
 * @Description: todo(家庭成员模型) 
 * @author liminggang 
 * @company 重庆特米洛科技有限公司
 * @copyright 本文件归属于重庆特米洛科技有限公司
 * @date 2013-3-27 上午11:46:50 
 * @version V1.0
 */
class MisHrPersonnelFamilyInfoModel extends CommonModel {
	/*
	 * 表名
	*/
	protected  $trueTableName = 'mis_hr_personnel_family_info';

	public $_auto	=array(
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
