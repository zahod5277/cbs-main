<?php 
/** Fenom template 'file:chunks/main/advantages.tpl' compiled at 2017-04-07 17:01:19 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?>    <div class="our-advantage">
        <div class="container">
            <div>
                <div class="blue module-title">
                    <h2>Ваши преимущества</h2>
                </div>
                <div class="custom">
                    <div class="our-advantage-inner">
                        <?php
/* file:chunks/main/advantages.tpl:12: {$_modx->runSnippet('getImageList',[
                            'tvname' => 'adv2',
                            'tpl' => 'mainAdv2.tpl'
                        ])} */
 echo $var["_modx"]->runSnippet('getImageList', array('tvname' => 'adv2', 'tpl' => 'mainAdv2.tpl')); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="our-advantage-videoblockf">
        <div class="container">
        </div>
    </div>
    <div class="our-advantage-threef">
        <div class="container">
        </div>
    </div><?php
}, array(
	'options' => 160,
	'provider' => 'file',
	'name' => 'file:chunks/main/advantages.tpl',
	'base_name' => 'chunks/main/advantages.tpl',
	'time' => 1491482635,
	'depends' => array (
  'file' => 
  array (
    'chunks/main/advantages.tpl' => 1491482635,
  ),
),
	'macros' => array(),

        ));
