<?php
/* Smarty version 4.3.4, created on 2023-11-27 09:14:52
  from '/Users/yogapratama/Documents/Kerja/Lintas Media Danawa/vtigercrm/layouts/v7/modules/Vtiger/ListViewRecordActions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65645e0cad5670_54673873',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f2678b9954ef007908f986d8f5ea282951ac907' => 
    array (
      0 => '/Users/yogapratama/Documents/Kerja/Lintas Media Danawa/vtigercrm/layouts/v7/modules/Vtiger/ListViewRecordActions.tpl',
      1 => 1700618741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65645e0cad5670_54673873 (Smarty_Internal_Template $_smarty_tpl) {
?><!--LIST VIEW RECORD ACTIONS--><div class="table-actions"><?php if (!$_smarty_tpl->tpl_vars['SEARCH_MODE_RESULTS']->value) {?><span class="input" ><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
" class="listViewEntriesCheckBox"/></span><?php }
if ($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('starred') == vtranslate('LBL_YES',$_smarty_tpl->tpl_vars['MODULE']->value)) {
$_smarty_tpl->_assignInScope('STARRED', true);
} else {
$_smarty_tpl->_assignInScope('STARRED', false);
}
if ($_smarty_tpl->tpl_vars['QUICK_PREVIEW_ENABLED']->value == 'true') {?><span><a class="quickView fa fa-eye icon action" data-app="<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" title="<?php echo vtranslate('LBL_QUICK_VIEW',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></a></span><?php }
if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isStarredEnabled()) {?><span><a class="markStar fa icon action <?php if ($_smarty_tpl->tpl_vars['STARRED']->value) {?> fa-star active <?php } else { ?> fa-star-o<?php }?>" title="<?php if ($_smarty_tpl->tpl_vars['STARRED']->value) {?> <?php echo vtranslate('LBL_STARRED',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php } else { ?> <?php echo vtranslate('LBL_NOT_STARRED',$_smarty_tpl->tpl_vars['MODULE']->value);
}?>"></a></span><?php }?><span class="more dropdown action"><span href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v icon"></i></span><ul class="dropdown-menu"><li><a data-id="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
" href="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getFullDetailViewUrl();?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
"><?php echo vtranslate('LBL_DETAILS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li><?php if ($_smarty_tpl->tpl_vars['RECORD_ACTIONS']->value) {
if ($_smarty_tpl->tpl_vars['RECORD_ACTIONS']->value['edit']) {?><li><a data-id="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
" href="javascript:void(0);" data-url="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getEditViewUrl();?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" name="editlink"><?php echo vtranslate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li><?php }
if ($_smarty_tpl->tpl_vars['RECORD_ACTIONS']->value['delete']) {?><li><a data-id="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
" href="javascript:void(0);" class="deleteRecordButton"><?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li><?php }
}?></ul></span><div class="btn-group inline-save hide"><button class="button btn-success btn-small save" type="button" name="save"><i class="fa fa-check"></i></button><button class="button btn-danger btn-small cancel" type="button" name="Cancel"><i class="fa fa-close"></i></button></div></div>
<?php }
}
