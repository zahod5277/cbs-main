<?php 
/** Fenom template 'file:chunks/main/mainslider.tpl' compiled at 2017-04-07 17:01:19 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?><div class="main-slider">
    <div class="container">
        <div class="custom">
            <div class="mainTitle RobotoBold">
                <h1>
                    <?php
/* file:chunks/main/mainslider.tpl:6: {$_modx->resource.landingTitle} */
 echo $var["_modx"]->resource["landingTitle"]; ?>
                </h1>
            </div>
            <div class="RobotoLight after-title white-line"><?php
/* file:chunks/main/mainslider.tpl:9: {$_modx->resource.landingSlogan} */
 echo $var["_modx"]->resource["landingSlogan"]; ?></div>
            <div class="RobotoLight after-title"><?php
/* file:chunks/main/mainslider.tpl:10: {$_modx->resource.landingDescr} */
 echo $var["_modx"]->resource["landingDescr"]; ?></div>
            <div class="service-list">
                <div class="row">
                    <?php
/* file:chunks/main/mainslider.tpl:16: {$_modx->runSnippet('getImageList',[
                        'tvname' => 'mainSliderServices',
                        'tpl' => 'mainSliderServices.tpl'
                    ])} */
 echo $var["_modx"]->runSnippet('getImageList', array('tvname' => 'mainSliderServices', 'tpl' => 'mainSliderServices.tpl')); ?>
                </div>
            </div>
            <div class="desc-slide-button">
                <?php
/* file:chunks/main/mainslider.tpl:20: {if $_modx->resource.landingFile!=''} */
 if($var["_modx"]->resource["landingFile"] != '') { ?>
                <div class="download-pdf">
                    <a class="block-inline" href="<?php
/* file:chunks/main/mainslider.tpl:22: {$_modx->resource.landingFile} */
 echo $var["_modx"]->resource["landingFile"]; ?>" target="_blank">
                        <span class="type-main-bnt">PDF</span> 
                        <span class="desc-main-bnt">Презентация компании</span>
                    </a>
                    <a class="slider-icon" data-target="#download-pdf" data-toggle="modal" href="#">
                        <img src="images/button-email.png" />
                    </a>
                </div>
                <?php
/* file:chunks/main/mainslider.tpl:30: {/if} */
 } ?>
                <div class="send-anceta">
                    <a class="block-inline" data-target="#fill-profile" data-toggle="modal" href="#">
                        <span class="type-main-bnt">
                            <img src="images/icon-doc.png" />
                        </span>
                        <span class="desc-main-bnt">Заполнить анкету</span>
                    </a>
                    <?php
/* file:chunks/main/mainslider.tpl:38: {if $_modx->resource.anketa!=''} */
 if($var["_modx"]->resource["anketa"] != '') { ?>
                    <a class="slider-icon" data-target="#send-anceta" data-toggle="modal" href="#">
                        <img src="images/button-email.png" />
                    <?php
/* file:chunks/main/mainslider.tpl:41: {/if} */
 } ?>
                    </a>
                </div>
            </div>
        </div>
        <?php
/* file:chunks/main/mainslider.tpl:46: {include 'file:chunks/landingBlocks/sendAnketa.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/landingBlocks/sendAnketa.tpl')->display($var); ?>
        <?php
/* file:chunks/main/mainslider.tpl:47: {include 'file:chunks/landingBlocks/sendPDF.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/landingBlocks/sendPDF.tpl')->display($var); ?>
        <?php
/* file:chunks/main/mainslider.tpl:48: {include 'file:chunks/landingBlocks/anketaForm.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/landingBlocks/anketaForm.tpl')->display($var); ?>
    </div>
</div><?php
}, array(
	'options' => 160,
	'provider' => 'file',
	'name' => 'file:chunks/main/mainslider.tpl',
	'base_name' => 'chunks/main/mainslider.tpl',
	'time' => 1491482635,
	'depends' => array (
  'file' => 
  array (
    'chunks/main/mainslider.tpl' => 1491482635,
  ),
),
	'macros' => array(),

        ));
