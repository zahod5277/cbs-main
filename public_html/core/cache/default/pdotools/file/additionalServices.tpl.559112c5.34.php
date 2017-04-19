<?php 
/** Fenom template 'file:chunks/landingBlocks/additionalServices.tpl' compiled at 2017-04-07 16:55:16 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?><div class="leo-outside-bottom" id="additionService">
    <div class="servBg">
        <div class="container">
            <div class=" _additiona_service mobile-wrap-full-width _ocenka_service">
                <div class="blue module-title">
                    <h2>Дополнительные услуги</h2>
                </div>
                <div class="custom_additiona_service mobile-wrap-full-width _ocenka_service">
                    <div>
                        <?php
/* file:chunks/landingBlocks/additionalServices.tpl:18: {$_modx->runSnippet('pdoResources',[
                        'parents' => $_modx->resource.id,
                        'hideContainers' => 1,
                        'limit' => 0,
                        'depth' => 0,
                        'resources' => -$_modx->resource.id,
                        'totalVar' => 'totalus',
                        'tpl' => '@FILE:chunks/landingBlocks/tpl/additionalService.row.tpl'
                    ])} */
 echo $var["_modx"]->runSnippet('pdoResources', array('parents' => $var["_modx"]->resource["id"], 'hideContainers' => 1, 'limit' => 0, 'depth' => 0, 'resources' => -$var["_modx"]->resource["id"], 'totalVar' => 'totalus', 'tpl' => '@FILE:chunks/landingBlocks/tpl/additionalService.row.tpl')); ?>
                    </div>
                    <div>
                        <button class="upper-case leo-button-block addServiceBtn" data-target="#phone-question" data-toggle="modal" type="button">
                            Узнайте можем ли мы решить Вашу задачу
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php
}, array(
	'options' => 160,
	'provider' => 'file',
	'name' => 'file:chunks/landingBlocks/additionalServices.tpl',
	'base_name' => 'chunks/landingBlocks/additionalServices.tpl',
	'time' => 1491482635,
	'depends' => array (
  'file' => 
  array (
    'chunks/landingBlocks/additionalServices.tpl' => 1491482635,
  ),
),
	'macros' => array(),

        ));
