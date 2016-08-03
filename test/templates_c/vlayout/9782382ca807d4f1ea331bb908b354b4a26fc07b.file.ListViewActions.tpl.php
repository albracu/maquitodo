<?php /* Smarty version Smarty-3.1.7, created on 2016-07-16 16:03:05
         compiled from "/var/www/novation/proyectos/maquitodo/includes/runtime/../../layouts/vlayout/modules/Settings/PickListDependency/ListViewActions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:34823011578a5ab9713912-40261176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9782382ca807d4f1ea331bb908b354b4a26fc07b' => 
    array (
      0 => '/var/www/novation/proyectos/maquitodo/includes/runtime/../../layouts/vlayout/modules/Settings/PickListDependency/ListViewActions.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34823011578a5ab9713912-40261176',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'PICKLIST_MODULES_LIST' => 0,
    'MODULE_MODEL' => 0,
    'MODULE_NAME' => 0,
    'FOR_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_578a5ab97724e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578a5ab97724e')) {function content_578a5ab97724e($_smarty_tpl) {?>
<span class="pull-right listViewActions"><select class="chzn-select span3 pickListSupportedModules"><option value=""><?php echo vtranslate('LBL_ALL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php  $_smarty_tpl->tpl_vars['MODULE_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MODULE_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PICKLIST_MODULES_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_MODEL']->key => $_smarty_tpl->tpl_vars['MODULE_MODEL']->value){
$_smarty_tpl->tpl_vars['MODULE_MODEL']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['MODULE_NAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name'), null, 0);?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value==$_smarty_tpl->tpl_vars['FOR_MODULE']->value){?> selected <?php }?>><?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('label')=='Calendar'){?><?php echo vtranslate('LBL_TASK',$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('label'));?>
<?php }else{ ?><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('label'));?>
<?php }?></option><?php } ?></select></span><?php }} ?>