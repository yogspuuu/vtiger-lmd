<?php
/* Smarty version 4.3.4, created on 2023-11-22 03:16:43
  from '/Users/yogapratama/Documents/Kerja/Lintas Media Danawa/vtigercrm/layouts/v7/modules/Install/Step1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_655d729be5c285_05451769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8011500bdcf97e4850130cb1480712b2a2574202' => 
    array (
      0 => '/Users/yogapratama/Documents/Kerja/Lintas Media Danawa/vtigercrm/layouts/v7/modules/Install/Step1.tpl',
      1 => 1700618740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655d729be5c285_05451769 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/yogapratama/Documents/Kerja/LintasMediaDanawa/vtigercrm/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>

<div class="row main-container">
	<div class="inner-container">
		<div class="row">
			<div class="col-sm-10">
				<h4><?php echo vtranslate('LBL_WELCOME','Install');?>
</h4>
			</div>
			<div class="col-sm-2">
				<a href="https://wiki.vtiger.com/vtiger6/" target="_blank" class="pull-right">
					<img src="<?php echo vimage_path('help.png');?>
" alt="Help-Icon"/>
				</a>
			</div>
		</div>
		<hr>

		<form class="form-horizontal" name="step1" method="post" action="index.php">
			<input type=hidden name="module" value="Install" />
			<input type=hidden name="view" value="Index" />
			<input type=hidden name="mode" value="Step2" />
			<div class="row">
				<div class="col-sm-4 welcome-image">
					<img src="<?php echo vimage_path('wizard_screen.png');?>
" alt="Vtiger Logo"/>
				</div>
				<div class="col-sm-8">
					<div class="welcome-div">
						<h3><?php echo vtranslate('LBL_WELCOME_TO_VTIGER7_SETUP_WIZARD','Install');?>
</h3>
						<?php echo vtranslate('LBL_VTIGER7_SETUP_WIZARD_DESCRIPTION','Install');?>

					</div>
					<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['LANGUAGES']->value) > 1) {?>
						<div>
							<span><?php echo vtranslate('LBL_CHOOSE_LANGUAGE','Install');?>

								<select name="lang" id="lang">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LANGUAGES']->value, 'language', false, 'header');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['header']->value => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['header']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['header']->value == $_smarty_tpl->tpl_vars['CURRENT_LANGUAGE']->value) {?>selected<?php }?>><?php echo vtranslate(((string)$_smarty_tpl->tpl_vars['language']->value),'Install');?>
</option>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</select>
							</span>
						</div>
					<?php }?>
				</div>
			</div>
			<div class="row">
				<div class="button-container col-sm-12">
					<input type="submit" class="btn btn-large btn-primary pull-right" value="<?php echo vtranslate('LBL_INSTALL_BUTTON','Install');?>
"/>
				</div>
			</div>
		</form>
	</div>
</div><?php }
}
