<?php 
/** Fenom template 'file:chunks/landingBlocks/childService/childServiceSideBar.tpl' compiled at 2017-04-07 17:26:43 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?><div class="col-xs-3 right-block">
    <?php
/* file:chunks/landingBlocks/childService/childServiceSideBar.tpl:5: {$_modx->runSnippet('getImageList',[
        'tvname' => 'bonus',
        'tpl' => 'bonus.row.tpl'
    ])} */
 echo $var["_modx"]->runSnippet('getImageList', array('tvname' => 'bonus', 'tpl' => 'bonus.row.tpl')); ?>
</div><?php
}, array(
	'options' => 160,
	'provider' => 'file',
	'name' => 'file:chunks/landingBlocks/childService/childServiceSideBar.tpl',
	'base_name' => 'chunks/landingBlocks/childService/childServiceSideBar.tpl',
	'time' => 1491482635,
	'depends' => array (
  'file' => 
  array (
    'chunks/landingBlocks/childService/childServiceSideBar.tpl' => 1491482635,
  ),
),
	'macros' => array(),

        ));
