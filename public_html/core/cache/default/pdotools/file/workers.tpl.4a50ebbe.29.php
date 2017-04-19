<?php 
/** Fenom template 'file:chunks/landingBlocks/workers.tpl' compiled at 2017-04-07 16:55:16 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?><?php
/* file:chunks/landingBlocks/workers.tpl:1: {if $_modx->resource.workers!=''} */
 if($var["_modx"]->resource["workers"] != '') { ?>
<div class=" _specialist">
    <div class="blue module-title">
        <h2>Ключевые специалисты</h2>
    </div>
    <div class="custom_specialist">
        <?php
/* file:chunks/landingBlocks/workers.tpl:10: {$_modx->runSnippet('getImageList',[
            'tvname' => 'workers',
            'tpl' => 'worker.row.tpl'
        ])} */
 echo $var["_modx"]->runSnippet('getImageList', array('tvname' => 'workers', 'tpl' => 'worker.row.tpl')); ?>
    </div>
</div>
<?php
/* file:chunks/landingBlocks/workers.tpl:13: {/if} */
 } ?><?php
}, array(
	'options' => 160,
	'provider' => 'file',
	'name' => 'file:chunks/landingBlocks/workers.tpl',
	'base_name' => 'chunks/landingBlocks/workers.tpl',
	'time' => 1491482635,
	'depends' => array (
  'file' => 
  array (
    'chunks/landingBlocks/workers.tpl' => 1491482635,
  ),
),
	'macros' => array(),

        ));
