<?php
/* Smarty version 4.3.4, created on 2023-11-27 03:01:38
  from '/Users/yogapratama/Documents/Kerja/Lintas Media Danawa/vtigercrm/layouts/v7/modules/Vtiger/Popup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65640692a5f6d5_66706022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e591b7f6eb886e7263e7272541745021802f8391' => 
    array (
      0 => '/Users/yogapratama/Documents/Kerja/Lintas Media Danawa/vtigercrm/layouts/v7/modules/Vtiger/Popup.tpl',
      1 => 1700618741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65640692a5f6d5_66706022 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal-dialog modal-lg"><div class="modal-content"><?php ob_start();
echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_subTemplateRender(vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('TITLE'=>$_prefixVariable1), 0, true);
?><div class="modal-body"><div id="popupPageContainer" class="contentsDiv col-sm-12"><input type="hidden" id="parentModule" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
"/><input type="hidden" id="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"/><input type="hidden" id="parent" value="<?php echo $_smarty_tpl->tpl_vars['PARENT_MODULE']->value;?>
"/><input type="hidden" id="sourceRecord" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_RECORD']->value;?>
"/><input type="hidden" id="sourceField" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_FIELD']->value;?>
"/><input type="hidden" id="url" value="<?php echo $_smarty_tpl->tpl_vars['GETURL']->value;?>
" /><input type="hidden" id="multi_select" value="<?php echo $_smarty_tpl->tpl_vars['MULTI_SELECT']->value;?>
" /><input type="hidden" id="currencyId" value="<?php echo $_smarty_tpl->tpl_vars['CURRENCY_ID']->value;?>
" /><input type="hidden" id="relatedParentModule" value="<?php echo $_smarty_tpl->tpl_vars['RELATED_PARENT_MODULE']->value;?>
"/><input type="hidden" id="relatedParentId" value="<?php echo $_smarty_tpl->tpl_vars['RELATED_PARENT_ID']->value;?>
"/><input type="hidden" id="view" name="view" value="<?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
"/><input type="hidden" id="relationId" value="<?php echo $_smarty_tpl->tpl_vars['RELATION_ID']->value;?>
" /><input type="hidden" id="selectedIds" name="selectedIds"><?php if (!empty($_smarty_tpl->tpl_vars['POPUP_CLASS_NAME']->value)) {?><input type="hidden" id="popUpClassName" value="<?php echo $_smarty_tpl->tpl_vars['POPUP_CLASS_NAME']->value;?>
"/><?php }?><div id="popupContents" class=""><?php $_smarty_tpl->_subTemplateRender(vtemplate_path('PopupContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div></div></div></div>
<?php }
}
