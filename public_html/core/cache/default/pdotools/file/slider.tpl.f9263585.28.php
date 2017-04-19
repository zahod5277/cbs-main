<?php 
/** Fenom template 'file:chunks/landingBlocks/slider.tpl' compiled at 2017-04-07 16:55:15 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?><div class="main-slider">
    <div class="container">
        <div class="custom">
            <div class="mainTitle RobotoBold">
                <h1>
                   <?php
/* file:chunks/landingBlocks/slider.tpl:6: {$_modx->resource.landingTitle} */
 echo $var["_modx"]->resource["landingTitle"]; ?>
                </h1>
            </div>
            <div class="RobotoLight after-title white-line">
                <?php
/* file:chunks/landingBlocks/slider.tpl:10: {$_modx->resource.landingSlogan} */
 echo $var["_modx"]->resource["landingSlogan"]; ?>
            </div>
            <div class="RobotoLight after-title">
                <?php
/* file:chunks/landingBlocks/slider.tpl:13: {$_modx->resource.landingDescr} */
 echo $var["_modx"]->resource["landingDescr"]; ?>
            </div>
            <?php
/* file:chunks/landingBlocks/slider.tpl:15: {include 'file:chunks/landingBlocks/sliderForm.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/landingBlocks/sliderForm.tpl')->display($var); ?>
            <div class="get-presentation">
                <a href="<?php
/* file:chunks/landingBlocks/slider.tpl:17: {$_modx->resource.landingFile} */
 echo $var["_modx"]->resource["landingFile"]; ?>" target="_blank">Скачать краткую презентацию</a> 
                <a data-target="#fill-profile" data-toggle="modal" href="#">Заполнить анкету онлайн</a>
            </div>
            <div class="get-more">
                <div>
                    <?php
/* file:chunks/landingBlocks/slider.tpl:22: {$_modx->resource.formTrigger} */
 echo $var["_modx"]->resource["formTrigger"]; ?>
                </div>
            </div>
        </div>
        <?php
/* file:chunks/landingBlocks/slider.tpl:26: {include 'file:chunks/landingBlocks/sendAnketa.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/landingBlocks/sendAnketa.tpl')->display($var); ?>
        <?php
/* file:chunks/landingBlocks/slider.tpl:27: {include 'file:chunks/landingBlocks/sendPDF.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/landingBlocks/sendPDF.tpl')->display($var); ?>
        <?php
/* file:chunks/landingBlocks/slider.tpl:28: {include 'file:chunks/landingBlocks/anketaForm.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/landingBlocks/anketaForm.tpl')->display($var); ?>
    </div>
</div>
<!-- END SLIDER BLOCK --><?php
}, array(
	'options' => 160,
	'provider' => 'file',
	'name' => 'file:chunks/landingBlocks/slider.tpl',
	'base_name' => 'chunks/landingBlocks/slider.tpl',
	'time' => 1491482635,
	'depends' => array (
  'file' => 
  array (
    'chunks/landingBlocks/slider.tpl' => 1491482635,
  ),
),
	'macros' => array(),

        ));
