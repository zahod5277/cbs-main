<?php /* Smarty version 3.1.27, created on 2017-04-07 16:46:58
         compiled from "/home/p/partneox/cbscg.ru/public_html/manager/templates/default/welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:97070786858e79852361cb9_10746742%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2ba2da12f0a3ee28fdf25077d5cd263a2492970' => 
    array (
      0 => '/home/p/partneox/cbscg.ru/public_html/manager/templates/default/welcome.tpl',
      1 => 1491482635,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97070786858e79852361cb9_10746742',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58e798523630f2_34804521',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58e798523630f2_34804521')) {
function content_58e798523630f2_34804521 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '97070786858e79852361cb9_10746742';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>