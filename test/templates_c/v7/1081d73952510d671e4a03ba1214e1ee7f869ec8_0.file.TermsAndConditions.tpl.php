<?php
/* Smarty version 4.3.4, created on 2023-11-22 07:48:51
  from '/Users/yogapratama/Documents/Kerja/Lintas Media Danawa/vtigercrm/layouts/v7/modules/Settings/Vtiger/TermsAndConditions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_655db263c435c0_63536141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1081d73952510d671e4a03ba1214e1ee7f869ec8' => 
    array (
      0 => '/Users/yogapratama/Documents/Kerja/Lintas Media Danawa/vtigercrm/layouts/v7/modules/Settings/Vtiger/TermsAndConditions.tpl',
      1 => 1700618741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655db263c435c0_63536141 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="editViewContainer" id="TermsAndConditionsContainer"><div class="col-sm-12 col-lg-12 col-md-12 form-horizontal"><div class="block"><div><h4><?php echo vtranslate('LBL_TERMS_AND_CONDITIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h4></div><hr><div class="contents row form-group"><div class="col-lg-offset-1 col-lg-2 col-md-2 col-sm-2 control-label fieldLabel"><label><?php echo vtranslate('LBL_SELECT_MODULE','Vtiger');?>
</label></div><div class="fieldValue col-lg-4 col-md-4 col-sm-4 "><select class="select2-container select2 inputElement col-sm-6 selectModule"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['INVENTORY_MODULES']->value, 'MODULE_NAME');
$_smarty_tpl->tpl_vars['MODULE_NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_NAME']->value) {
$_smarty_tpl->tpl_vars['MODULE_NAME']->do_else = false;
?><option value=<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
><?php ob_start();
echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;
$_prefixVariable1 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;
$_prefixVariable2 = ob_get_clean();
echo vtranslate($_prefixVariable1,$_prefixVariable2);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><br><div class="col-lg-offset-1 col-lg-11 col-md-11 col-sm-11"><textarea class=" TCContent form-control" rows="10" placeholder="<?php echo vtranslate('LBL_SPECIFY_TERMS_AND_CONDITIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" style="width:100%;" ><?php echo $_smarty_tpl->tpl_vars['CONDITION_TEXT']->value;?>
</textarea></div><div class='clearfix'></div><br></div></div><br><div class='modal-overlay-footer clearfix '><div class="row clearfix"><div class='textAlignCenter col-lg-12 col-md-12 col-sm-12 '><button type='submit' class='btn btn-success saveButton saveTC hide' type="submit" ><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button>&nbsp;&nbsp;</div></div></div></div>

<?php }
}
