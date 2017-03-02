<?php
//
//    ______         ______           __         __         ______
//   /\  ___\       /\  ___\         /\_\       /\_\       /\  __ \
//   \/\  __\       \/\ \____        \/\_\      \/\_\      \/\ \_\ \
//    \/\_____\      \/\_____\     /\_\/\_\      \/\_\      \/\_\ \_\
//     \/_____/       \/_____/     \/__\/_/       \/_/       \/_/ /_/
//
//   上海商创网络科技有限公司
//
//  ---------------------------------------------------------------------------------
//
//   一、协议的许可和权利
//
//    1. 您可以在完全遵守本协议的基础上，将本软件应用于商业用途；
//    2. 您可以在协议规定的约束和限制范围内修改本产品源代码或界面风格以适应您的要求；
//    3. 您拥有使用本产品中的全部内容资料、商品信息及其他信息的所有权，并独立承担与其内容相关的
//       法律义务；
//    4. 获得商业授权之后，您可以将本软件应用于商业用途，自授权时刻起，在技术支持期限内拥有通过
//       指定的方式获得指定范围内的技术支持服务；
//
//   二、协议的约束和限制
//
//    1. 未获商业授权之前，禁止将本软件用于商业用途（包括但不限于企业法人经营的产品、经营性产品
//       以及以盈利为目的或实现盈利产品）；
//    2. 未获商业授权之前，禁止在本产品的整体或在任何部分基础上发展任何派生版本、修改版本或第三
//       方版本用于重新开发；
//    3. 如果您未能遵守本协议的条款，您的授权将被终止，所被许可的权利将被收回并承担相应法律责任；
//
//   三、有限担保和免责声明
//
//    1. 本软件及所附带的文件是作为不提供任何明确的或隐含的赔偿或担保的形式提供的；
//    2. 用户出于自愿而使用本软件，您必须了解使用本软件的风险，在尚未获得商业授权之前，我们不承
//       诺提供任何形式的技术支持、使用担保，也不承担任何因使用本软件而产生问题的相关责任；
//    3. 上海商创网络科技有限公司不对使用本产品构建的商城中的内容信息承担责任，但在不侵犯用户隐
//       私信息的前提下，保留以任何方式获取用户信息及商品信息的权利；
//
//   有关本产品最终用户授权协议、商业授权与技术服务的详细内容，均由上海商创网络科技有限公司独家
//   提供。上海商创网络科技有限公司拥有在不事先通知的情况下，修改授权协议的权力，修改后的协议对
//   改变之日起的新授权用户生效。电子文本形式的授权协议如同双方书面签署的协议一样，具有完全的和
//   等同的法律效力。您一旦开始修改、安装或使用本产品，即被视为完全理解并接受本协议的各项条款，
//   在享有上述条款授予的权力的同时，受到相关的约束和限制。协议许可范围以外的行为，将直接违反本
//   授权协议并构成侵权，我们有权随时终止授权，责令停止损害，并保留追究相关责任的权力。
//
//  ---------------------------------------------------------------------------------
//
defined('IN_ECJIA') or exit('No permission resources.');

/**
 * ECJIA 商品类型管理语言文件
 */
