<?php
/* Smarty version 4.3.4, created on 2023-11-22 03:54:26
  from '/Users/yogapratama/Documents/Kerja/Lintas Media Danawa/vtigercrm/layouts/v7/modules/Calendar/uitypes/StatusPickListFieldSearchView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_655d7b72d42b82_08565141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9c2868cf8488c14956de728543183e2ef2e1a27' => 
    array (
      0 => '/Users/yogapratama/Documents/Kerja/Lintas Media Danawa/vtigercrm/layouts/v7/modules/Calendar/uitypes/StatusPickListFieldSearchView.tpl',
      1 => 1700618740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655d7b72d42b82_08565141 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('FIELD_INFO', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo());
$_smarty_tpl->_assignInScope('PICKLIST_VALUES', $_smarty_tpl->tpl_vars['FIELD_INFO']->value['picklistvalues']);
$_smarty_tpl->_assignInScope('FIELD_INFO', Vtiger_Util_Helper::toSafeHTML(Zend_Json::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value)));
$_smarty_tpl->_assignInScope('EVENTS_MODULE_MODEL', Vtiger_Module_Model::getInstance('Events'));
$_smarty_tpl->_assignInScope('EVENT_STATUS_FIELD_MODEL', $_smarty_tpl->tpl_vars['EVENTS_MODULE_MODEL']->value->getField('eventstatus'));
$_smarty_tpl->_assignInScope('EVENT_STAUTS_PICKLIST_VALUES', $_smarty_tpl->tpl_vars['EVENT_STATUS_FIELD_MODEL']->value->getPicklistValues());
$_smarty_tpl->_assignInScope('PICKLIST_VALUES', array_merge($_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value,$_smarty_tpl->tpl_vars['EVENT_STAUTS_PICKLIST_VALUES']->value));
$_smarty_tpl->_assignInScope('SEARCH_VALUES', explode(',',$_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue']));?><div class="select2_search_div"><input type="text" class="listSearchContributor inputElement select2_input_element"/><select class="select2 listSearchContributor" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name');?>
" multiple data-fieldinfo='<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['FIELD_INFO']->value, ENT_QUOTES, 'UTF-8', true);?>
' style="display:none"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value, 'PICKLIST_LABEL', false, 'PICKLIST_KEY');
$_smarty_tpl->tpl_vars['PICKLIST_LABEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_KEY']->value => $_smarty_tpl->tpl_vars['PICKLIST_LABEL']->value) {
$_smarty_tpl->tpl_vars['PICKLIST_LABEL']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['PICKLIST_KEY']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['PICKLIST_KEY']->value,$_smarty_tpl->tpl_vars['SEARCH_VALUES']->value)) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['PICKLIST_LABEL']->value;?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><?php }
}
