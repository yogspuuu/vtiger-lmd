<?php
/* Smarty version 4.3.4, created on 2023-11-29 08:35:29
  from '/Users/yogapratama/Documents/Kerja/Lintas Media Danawa/vtigercrm/layouts/v7/modules/Mobile/simple/Header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6566f7d1dc7269_31503743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd328c4745b9bbfe8e486bcd5ede596add1ca200c' => 
    array (
      0 => '/Users/yogapratama/Documents/Kerja/Lintas Media Danawa/vtigercrm/layouts/v7/modules/Mobile/simple/Header.tpl',
      1 => 1700618740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6566f7d1dc7269_31503743 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html ng-app="mobileapp">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Vtiger</title>
		<link rel="shortcut icon" href="data:image/x-icon;," type="image/x-icon"> 
		<link rel="stylesheet" href="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/resources/libs/angularjs/angular-material.min.css">
		<!--link rel="stylesheet" href="https://fonts.googleapis.com/css?family=RobotoDraft:300,400,500,700,400italic"-->

				<?php if ($_smarty_tpl->tpl_vars['_styles']->value) {?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_styles']->value, '_style');
$_smarty_tpl->tpl_vars['_style']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_style']->value) {
$_smarty_tpl->tpl_vars['_style']->do_else = false;
?>
				<link type="text/css" rel="stylesheet" href="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['_style']->value;?>
">
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php }?>
				<link type="text/css" rel="stylesheet" href="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/resources/libs/md-icons/css/materialdesignicons.min.css">
		<link type="text/css" rel="stylesheet" href="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/resources/libs/md-datepicker/angular-datepicker.min.css">
		<link type="text/css" rel="stylesheet" href="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/resources/libs/Vtiger-icons/style.css">
		<link type="text/css" rel="stylesheet" href="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/resources/css/application.css">
		<link type="text/css" rel="stylesheet" href="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/resources/css/style.css">
				<link type="text/css" rel="stylesheet" href="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/resources/libs/angularjs/angular-material-datetimepicker/css/material-datetimepicker.min.css">

		<?php echo '<script'; ?>
 type="text/javascript" src="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/resources/libs/jquery/date.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/resources/libs/jquery/jquery2.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/resources/libs/angularjs/angular.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/resources/libs/angularjs/angular-touch.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/resources/libs/angularjs/angular-animate.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/resources/libs/angularjs/angular-aria.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/resources/libs/angularjs/angular-material.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/resources/libs/angularjs/angular-touch.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/resources/libs/jquery/purl.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/resources/libs/md-datepicker/angular-datepicker.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/resources/libs/md-datepicker/angular-clockpicker.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/Vtiger/js/application.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/Vtiger/js/Vtiger.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/Vtiger/js/Utils.js"><?php echo '</script'; ?>
>

				<?php echo '<script'; ?>
 type="text/javascript" src="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/resources/libs/moment/moment.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/resources/libs/moment/moment-timezone.min.js"><?php echo '</script'; ?>
>
				<?php echo '<script'; ?>
 type="text/javascript" src="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/resources/libs/angularjs/angular-material-datetimepicker/js/angular-material-datetimepicker.js"><?php echo '</script'; ?>
>

				<?php if ($_smarty_tpl->tpl_vars['_scripts']->value) {?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_scripts']->value, '_script');
$_smarty_tpl->tpl_vars['_script']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_script']->value) {
$_smarty_tpl->tpl_vars['_script']->do_else = false;
?>
				<?php echo '<script'; ?>
 type="text/javascript" src="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['_script']->value;?>
"><?php echo '</script'; ?>
>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php }?>
		
	</head>
	
		<body ng-controller="VtigerBodyController" ng-init="init();" ng-cloak md-theme="{{dynamicTheme}}" md-theme-watch>
	
<?php }
}
