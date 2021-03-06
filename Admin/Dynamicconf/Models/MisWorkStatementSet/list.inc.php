<?php 
return array(
	'0' => array(
		'name' => 'id',
		'showname' => 'ID',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'id',
		'sortnum' => '1',
		'searchField' => '',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => '',
		'issearch' => '',
		'isallsearch' => '',
		'searchsortnum' => '',
		'status' => '1',
	),
	'1' => array(
		'name' => 'leadname',
		'showname' => '职员领导',
		'shows' => '1',
		'widths' => '200',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'leadname',
		'sortnum' => '2',
		'searchField' => 'mis_system_handing.leadname',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '1',
		'isallsearch' => '1',
		'searchsortnum' => '2',
		'status' => '1',
	),
	'2' => array(
		'name' => 'staffname',
		'showname' => '管辖职员',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'staffname',
		'sortnum' => '3',
		'searchField' => 'mis_system_handing.staffname',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '1',
		'isallsearch' => '1',
		'searchsortnum' => '3',
		'status' => '1',
	),
	'4' => array(
		'name' => 'remark',
		'showname' => '备注',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'remark',
		'sortnum' => '5',
		'searchField' => 'mis_system_handing.remark',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '',
		'isallsearch' => '',
		'searchsortnum' => '5',
		'status' => '1',
	),
	'5' => array(
		'name' => 'action',
		'showname' => '操作',
		'shows' => '1',
		'widths' => '100',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'status',
		'sortnum' => '18',
		'issearch' => '',
		'searchField' => '',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => '',
		'isallsearch' => '',
		'searchsortnum' => '',
		'status' => '1',
		'extention_html_end' => array(
			'0' => ' ',
		),
		'func' => array(
			'0' => array(
				'0' => 'getOperateStatus',
			),
			'1' => array(
				'0' => 'getStatus',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '#createid#',
					'1' => '#auditState#',
					'2' => 'id/#id#',
					'3' => '',
					'4' => '',
					'5' => 'dialog',
					'6' => '日志设置',
					'7' => '570',
					'8' => '300',
				),
			),
			'1' => array(
				'0' => array(
					'0' => '#status#',
				),
			),
		),
	),
);

?>