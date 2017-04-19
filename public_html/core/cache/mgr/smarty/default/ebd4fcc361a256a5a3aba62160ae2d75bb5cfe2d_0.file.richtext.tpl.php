<?php /* Smarty version 3.1.27, created on 2017-04-07 16:27:03
         compiled from "/home/p/partneox/cbscg.ru/public_html/manager/templates/default/element/tv/renders/input/richtext.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:170010073858e793a7cf3b11_79683775%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebd4fcc361a256a5a3aba62160ae2d75bb5cfe2d' => 
    array (
      0 => '/home/p/partneox/cbscg.ru/public_html/manager/templates/default/element/tv/renders/input/richtext.tpl',
      1 => 1491482636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170010073858e793a7cf3b11_79683775',
  'variables' => 
  array (
    'tv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58e793a7cfb525_35802205',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58e793a7cfb525_35802205')) {
function content_58e793a7cfb525_35802205 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '170010073858e793a7cf3b11_79683775';
?>
<textarea id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" class="modx-richtext" onchange="MODx.fireResourceFormChange();"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->get('value'), ENT_QUOTES, 'UTF-8', true);?>
</textarea>

<?php echo '<script'; ?>
 type="text/javascript">

Ext.onReady(function() {
    
    MODx.makeDroppable(Ext.get('tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'));
    
});
<?php echo '</script'; ?>
><?php }
}
?>