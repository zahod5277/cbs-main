<?php /* Smarty version 3.1.27, created on 2017-04-07 16:27:03
         compiled from "/home/p/partneox/cbscg.ru/public_html/manager/templates/default/element/tv/renders/input/file.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:213554559058e793a7ab6da0_76495911%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1c1f5d32af6939451866ee6edf3504fbcb879d5' => 
    array (
      0 => '/home/p/partneox/cbscg.ru/public_html/manager/templates/default/element/tv/renders/input/file.tpl',
      1 => 1491482636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213554559058e793a7ab6da0_76495911',
  'variables' => 
  array (
    'tv' => 0,
    'disabled' => 0,
    'params' => 0,
    'source' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58e793a7acc644_43732246',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58e793a7acc644_43732246')) {
function content_58e793a7acc644_43732246 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/p/partneox/cbscg.ru/public_html/core/model/smarty/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '213554559058e793a7ab6da0_76495911';
?>
<div id="tvpanel<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
"></div>

<?php if ($_smarty_tpl->tpl_vars['disabled']->value) {?>
<?php echo '<script'; ?>
 type="text/javascript">
// <![CDATA[

Ext.onReady(function() {
    var fld<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
 = MODx.load({
    
        xtype: 'displayfield'
        ,tv: '<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,renderTo: 'tvpanel<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,value: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->value, ENT_QUOTES, 'UTF-8', true);?>
'
        ,width: 400
        ,msgTarget: 'under'
    
    });
});

// ]]>
<?php echo '</script'; ?>
>
<?php } else { ?>
<?php echo '<script'; ?>
 type="text/javascript">
// <![CDATA[

Ext.onReady(function() {
    var fld<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
 = MODx.load({
    
        xtype: 'modx-panel-tv-file'
        ,renderTo: 'tvpanel<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,tv: '<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,value: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->value, ENT_QUOTES, 'UTF-8', true);?>
'
        ,relativeValue: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->value, ENT_QUOTES, 'UTF-8', true);?>
'
        ,width: 400
        ,msgTarget: 'under'
        ,allowBlank: <?php if ($_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 1 || $_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 'true') {?>true<?php } else { ?>false<?php }?>
        ,source: '<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
'

        <?php if ($_smarty_tpl->tpl_vars['params']->value['allowedFileTypes']) {?>,allowedFileTypes: '<?php echo $_smarty_tpl->tpl_vars['params']->value['allowedFileTypes'];?>
'<?php }?>
        ,wctx: '<?php if ($_smarty_tpl->tpl_vars['params']->value['wctx']) {
echo $_smarty_tpl->tpl_vars['params']->value['wctx'];
} else { ?>web<?php }?>'
        <?php if ($_smarty_tpl->tpl_vars['params']->value['openTo']) {?>,openTo: '<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['params']->value['openTo'],"'","\\'");?>
'<?php }?>

    
        ,listeners: { 'select': { fn:MODx.fireResourceFormChange, scope:this}}
    });
    MODx.makeDroppable(Ext.get('tvpanel<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'),function(v) {
        var cb = Ext.getCmp('tvbrowser<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
');
        if (cb) {
            cb.setValue(v);
            cb.fireEvent('select',{relativeUrl:v});
        }
        return '';
    });
});

// ]]>
<?php echo '</script'; ?>
>
<?php }

}
}
?>