return array(
	/* 列表 */
	'by_goods_type' 	=> '按商品类型显示：',
	'all_goods_type' 	=> '所有商品类型',
	'attr_id'		 	=> '编号',
	'cat_id' 			=> '商品类型',
	'attr_name' 		=> '属性名称',
	'attr_input_type' 	=> '属性值的录入方式',
	'attr_values' 		=> '可选值列表',
	'attr_type' 		=> '购买商品时是否需要选择该属性的值',
	
	'value_attr_input_type' => array(
		ATTR_TEXT 		=> '手工录入',
		ATTR_OPTIONAL 	=> '从列表中选择',
		ATTR_TEXTAREA 	=> '多行文本框',
	),
	
	'drop_confirm' 	=> '您确实要删除该属性吗？',
	'batchdrop' 	=> '批量删除',
		
	/* 添加/编辑 */
	'label_attr_name' 	=> '属性名称：',
	'label_cat_id' 		=> '所属商品类型：',
	'label_attr_index' 	=> '能否进行检索：',
	'label_is_linked' 	=> '相同属性商品是否关联：',
	'no_index' 			=> '不需要检索',
	'keywords_index' 	=> '关键字检索',
	'range_index' 		=> '范围检索',
	'note_attr_index' 	=> '不需要该属性成为检索商品条件的情况请选择不需要检索，需要该属性进行关键字检索商品时选择关键字检索，<br/>如果该属性检索时希望是指定某个范围时，选择范围检索。',
	'label_attr_input_type' => '该属性值的录入方式：',
	'text' 				=> '手工录入',
	'select'		 	=> '从下面的列表中选择（一行代表一个可选值）',
	'text_area' 		=> '多行文本框',
	'label_attr_values' => '可选值列表：',
	'label_attr_group' 	=> '属性分组：',
	'label_attr_type' 	=> '属性是否可选：',
	'note_attr_type' 	=> '选择"单选/复选属性"时，可以对商品该属性设置多个值，同时还能对不同属性值指定不同的价格加价，用户购买商品时需要选定具体的属性值。<br/>选择"唯一属性"时，商品的该属性值只能设置一个值，用户只能查看该值。',
	'attr_type_values' 	=> array(
		0 => '唯一属性',
		1 => '单选属性',
		2 => '复选属性',
	),
	
	'add_next' 	=> '添加下一个属性',
	'back_list' => '返回属性列表',
	'add_ok' 	=> '添加属性 [%s] 成功。',
	'edit_ok' 	=> '编辑属性 [%s] 成功。',
		
	/* 提示信息 */
	'name_exist' 			=> '该属性名称已存在，请您换一个名称。',
	'drop_confirm' 			=> '您确实要删除该属性吗？',
	'notice_drop_confirm' 	=> '已经有%s个商品使用该属性，您确实要删除该属性吗？',
	'name_not_null' 		=> '属性名称不能为空。',
	'no_select_arrt' 		=> '您没有选择需要删除的属性',
	'drop_ok' 				=> '成功删除了 %d 条商品属性',
		
	'js_languages' => array(
		'name_not_null' 	=> '请您输入属性名称。',
		'values_not_null' 	=> '请您输入该属性的可选值。',
		'cat_id_not_null' 	=> '请您选择该属性所属的商品类型。',
	),
	
	//追加
	'goods_attribute'	=> '商品属性',
	'add_attribute'		=> '添加属性',
	'cat_not_empty'		=> '商品类型不能为空',
	'edit_success'		=> '编辑成功',
	'format_error'		=> '请输入大于0的整数',
	'drop_success'		=> '删除成功',
	
	'drop_select_confirm'	=> '您确定要删除选中的商品属性吗？',
	'batch_operation'		=> '批量操作',
	'name_not_null'			=> '请输入属性名称',
	'order_not_null'		=> '请输入排序号',
	
	'overview'				=> '概述',
	'more_info'				=> '更多信息：',
	
	'goods_attribute_help'	=> '欢迎访问ECJia智能后台商品属性列表页面，系统中所有的商品属性都会显示在此列表中。',
	'about_goods_attribute'	=> '关于商品属性列表帮助文档',
	
	'add_attribute_help'	=> '欢迎访问ECJia智能后台添加商品属性页面，可以在此页面添加商品属性信息。',
	'about_add_attribute'	=> '关于添加商品属性帮助文档',
	
	'edit_attribute_help'	=> '欢迎访问ECJia智能后台编辑商品属性页面，可以在此页面编辑商品属性信息。',
	'about_edit_attribute'	=> '关于编辑商品属性帮助文档',
);

// end