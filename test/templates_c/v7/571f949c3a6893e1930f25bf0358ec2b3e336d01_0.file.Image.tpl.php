<?php
/* Smarty version 4.3.4, created on 2023-12-13 05:01:43
  from '/Users/yogapratama/Documents/Kerja/Lintas Media Danawa/vtigercrm/layouts/v7/modules/Vtiger/uitypes/Image.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65793ab76dc768_20745660',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '571f949c3a6893e1930f25bf0358ec2b3e336d01' => 
    array (
      0 => '/Users/yogapratama/Documents/Kerja/Lintas Media Danawa/vtigercrm/layouts/v7/modules/Vtiger/uitypes/Image.tpl',
      1 => 1700618741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65793ab76dc768_20745660 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_array($_smarty_tpl->tpl_vars['IMAGE_DETAILS']->value)) {
$_smarty_tpl->_assignInScope('IMAGE_DETAILS', $_smarty_tpl->tpl_vars['RECORD_STRUCTURE_MODEL']->value->getRecord()->getImageDetails());
}
if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value == 'Webforms') {?><input type="text" readonly="" /><?php } else {
$_smarty_tpl->_assignInScope('SPECIAL_VALIDATOR', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator());
$_smarty_tpl->_assignInScope('FIELD_INFO', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo());?><div class="fileUploadContainer text-left"><div class="fileUploadBtn btn btn-primary"><span><i class="fa fa-laptop"></i> <?php echo vtranslate('LBL_UPLOAD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span><input type="file" class="inputElement <?php if ($_smarty_tpl->tpl_vars['MODULE']->value == 'Products') {?>multi max-6<?php }?> <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue') && $_smarty_tpl->tpl_vars['FIELD_INFO']->value["mandatory"] == true) {?> ignore-validation <?php }?>" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue');?>
"<?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator="<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);?>
"<?php }
if ($_smarty_tpl->tpl_vars['FIELD_INFO']->value["mandatory"] == true) {?> data-rule-required="true" <?php }
if (php7_count($_smarty_tpl->tpl_vars['FIELD_INFO']->value['validator'])) {?>data-specific-rules='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value["validator"]);?>
'<?php }?> /></div><div class="uploadedFileDetails <?php if ($_smarty_tpl->tpl_vars['IS_EXTERNAL_LOCATION_TYPE']->value) {?>hide<?php }?>"><div class="uploadedFileSize"></div><div class="uploadedFileName"><?php if (!empty($_smarty_tpl->tpl_vars['FIELD_VALUE']->value) && !$_REQUEST['isDuplicate']) {?>[<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_VALUE']->value);?>
]<?php }?></div></div></div><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType() == 'image' || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType() == 'file') {
if ($_smarty_tpl->tpl_vars['MODULE']->value != 'Products') {?><div class='redColor'><?php echo vtranslate('LBL_NOTE_EXISTING_ATTACHMENTS_WILL_BE_REPLACED',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><?php }
}
if ($_smarty_tpl->tpl_vars['MODULE']->value == 'Products') {?><div id="MultiFile1_wrap_list" class="MultiFile-list"></div><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['IMAGE_DETAILS']->value, 'IMAGE_INFO', false, 'ITER');
$_smarty_tpl->tpl_vars['IMAGE_INFO']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ITER']->value => $_smarty_tpl->tpl_vars['IMAGE_INFO']->value) {
$_smarty_tpl->tpl_vars['IMAGE_INFO']->do_else = false;
?><div class="row" style="margin-top:5px;"><?php if (!empty($_smarty_tpl->tpl_vars['IMAGE_INFO']->value['url'])) {?><span class="col-lg-6" name="existingImages"><img src="<?php echo $_smarty_tpl->tpl_vars['IMAGE_INFO']->value['url'];?>
" data-image-id="<?php echo $_smarty_tpl->tpl_vars['IMAGE_INFO']->value['id'];?>
" width="400" height="250" ></span><span class="col-lg-3"><span class="row"><span class="col-lg-11">[<?php echo $_smarty_tpl->tpl_vars['IMAGE_INFO']->value['name'];?>
]</span><span class="col-lg-1"><input type="button" id="file_<?php echo $_smarty_tpl->tpl_vars['ITER']->value;?>
" value="<?php echo vtranslate('LBL_DELETE','Vtiger');?>
" class="imageDelete"></span></span></span><?php }?></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
