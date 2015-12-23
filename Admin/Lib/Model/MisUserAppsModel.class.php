<?php
//Version 1.0
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MisUserAppsModel
 *
 * @author Administrator
 */
class MisUserAppsModel extends CommonModel{
    //put your code here
    protected  $trueTableName = 'mis_user_apps';

    public $_auto	=array(
    		array('createid','getMemberId',self::MODEL_INSERT,'callback'),
    		array('updateid','getMemberId',self::MODEL_UPDATE,'callback'),
    		array('createtime','time',self::MODEL_INSERT,'function'),
    		array('updatetime','time',self::MODEL_UPDATE,'function'),
    	   array("companyid","getCompanyID",self::MODEL_INSERT,"callback"),
			array("departmentid","getDeptID",self::MODEL_INSERT,"callback"),
			array('sysdutyid','getDutyID',self::MODEL_INSERT,'callback'),

    );
    
    public $_validate	=	array(
		array('uid,status','','此用户配置已经存在！',self::MUST_VALIDATE,'unique',self::MODEL_BOTH),
	);
}
?>