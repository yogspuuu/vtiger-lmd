<?php
/* Smarty version 4.3.4, created on 2023-11-22 03:53:36
  from '/Users/yogapratama/Documents/Kerja/Lintas Media Danawa/vtigercrm/layouts/v7/modules/Vtiger/dashboards/CalendarActivities.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_655d7b4075ac12_21742210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07f21a960bcaebf8b2b0d5c16c2cde7c426fd8e4' => 
    array (
      0 => '/Users/yogapratama/Documents/Kerja/Lintas Media Danawa/vtigercrm/layouts/v7/modules/Vtiger/dashboards/CalendarActivities.tpl',
      1 => 1700618741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655d7b4075ac12_21742210 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/yogapratama/Documents/Kerja/LintasMediaDanawa/vtigercrm/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>

<div class="dashboardWidgetHeader clearfix">
    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['SHARED_USERS']->value) > 0 || smarty_modifier_count($_smarty_tpl->tpl_vars['SHARED_GROUPS']->value) > 0) {?>
        <?php $_smarty_tpl->_assignInScope('usersList', "1");?>
    <?php }?>
    <div class="title">
        <div class="dashboardTitle" title="<?php echo vtranslate($_smarty_tpl->tpl_vars['WIDGET']->value->getTitle(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><b><?php if (!$_smarty_tpl->tpl_vars['usersList']->value) {
echo vtranslate('LBL_MY',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
&nbsp;<?php }
echo vtranslate($_smarty_tpl->tpl_vars['WIDGET']->value->getTitle(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</b></div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['usersList']->value) {?>
        <div class="userList">
            <select class="select2 widgetFilter" name="type">
                <option value="<?php echo $_smarty_tpl->tpl_vars['CURRENTUSER']->value->getId();?>
" selected><?php echo vtranslate('LBL_MINE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SHARED_USERS']->value, 'USER_NAME', false, 'USER_ID');
$_smarty_tpl->tpl_vars['USER_NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['USER_ID']->value => $_smarty_tpl->tpl_vars['USER_NAME']->value) {
$_smarty_tpl->tpl_vars['USER_NAME']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['USER_ID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['USER_NAME']->value;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SHARED_GROUPS']->value, 'GROUP_NAME', false, 'GROUP_ID');
$_smarty_tpl->tpl_vars['GROUP_NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['GROUP_ID']->value => $_smarty_tpl->tpl_vars['GROUP_NAME']->value) {
$_smarty_tpl->tpl_vars['GROUP_NAME']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['GROUP_ID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['GROUP_NAME']->value;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <option value="all"><?php echo vtranslate('All',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option>
            </select>
        </div>
    <?php }?>
</div>
<div name="history" class="dashboardWidgetContent" style="padding-top:15px;">
    <?php $_smarty_tpl->_subTemplateRender(vtemplate_path("dashboards/CalendarActivitiesContents.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('WIDGET'=>$_smarty_tpl->tpl_vars['WIDGET']->value), 0, true);
?>
</div>
<div class="widgeticons dashBoardWidgetFooter">
    <div class="footerIcons pull-right">
        <?php $_smarty_tpl->_subTemplateRender(vtemplate_path("dashboards/DashboardFooterIcons.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    </div>
</div><?php }
}
