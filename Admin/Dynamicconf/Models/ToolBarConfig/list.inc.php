<?php 
return array(
	'0' => array(
		'name' => 'name',
		'showname' => '按钮名称',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'name',
		'sortnum' => '1',
		'issearch' => '',
		'searchField' => '',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => '',
		'isallsearch' => '',
		'searchsortnum' => '',
	),
	'1' => array(
		'name' => 'ischeck',
		'showname' => '是否检查',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'code',
		'sortnum' => '2',
		'issearch' => '1',
		'searchField' => '',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '1',
		'searchsortnum' => '2',
		'func' => array(
				'0' => array(
						'0' => 'excelTplselected',
				),
		),
		'funcdata' => array(
				'0' => array(
						'0' => array(
								'0' => '###',
								'1' => '0:否,1:是',
						),
				),
		),
	),
	'2' => array(
		'name' => 'permisname',
		'showname' => 'session检查',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'name',
		'sortnum' => '3',
		'issearch' => '1',
		'searchField' => 'mis_hr_typeinfo.name',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '1',
		'searchsortnum' => '3',
	),
	'3' => array(
		'name' => 'extendurl',
		'showname' => '扩展URL',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'remark',
		'sortnum' => '4',
		'issearch' => '',
		'searchField' => 'mis_hr_typeinfo.remark',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '',
		'searchsortnum' => '4',
	),
	'5' => array(
		'name' => 'href',
		'showname' => '超链接URL',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'startdate',
		'sortnum' => '6',
		'issearch' => '1',
		'searchField' => 'mis_hr_typeinfo.updatetime',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'time',
		'isallsearch' => '',
		'searchsortnum' => '6',
	),
	'7' => array(
		'name' => 'shows',
		'showname' => '是否显示',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'remark',
		'sortnum' => '8',
		'issearch' => '1',
		'searchField' => '',
		'table' => 'user',
		'field' => 'id',
		'conditions' => '',
		'type' => 'db',
		'isallsearch' => '1',
		'searchsortnum' => '7',
		'func' => array(
				'0' => array(
						'0' => 'excelTplselected',
				),
		),
		'funcdata' => array(
				'0' => array(
						'0' => array(
								'0' => '###',
								'1' => '0:否,1:是',
						),
				),
		),
	),
	'8' => array(
		'name' => 'sortnum',
		'showname' => '按钮排序',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'remark',
		'sortnum' => '9',
		'issearch' => '1',
		'searchField' => '',
		'table' => 'user',
		'field' => 'id',
		'conditions' => '',
		'type' => 'db',
		'isallsearch' => '1',
		'searchsortnum' => '8',
	),
	'9' => array(
		'name' => 'rules',
		'showname' => '规则',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'status',
		'sortnum' => '10',
		'issearch' => '',
		'searchField' => '',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => '',
		'isallsearch' => '',
		'searchsortnum' => '',
	),
		
	/* '9' => array(
		'name' => 'action',
		'showname' => '操作',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'status',
		'sortnum' => '10',
		'func' => array(
			'0' => array(
				'0' => 'showRelStatus',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '#status#',
					'1' => '#id#',
					'2' => 'unitBox',
				),
			),
		),
		'issearch' => '',
		'searchField' => '',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => '',
		'isallsearch' => '',
		'searchsortnum' => '',
	), */
);

?>