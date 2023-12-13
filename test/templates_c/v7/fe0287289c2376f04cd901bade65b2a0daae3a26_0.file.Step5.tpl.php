<?php
/* Smarty version 4.3.4, created on 2023-11-22 03:44:38
  from '/Users/yogapratama/Documents/Kerja/Lintas Media Danawa/vtigercrm/layouts/v7/modules/Install/Step5.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_655d7926003bb3_26826250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe0287289c2376f04cd901bade65b2a0daae3a26' => 
    array (
      0 => '/Users/yogapratama/Documents/Kerja/Lintas Media Danawa/vtigercrm/layouts/v7/modules/Install/Step5.tpl',
      1 => 1700618740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655d7926003bb3_26826250 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form class="form-horizontal" name="step5" method="post" action="index.php">
	<input type=hidden name="module" value="Install" />
	<input type=hidden name="view" value="Index" />
	<input type=hidden name="mode" value="Step6" />
	<input type=hidden name="auth_key" value="<?php echo $_smarty_tpl->tpl_vars['AUTH_KEY']->value;?>
" />

	<div class="row main-container">
		<div class="inner-container">
			<div class="row">
				<div class="col-sm-10">
					<h4><?php echo vtranslate('LBL_CONFIRM_CONFIGURATION_SETTINGS','Install');?>
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
			<?php if ($_smarty_tpl->tpl_vars['DB_CONNECTION_INFO']->value['flag'] != true) {?>
				<div class="offset2 row" id="errorMessage">
					<div class="col-sm-2"></div>
					<div class="col-sm-8">
						<div class="alert alert-error">
							<?php echo $_smarty_tpl->tpl_vars['DB_CONNECTION_INFO']->value['error_msg'];?>

							<?php echo $_smarty_tpl->tpl_vars['DB_CONNECTION_INFO']->value['error_msg_info'];?>

						</div>
					</div>
				</div>
			<?php }?>
			<div class="offset2 row">
				<div class="col-sm-2"></div>
				<div class="col-sm-8">
					<table class="config-table input-table">
						<thead>
							<tr><th colspan="2"><?php echo vtranslate('LBL_DATABASE_INFORMATION','Install');?>
</th></tr>
						</thead>
						<tbody>
							<tr>
								<td><?php echo vtranslate('LBL_DATABASE_TYPE','Install');?>
<span class="no">*</span></td>
								<td><?php echo vtranslate('MySQL','Install');?>
</td>
							</tr>
							<tr>
								<td><?php echo vtranslate('LBL_DB_NAME','Install');?>
<span class="no">*</span></td>
								<td><?php echo $_smarty_tpl->tpl_vars['INFORMATION']->value['db_name'];?>
</td>
							</tr>
						</tbody>
					</table>
					<table class="config-table input-table">
						<thead>
							<tr><th colspan="2"><?php echo vtranslate('LBL_SYSTEM_INFORMATION','Install');?>
</th></tr>
						</thead>
						<tbody>
							<tr>
								<td><?php echo vtranslate('LBL_URL','Install');?>
<span class="no">*</span></td>
								<td><a href="#"><?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
</a></td>
							</tr>
							<tr>
								<td><?php echo vtranslate('LBL_CURRENCY','Install');?>
<span class="no">*</span></td>
								<td><?php echo $_smarty_tpl->tpl_vars['INFORMATION']->value['currency_name'];?>
</td>
							</tr>
						</tbody>
					</table>
					<table class="config-table input-table">
						<thead>
							<tr><th colspan="2"><?php echo vtranslate('LBL_ADMIN_USER_INFORMATION','Install');?>
</th></tr>
						</thead>
						<tbody>
							<tr>
								<td><?php echo vtranslate('LBL_USERNAME','Install');?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['INFORMATION']->value['admin'];?>
</td>
							</tr>
							<tr>
								<td><?php echo vtranslate('LBL_EMAIL','Install');?>
<span class="no">*</span></td>
								<td><?php echo $_smarty_tpl->tpl_vars['INFORMATION']->value['admin_email'];?>
</td>
							</tr>
							<tr>
								<td><?php echo vtranslate('LBL_TIME_ZONE','Install');?>
<span class="no">*</span></td>
								<td><?php echo $_smarty_tpl->tpl_vars['INFORMATION']->value['timezone'];?>
</td>
							</tr>
							<tr>
								<td><?php echo vtranslate('LBL_DATE_FORMAT','Install');?>
<span class="no">*</span></td>
								<td><?php echo $_smarty_tpl->tpl_vars['INFORMATION']->value['dateformat'];?>
</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row offset2">
				<div class="col-sm-2"></div>
				<div class="col-sm-8">
					<div class="button-container">
						<input type="button" class="btn btn-default" value="<?php echo vtranslate('LBL_BACK','Install');?>
" <?php if ($_smarty_tpl->tpl_vars['DB_CONNECTION_INFO']->value['flag'] == true) {?> disabled= "disabled" <?php }?> name="back"/>
						<?php if ($_smarty_tpl->tpl_vars['DB_CONNECTION_INFO']->value['flag'] == true) {?>
							<input type="button" class="btn btn-large btn-primary" value="<?php echo vtranslate('LBL_NEXT','Install');?>
" name="step6"/>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
	</div>
</form><?php }
}
