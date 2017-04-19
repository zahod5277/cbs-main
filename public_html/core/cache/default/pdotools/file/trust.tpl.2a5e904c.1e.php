<?php 
/** Fenom template 'file:chunks/main/trust.tpl' compiled at 2017-04-07 17:01:19 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?><?php
/* file:chunks/main/trust.tpl:1: {if $_modx->resource.trust!=''} */
 if($var["_modx"]->resource["trust"] != '') { ?>
<?php
/* file:chunks/main/trust.tpl:7: {$_modx->runSnippet('getImageList',[
        'tvname' => 'trust',
        'docid' => 1,
        'tpl' => 'trust.row.tpl',
        'wrapperTpl' => 'trust.wrapper.tpl'
    ])} */
 echo $var["_modx"]->runSnippet('getImageList', array('tvname' => 'trust', 'docid' => 1, 'tpl' => 'trust.row.tpl', 'wrapperTpl' => 'trust.wrapper.tpl')); ?>
<?php
/* file:chunks/main/trust.tpl:8: {/if} */
 } ?><?php
}, array(
	'options' => 160,
	'provider' => 'file',
	'name' => 'file:chunks/main/trust.tpl',
	'base_name' => 'chunks/main/trust.tpl',
	'time' => 1491482635,
	'depends' => array (
  'file' => 
  array (
    'chunks/main/trust.tpl' => 1491482635,
  ),
),
	'macros' => array(),

        ));
