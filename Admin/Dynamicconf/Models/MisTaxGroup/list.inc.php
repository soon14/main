<?php 
return array(
	'0' => array(
		'name' => 'id',
		'showname' => 'ID',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'id',
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
		'name' => 'code',
		'showname' => '税组编码',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'code',
		'sortnum' => '2',
		'issearch' => '1',
		'searchField' => 'mis_tax_group.code',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '1',
		'searchsortnum' => '2',
	),
	'2' => array(
		'name' => 'name',
		'showname' => '税组名称',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'name',
		'sortnum' => '3',
		'issearch' => '1',
		'searchField' => 'mis_tax_group.name',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '1',
		'searchsortnum' => '3',
	),
	'3' => array(
		'name' => 'taxdetail',
		'showname' => '税率值',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'taxdetail',
		'sortnum' => '4',
		'issearch' => '',
		'searchField' => 'mis_tax_group.taxdetail',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '',
		'searchsortnum' => '4',
	),
	'4' => array(
		'name' => 'cmethod',
		'showname' => '计算方法',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'cmethod',
		'sortnum' => '5',
		'issearch' => '1',
		'searchField' => 'mis_tax_group.cmethod',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '1',
		'searchsortnum' => '5',
	),
	'5' => array(
		'name' => 'type',
		'showname' => '类型',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'type',
		'sortnum' => '6',
		'issearch' => '1',
		'searchField' => 'mis_tax_group.type',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '1',
		'searchsortnum' => '6',
	),
	'6' => array(
		'name' => 'remark',
		'showname' => '备注',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'remark',
		'sortnum' => '7',
		'issearch' => '1',
		'searchField' => 'mis_tax_group.remark',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '1',
		'searchsortnum' => '7',
	),
	'7' => array(
		'name' => 'action',
		'showname' => '操作',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'status',
		'sortnum' => '8',
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
					'6' => '税金组设置',
					'7' => '520',
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
	/* '8' => array(
		'name' => 'action',
		'showname' => '操作',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'status',
		'func' => array(
			'0' => array(
				'0' => 'showStatus',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '#status#',
					'1' => '#id#',
				),
			),
		),
		'sortnum' => '9',
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