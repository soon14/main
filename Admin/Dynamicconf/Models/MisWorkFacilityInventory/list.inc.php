<?php 
return array(
	'0' => array(
		'name' => 'id',
		'showname' => '序号',
		'shows' => '0',
		'widths' => '30',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'id',
		'sortnum' => '1',
		'issearch' => '0',
		'searchField' => '',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => '',
		'isallsearch' => '0',
		'searchsortnum' => '0',
		'status' => '1',
		'helpvalue' => '',
		'rules' => '0',
		'message' => '0',
	),
	'36' => array(
		'name' => 'orderno',
		'showname' => '设备编号',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'orderno',
		'sortnum' => '2',
		'issearch' => '1',
		'searchField' => 'mis_work_facility_manage.orderno',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '1',
		'searchsortnum' => '1',
		'status' => '1',
		'helpvalue' => '',
		'rules' => '0',
		'message' => '0',
		'func' => array(
			'0' => array(
				'0' => 'getFieldBy',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '#manageid#',
					'1' => 'id',
					'2' => 'orderno',
					'3' => 'mis_work_facility_manage',
				),
			),
		),
	),
	'1' => array(
		'name' => 'managename',
		'showname' => '设备名称',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'qty',
		'sortnum' => '3',
		'issearch' => '1',
		'searchField' => 'mis_work_facility_inventory.managename',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '1',
		'searchsortnum' => '1',
		'status' => '1',
		'helpvalue' => '',
		'rules' => '0',
		'message' => '0',
	),
	'2' => array(
		'name' => 'managetype',
		'showname' => '设备类型',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'equipmenttype',
		'sortnum' => '4',
		'issearch' => '0',
		'searchField' => 'mis_work_facility_inventory.managetype',
		'table' => 'mis_work_facility_type',
		'field' => 'id',
		'conditions' => '',
		'type' => 'db|name',
		'isallsearch' => '0',
		'searchsortnum' => '2',
		'status' => '1',
		'func' => array(
			'0' => array(
				'0' => 'getFieldBy',
				'1' => 'getFieldBy',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '#manageid#',
					'1' => 'id',
					'2' => 'equipmenttype',
					'3' => 'mis_work_facility_manage',
				),
				'1' => array(
					'0' => '###',
					'1' => 'id',
					'2' => 'name',
					'3' => 'mis_work_facility_type',
				),
			),
		),
		'helpvalue' => '',
		'rules' => '0',
		'message' => '0',
	),
	'38' => array(
		'name' => 'oldqty',
		'showname' => '原数量',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'oldqty',
		'sortnum' => '5',
		'issearch' => '1',
		'searchField' => 'mis_work_facility_inventory.oldqty',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '1',
		'searchsortnum' => '4',
		'status' => '1',
		'func' => array(
			'0' => array(
				'0' => 'getDigits',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
				),
			),
		),
		'helpvalue' => '',
		'rules' => '0',
		'message' => '0',
	),
	'4' => array(
		'name' => 'qty',
		'showname' => '数量',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'qty',
		'sortnum' => '6',
		'issearch' => '1',
		'searchField' => 'mis_work_facility_inventory.qty',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '1',
		'searchsortnum' => '4',
		'status' => '1',
		'func' => array(
			'0' => array(
				'0' => 'getDigits',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
				),
			),
		),
		'helpvalue' => '',
		'rules' => '0',
		'message' => '0',
	),
	'5' => array(
		'name' => 'unit',
		'showname' => '单位',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => 'MisProductUnit',
		'sortname' => 'unit',
		'sortnum' => '7',
		'issearch' => '0',
		'searchField' => 'mis_work_facility_inventory.unit',
		'table' => 'mis_product_unit',
		'field' => 'id',
		'conditions' => '',
		'type' => 'db',
		'isallsearch' => '0',
		'searchsortnum' => '5',
		'status' => '1',
		'func' => array(
			'0' => array(
				'0' => 'getFieldBy',
				'1' => 'getFieldBy',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '#manageid#',
					'1' => 'id',
					'2' => 'unit',
					'3' => 'mis_work_facility_manage',
				),
				'1' => array(
					'0' => '###',
					'1' => 'id',
					'2' => 'name',
					'3' => 'mis_product_unit',
				),
			),
		),
		'helpvalue' => '',
		'rules' => '0',
		'message' => '0',
	),
	'6' => array(
		'name' => 'createid',
		'showname' => '操作人',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => 'MisSystemDepartment',
		'sortname' => 'departmentid',
		'sortnum' => '8',
		'issearch' => '1',
		'searchField' => 'mis_work_facility_inventory.createid',
		'table' => 'user',
		'field' => 'id',
		'conditions' => '',
		'type' => 'db',
		'isallsearch' => '0',
		'searchsortnum' => '6',
		'status' => '1',
		'func' => array(
			'0' => array(
				'0' => 'getFieldBy',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
					'1' => 'id',
					'2' => 'name',
					'3' => 'user',
				),
			),
		),
		'helpvalue' => '',
		'rules' => '0',
		'message' => '0',
	),
	'8' => array(
		'name' => 'deptid',
		'showname' => '操作部门',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => 'MisSystemDepartment',
		'sortname' => 'departmentid',
		'sortnum' => '9',
		'issearch' => '1',
		'searchField' => 'mis_work_facility_inventory.createid',
		'table' => 'mis_system_department',
		'field' => 'id',
		'conditions' => '',
		'type' => 'db',
		'isallsearch' => '0',
		'searchsortnum' => '6',
		'status' => '1',
		'helpvalue' => '',
		'rules' => '0',
		'message' => '0',
		'func' => array(
			'0' => array(
				'0' => 'getFieldBy',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
					'1' => 'id',
					'2' => 'name',
					'3' => 'mis_system_department',
				),
			),
		),
	),
	'3' => array(
		'name' => 'operation',
		'showname' => '操作类型',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'version',
		'sortnum' => '10',
		'issearch' => '1',
		'searchField' => 'mis_work_facility_inventory.operation',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'select|operation',
		'isallsearch' => '0',
		'searchsortnum' => '3',
		'status' => '1',
		'helpvalue' => '',
		'rules' => '0',
		'message' => '0',
		'func' => array(
			'0' => array(
				'0' => 'excelTplselected',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
					'1' => '1:添加,2:修改,3:申请,4:异动,5:归还',
				),
			),
		),
	),
	'7' => array(
		'name' => 'createtime',
		'showname' => '操作时间',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'amount',
		'sortnum' => '11',
		'issearch' => '1',
		'searchField' => 'mis_work_facility_inventory.createtime',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'time',
		'isallsearch' => '0',
		'searchsortnum' => '7',
		'status' => '1',
		'func' => array(
			'0' => array(
				'0' => 'transTime',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
				),
			),
		),
		'helpvalue' => '',
		'rules' => '0',
		'message' => '0',
	),
	'37' => array(
		'name' => 'manageid',
		'showname' => '设备id',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'manageid',
		'sortnum' => '12',
		'issearch' => '1',
		'searchField' => 'mis_work_facility_manage.manageid',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '1',
		'searchsortnum' => '1',
		'status' => '1',
		'helpvalue' => '',
		'rules' => '0',
		'message' => '0',
	),
);

?>