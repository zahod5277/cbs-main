<?php 
/** Fenom template 'file:chunks/landingBlocks/adv2.tpl' compiled at 2017-04-07 16:55:16 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?><?php
/* file:chunks/landingBlocks/adv2.tpl:1: {if $_modx->resource.adv2!=''} */
 if($var["_modx"]->resource["adv2"] != '') { ?>
    <div class="our-advantage-threef">
        <div class="our-advantage-threef_inner">
            <div class="container">
                <div class="blue module-title">
                    <h2>Ваши преимущества</h2>
                </div>
                <div class="our-advantage-inner">
                    <?php
/* file:chunks/landingBlocks/adv2.tpl:12: {$_modx->runSnippet('getImageList',[
                        'tvname' => 'adv2',
                        'tpl' => 'adv2.row.tpl'
                    ])} */
 echo $var["_modx"]->runSnippet('getImageList', array('tvname' => 'adv2', 'tpl' => 'adv2.row.tpl')); ?>
                </div>
            </div>
        </div>
    </div>
<?php
/* file:chunks/landingBlocks/adv2.tpl:17: {/if} */
 } ?><?php
}, array(
	'options' => 160,
	'provider' => 'file',
	'name' => 'file:chunks/landingBlocks/adv2.tpl',
	'base_name' => 'chunks/landingBlocks/adv2.tpl',
	'time' => 1491482635,
	'depends' => array (
  'file' => 
  array (
    'chunks/landingBlocks/adv2.tpl' => 1491482635,
  ),
),
	'macros' => array(),

        ));
