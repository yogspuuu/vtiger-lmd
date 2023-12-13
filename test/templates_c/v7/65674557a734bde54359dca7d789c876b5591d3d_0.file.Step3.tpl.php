<?php
/* Smarty version 4.3.4, created on 2023-11-22 03:17:41
  from '/Users/yogapratama/Documents/Kerja/Lintas Media Danawa/vtigercrm/layouts/v7/modules/Install/Step3.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_655d72d573b379_56936863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65674557a734bde54359dca7d789c876b5591d3d' => 
    array (
      0 => '/Users/yogapratama/Documents/Kerja/Lintas Media Danawa/vtigercrm/layouts/v7/modules/Install/Step3.tpl',
      1 => 1700618740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655d72d573b379_56936863 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form class="form-horizontal" name="step3" method="get" action="index.php">
	<input type=hidden name="module" value="Install" />
	<input type=hidden name="view" value="Index" />
	<input type=hidden name="mode" value="Step4" />

	<div class="main-container">
		<div class="inner-container">
			<div class="row">
				<div class="col-sm-10">
					<h4><?php echo vtranslate('LBL_INSTALL_PREREQUISITES','Install');?>
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
			<div class="row">
				<div class="row offset2">
					<div class="col-sm-2"></div>
					<div class="col-sm-8">
						<div class=" pull-right">
							<div class="button-container">
								<a href ="#">
									<input type="button" class="btn btn-default" value="<?php echo vtranslate('LBL_RECHECK','Install');?>
" id='recheck'/>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row offset2">
					<div class="col-sm-2"></div>
					<div class="col-sm-8">
						<table class="config-table">
							<tr>
								<th><?php echo vtranslate('LBL_PHP_CONFIGURATION','Install');?>
</th>
								<th><?php echo vtranslate('LBL_REQUIRED_VALUE','Install');?>
</th>
								<th><?php echo vtranslate('LBL_PRESENT_VALUE','Install');?>
</th>
							</tr>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SYSTEM_PREINSTALL_PARAMS']->value, 'INFO', false, 'CONFIG_NAME');
$_smarty_tpl->tpl_vars['INFO']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['CONFIG_NAME']->value => $_smarty_tpl->tpl_vars['INFO']->value) {
$_smarty_tpl->tpl_vars['INFO']->do_else = false;
?>
								<tr>
									<td><?php echo vtranslate($_smarty_tpl->tpl_vars['CONFIG_NAME']->value,'Install');?>
</td>
									<td>
										<?php if ($_smarty_tpl->tpl_vars['INFO']->value[1] == 1) {?> 
											<?php echo vtranslate('LBL_YES','Install');?>
 
										<?php } else { ?> 
											<?php echo $_smarty_tpl->tpl_vars['INFO']->value[1];?>
 
										<?php }?>
									</td>
									<td <?php if ($_smarty_tpl->tpl_vars['INFO']->value[2] == false) {?> class="no" >
											<?php $_prefixVariable1 = 'LBL_PHP_VERSION';
$_smarty_tpl->_assignInScope('CONFIG_NAME', $_prefixVariable1);
if ($_prefixVariable1) {?>
												<?php echo $_smarty_tpl->tpl_vars['INFO']->value[0];?>

											<?php } else { ?>
												<?php echo vtranslate('LBL_NO','Install');?>

											<?php }?>
										<?php } elseif (($_smarty_tpl->tpl_vars['INFO']->value[2] == true && $_smarty_tpl->tpl_vars['INFO']->value[1] === true)) {?> > 
											<?php echo vtranslate('LBL_YES','Install');?>
 
										<?php } else { ?> > 
											<?php echo $_smarty_tpl->tpl_vars['INFO']->value[0];?>
 
										<?php }?>
									</td>
								</tr>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</table>
						<?php if ($_smarty_tpl->tpl_vars['PHP_INI_CURRENT_SETTINGS']->value) {?>
							<table class="config-table">
								<tr>
									<th colspan="3"><?php echo vtranslate('LBL_PHP_RECOMMENDED_SETTINGS','Install');?>
</th>
								</tr>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PHP_INI_CURRENT_SETTINGS']->value, 'VALUE', false, 'DIRECTIVE', 'directives', array (
));
$_smarty_tpl->tpl_vars['VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['DIRECTIVE']->value => $_smarty_tpl->tpl_vars['VALUE']->value) {
$_smarty_tpl->tpl_vars['VALUE']->do_else = false;
?>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['DIRECTIVE']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['PHP_INI_RECOMMENDED_SETTINGS']->value[$_smarty_tpl->tpl_vars['DIRECTIVE']->value];?>
</td><td class="no"><?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
</td>
									</tr>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</table>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['FAILED_FILE_PERMISSIONS']->value) {?>
							<table class="config-table">
								<tr>
									<th colspan="2"><?php echo vtranslate('LBL_READ_WRITE_ACCESS','Install');?>
</th>
								</tr>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FAILED_FILE_PERMISSIONS']->value, 'FILE_PATH', false, 'FILE_NAME');
$_smarty_tpl->tpl_vars['FILE_PATH']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FILE_NAME']->value => $_smarty_tpl->tpl_vars['FILE_PATH']->value) {
$_smarty_tpl->tpl_vars['FILE_PATH']->do_else = false;
?>
									<tr>
										<td nowrap><?php echo $_smarty_tpl->tpl_vars['FILE_NAME']->value;?>
 (<?php echo str_replace("./",'',$_smarty_tpl->tpl_vars['FILE_PATH']->value);?>
)</td><td class="no"><?php echo vtranslate('LBL_NO','Install');?>
</td>
									</tr>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</table>
						<?php }?>
					</div>
				</div>
			</div>
			<div class="row offset2">
				<div class="col-sm-2"></div>
				<div class="col-sm-8">
					<div class="button-container">
						<input type="button" class="btn btn-default" value="<?php echo vtranslate('LBL_BACK','Install');?>
" name="back"/>
						<input type="button" class="btn btn-large btn-primary" value="<?php echo vtranslate('LBL_NEXT','Install');?>
" name="step4"/>
					</div>
				</div>
			</div>
		</div>
	</div>
</form><?php }
}
