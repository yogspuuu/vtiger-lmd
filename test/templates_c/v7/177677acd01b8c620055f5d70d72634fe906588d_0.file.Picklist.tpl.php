<?php
/* Smarty version 4.3.4, created on 2023-11-22 07:59:22
  from '/Users/yogapratama/Documents/Kerja/Lintas Media Danawa/vtigercrm/layouts/v7/modules/Vtiger/uitypes/Picklist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_655db4dab63ce9_86645723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '177677acd01b8c620055f5d70d72634fe906588d' => 
    array (
      0 => '/Users/yogapratama/Documents/Kerja/Lintas Media Danawa/vtigercrm/layouts/v7/modules/Vtiger/uitypes/Picklist.tpl',
      1 => 1700618741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655db4dab63ce9_86645723 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/yogapratama/Documents/Kerja/LintasMediaDanawa/vtigercrm/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

<?php $_smarty_tpl->_assignInScope('FIELD_INFO', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo());
$_smarty_tpl->_assignInScope('SPECIAL_VALIDATOR', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator());
$_smarty_tpl->_assignInScope('PICKLIST_VALUES', $_smarty_tpl->tpl_vars['FIELD_INFO']->value['editablepicklistvalues']);
$_smarty_tpl->_assignInScope('PICKLIST_COLORS', $_smarty_tpl->tpl_vars['FIELD_INFO']->value['picklistColors']);?><select data-fieldname="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" data-fieldtype="picklist" class="inputElement select2 <?php if ($_smarty_tpl->tpl_vars['OCCUPY_COMPLETE_WIDTH']->value) {?> row <?php }?>" type="picklist" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator='<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);?>
'<?php }?> data-selected-value='<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue');?>
'<?php if ($_smarty_tpl->tpl_vars['FIELD_INFO']->value["mandatory"] == true) {?> data-rule-required="true" <?php }
if (php7_count($_smarty_tpl->tpl_vars['FIELD_INFO']->value['validator'])) {?>data-specific-rules='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value["validator"]);?>
'<?php }?>><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEmptyPicklistOptionAllowed()) {?><option value=""><?php echo vtranslate('LBL_SELECT_OPTION','Vtiger');?>
</option><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value, 'PICKLIST_VALUE', false, 'PICKLIST_NAME');
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_NAME']->value => $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value) {
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->do_else = false;
ob_start();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value,' ','_');
$_prefixVariable6=ob_get_clean();
$_smarty_tpl->_assignInScope('CLASS_NAME', "picklistColor_".((string)$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName())."_".$_prefixVariable6);?><option value="<?php echo Vtiger_Util_Helper::toSafeHTML($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['PICKLIST_COLORS']->value[$_smarty_tpl->tpl_vars['PICKLIST_NAME']->value])) && $_smarty_tpl->tpl_vars['PICKLIST_COLORS']->value[$_smarty_tpl->tpl_vars['PICKLIST_NAME']->value]) {?>class="<?php echo $_smarty_tpl->tpl_vars['CLASS_NAME']->value;?>
"<?php }?> <?php if (trim(decode_html($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'))) == trim($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value)) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value;?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select><?php if ($_smarty_tpl->tpl_vars['PICKLIST_COLORS']->value) {?><style type="text/css"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value, 'PICKLIST_VALUE', false, 'PICKLIST_NAME');
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_NAME']->value => $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value) {
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->do_else = false;
ob_start();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value,' ','_');
$_prefixVariable7=ob_get_clean();
$_smarty_tpl->_assignInScope('CLASS_NAME', ((string)$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName())."_".$_prefixVariable7);?>.picklistColor_<?php echo $_smarty_tpl->tpl_vars['CLASS_NAME']->value;?>
 {<?php if ((isset($_smarty_tpl->tpl_vars['PICKLIST_COLORS']->value[$_smarty_tpl->tpl_vars['PICKLIST_NAME']->value]))) {?>background-color: <?php echo $_smarty_tpl->tpl_vars['PICKLIST_COLORS']->value[$_smarty_tpl->tpl_vars['PICKLIST_NAME']->value];?>
 !important;<?php if ($_smarty_tpl->tpl_vars['PICKLIST_COLORS']->value[$_smarty_tpl->tpl_vars['PICKLIST_NAME']->value] == '#ffffff') {?>color: #000000 !important;<?php }
}?>}.picklistColor_<?php echo $_smarty_tpl->tpl_vars['CLASS_NAME']->value;?>
.select2-highlighted {white: #ffffff !important;background-color: #337ab7 !important;}<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></style><?php }
}
}
