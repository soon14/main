<?php 
return array(
	'0' => array(
		'name' => 'name',
		'showname' => '名称',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'name',
		'sortnum' => '1',
		'searchField' => 'mis_file_manager.name',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '1',
		'isallsearch' => '1',
		'searchsortnum' => '1',
		'status' => '1',
		'func' => array(
			'0' => array(
				'0' => 'getExtension',
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
	),
	'1' => array(
		'name' => 'size',
		'showname' => '大小',
		'shows' => '1',
		'widths' => '200',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'size',
		'sortnum' => '2',
		'searchField' => 'mis_file_manager.size',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '2',
		'status' => '1',
		'helpvalue' => '',
	),
	'2' => array(
		'name' => 'ext',
		'showname' => '类型',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'ext',
		'sortnum' => '3',
		'searchField' => 'mis_file_manager.ext',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '3',
		'status' => '1',
		'helpvalue' => '',
	),
	'4' => array(
		'name' => 'updatetime',
		'showname' => '修改日期',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'updatetime',
		'sortnum' => '5',
		'searchField' => 'mis_file_manager.updatetime',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '4',
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
					'1' => 'Y-m-d H:i',
				),
			),
		),
		'helpvalue' => '',
	),
	'5' => array(
		'name' => 'createtime',
		'showname' => '创建日期',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'createtime',
		'sortnum' => '6',
		'searchField' => 'mis_file_manager.createtime',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '5',
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
					'1' => 'Y-m-d H:i',
				),
			),
		),
		'helpvalue' => '',
	),
	'6' => array(
		'name' => 'action',
		'showname' => '操作',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'status',
		'sortnum' => '7',
		'issearch' => '0',
		'searchField' => '',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => '',
		'isallsearch' => '0',
		'searchsortnum' => '0',
		'status' => '1',
		'extention_html_end' => array(
			'0' => ' ',
		),
		'func' => array(
			'0' => array(
				'0' => 'createUrl',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '[共享]',
					'1' => 'id/#id#',
					'2' => 'MisFileManager',
					'3' => 'lookupWriteAss',
					'4' => 'lookupWriteAss',
					'5' => 'dialog',
					'6' => '#name# 共享',
					'7' => '',
					'8' => '660',
					'9' => '400',
				),
			),
		),
		'helpvalue' => '',
	),
	'7' => array(
		'name' => 'remark',
		'showname' => '备注',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'ext',
		'sortnum' => '4',
		'searchField' => 'mis_file_manager.remark',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '3',
		'status' => '1',
		'helpvalue' => '',
	),
);

?>