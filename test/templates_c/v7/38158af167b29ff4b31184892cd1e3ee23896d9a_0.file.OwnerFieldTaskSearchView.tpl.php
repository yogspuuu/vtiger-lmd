<?php
/* Smarty version 4.3.4, created on 2023-11-22 07:59:01
  from '/Users/yogapratama/Documents/Kerja/Lintas Media Danawa/vtigercrm/layouts/v7/modules/Calendar/uitypes/OwnerFieldTaskSearchView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_655db4c513eab4_17506927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38158af167b29ff4b31184892cd1e3ee23896d9a' => 
    array (
      0 => '/Users/yogapratama/Documents/Kerja/Lintas Media Danawa/vtigercrm/layouts/v7/modules/Calendar/uitypes/OwnerFieldTaskSearchView.tpl',
      1 => 1700618740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655db4c513eab4_17506927 (Smarty_Internal_Template $_smarty_tpl) {
?><div class=""><?php $_smarty_tpl->_assignInScope('ASSIGNED_USER_ID', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name'));
$_smarty_tpl->_assignInScope('FIELD_INFO', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo());
$_smarty_tpl->_assignInScope('ALL_ACTIVEUSER_LIST', $_smarty_tpl->tpl_vars['FIELD_INFO']->value['picklistvalues'][vtranslate('LBL_USERS')]);
$_smarty_tpl->_assignInScope('SEARCH_VALUES', explode(',',$_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue']));
$_smarty_tpl->_assignInScope('SEARCH_VALUES', array_map("trim",$_smarty_tpl->tpl_vars['SEARCH_VALUES']->value));
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('uitype') == '52' || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('uitype') == '77') {
$_smarty_tpl->_assignInScope('ALL_ACTIVEGROUP_LIST', array());
} else {
$_smarty_tpl->_assignInScope('ALL_ACTIVEGROUP_LIST', $_smarty_tpl->tpl_vars['FIELD_INFO']->value['picklistvalues'][vtranslate('LBL_GROUPS')]);
}
$_smarty_tpl->_assignInScope('ACCESSIBLE_USER_LIST', $_smarty_tpl->tpl_vars['USER_MODEL']->value->getAccessibleUsersForModule($_smarty_tpl->tpl_vars['MODULE']->value));
$_smarty_tpl->_assignInScope('ACCESSIBLE_GROUP_LIST', $_smarty_tpl->tpl_vars['USER_MODEL']->value->getAccessibleGroupForModule($_smarty_tpl->tpl_vars['MODULE']->value));?><select class="select2 listSearchContributor <?php echo $_smarty_tpl->tpl_vars['ASSIGNED_USER_ID']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['ASSIGNED_USER_ID']->value;?>
"  name="<?php echo $_smarty_tpl->tpl_vars['ASSIGNED_USER_ID']->value;?>
" multiple><optgroup label="<?php echo vtranslate('LBL_USERS');?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_ACTIVEUSER_LIST']->value, 'OWNER_NAME', false, 'OWNER_ID');
$_smarty_tpl->tpl_vars['OWNER_NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['OWNER_ID']->value => $_smarty_tpl->tpl_vars['OWNER_NAME']->value) {
$_smarty_tpl->tpl_vars['OWNER_NAME']->do_else = false;
?><option <?php if (in_array($_smarty_tpl->tpl_vars['OWNER_NAME']->value,$_smarty_tpl->tpl_vars['TASK_FILTERS']->value['assigned_user_id'])) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;?>
" data-picklistvalue= '<?php echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;?>
'<?php if (array_key_exists($_smarty_tpl->tpl_vars['OWNER_ID']->value,$_smarty_tpl->tpl_vars['ACCESSIBLE_USER_LIST']->value)) {?> data-recordaccess=true <?php } else { ?> data-recordaccess=false <?php }?>data-userId="<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['OWNER_ID']->value == $_smarty_tpl->tpl_vars['USER_MODEL']->value->getId()) {
echo vtranslate("LBL_MINE",$_smarty_tpl->tpl_vars['MODULE']->value);
} else {
echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;
}?></option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><?php if (php7_count($_smarty_tpl->tpl_vars['ALL_ACTIVEGROUP_LIST']->value) > 0) {?><optgroup label="<?php echo vtranslate('LBL_GROUPS');?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_ACTIVEGROUP_LIST']->value, 'OWNER_NAME', false, 'OWNER_ID');
$_smarty_tpl->tpl_vars['OWNER_NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['OWNER_ID']->value => $_smarty_tpl->tpl_vars['OWNER_NAME']->value) {
$_smarty_tpl->tpl_vars['OWNER_NAME']->do_else = false;
?><option <?php if (in_array($_smarty_tpl->tpl_vars['OWNER_NAME']->value,$_smarty_tpl->tpl_vars['TASK_FILTERS']->value['assigned_user_id'])) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;?>
" data-picklistvalue= '<?php echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;?>
' <?php if (in_array(trim($_smarty_tpl->tpl_vars['OWNER_NAME']->value),$_smarty_tpl->tpl_vars['SEARCH_VALUES']->value)) {?> selected <?php }
if (array_key_exists($_smarty_tpl->tpl_vars['OWNER_ID']->value,$_smarty_tpl->tpl_vars['ACCESSIBLE_GROUP_LIST']->value)) {?> data-recordaccess=true <?php } else { ?> data-recordaccess=false <?php }?> data-groupid="<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><?php }?></select></div><?php }
}
