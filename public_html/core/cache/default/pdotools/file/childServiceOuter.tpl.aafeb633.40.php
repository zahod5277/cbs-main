<?php 
/** Fenom template 'file:chunks/landingBlocks/childService/childServiceOuter.tpl' compiled at 2017-04-07 17:26:43 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?><div class="container">
    <div class=" _exteded_text_block">
        <div class="custom_exteded_text_block">
            <div class="row">
                <div class="col-xs-9 childSrviceOuter">
                    <div class="module-title blue">
                        <h2>
                            <?php
/* file:chunks/landingBlocks/childService/childServiceOuter.tpl:8: {$_modx->resource.pagetitle} */
 echo $var["_modx"]->resource["pagetitle"]; ?>
                        </h2>
                    </div>
                    <?php
/* file:chunks/landingBlocks/childService/childServiceOuter.tpl:11: {$_modx->resource.content} */
 echo $var["_modx"]->resource["content"]; ?>
                </div>
                <?php
/* file:chunks/landingBlocks/childService/childServiceOuter.tpl:13: {include 'file:chunks/landingBlocks/childService/childServiceSideBar.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/landingBlocks/childService/childServiceSideBar.tpl')->display($var); ?>
            </div>
        </div>
    </div>
    <div class="mb40px">
        <?php
/* file:chunks/landingBlocks/childService/childServiceOuter.tpl:18: {include 'file:chunks/landingBlocks/consultForm.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/landingBlocks/consultForm.tpl')->display($var); ?>
    </div>
</div><?php
}, array(
	'options' => 160,
	'provider' => 'file',
	'name' => 'file:chunks/landingBlocks/childService/childServiceOuter.tpl',
	'base_name' => 'chunks/landingBlocks/childService/childServiceOuter.tpl',
	'time' => 1491482635,
	'depends' => array (
  'file' => 
  array (
    'chunks/landingBlocks/childService/childServiceOuter.tpl' => 1491482635,
  ),
),
	'macros' => array(),

        ));
