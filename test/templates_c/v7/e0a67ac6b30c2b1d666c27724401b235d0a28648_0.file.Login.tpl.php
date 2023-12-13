<?php
/* Smarty version 4.3.4, created on 2023-12-05 19:30:31
  from '/Users/yogapratama/Documents/Kerja/Lintas Media Danawa/vtigercrm/layouts/v7/modules/Mobile/simple/Users/Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_656f7a57c2e5f4_78215887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0a67ac6b30c2b1d666c27724401b235d0a28648' => 
    array (
      0 => '/Users/yogapratama/Documents/Kerja/Lintas Media Danawa/vtigercrm/layouts/v7/modules/Mobile/simple/Users/Login.tpl',
      1 => 1700618740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Header.tpl' => 1,
    'file:../Footer.tpl' => 1,
  ),
),false)) {
function content_656f7a57c2e5f4_78215887 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/yogapratama/Documents/Kerja/LintasMediaDanawa/vtigercrm/vendor/smarty/smarty/libs/plugins/modifier.explode.php','function'=>'smarty_modifier_explode',),));
$_smarty_tpl->_assignInScope('_scripts', smarty_modifier_explode(',','Users/Users.js'));?>

<?php $_smarty_tpl->_subTemplateRender("file:../Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('scripts'=>$_smarty_tpl->tpl_vars['_scripts']->value), 0, false);
?>


    <section ng-controller="UsersLoginController" layout="column" id="page">
        <md-content class="login-background">
            <div class="logo-container">
            
            <img src="../../<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_WEBPATH']->value;?>
/resources/images/vtiger_logo.svg" alt="Vtiger Logo"/>
            
            </div>
            <form name="loginForm" ng-submit="login()" class="login-form" ng-validate>
                <md-input-container  md-no-float class="md-hue-1">
                    <label for="username" >User name</label>
                    <input type="text" autoFilled="true" id="user-name" name="username" ng-model="auth.username" ng-required="true">
                    <div class="form-errors" ng-message="required" ng-show="loginForm.username.$invalid && loginForm.username.$touched">User Name required!</div>
                </md-input-container>
                <md-input-container class="md-hue-1">
                    <label for="password">Password</label>
                    <input type="password" autoFilled="true" id="password" name="password" ng-model="auth.password" ng-required="true">
                    <div class="form-errors" ng-message="required" ng-show="loginForm.password.$invalid && loginForm.password.$touched">Password required!</div>
                </md-input-container>
                <!--div ng-messages="loginForm.username.$error" class="form-errors"-->
                    
                    
                <!--/div-->
                <md-input-container>
                    <md-button class="md-raised" type="submit" value="Login">
                        Login
                    </md-button>
                </md-input-container>

                <a href="#" class="md-primary md-hue-1">Forgot password</a>
            </form>
        </md-content>
    </section>
	

<?php $_smarty_tpl->_subTemplateRender("file:../Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
