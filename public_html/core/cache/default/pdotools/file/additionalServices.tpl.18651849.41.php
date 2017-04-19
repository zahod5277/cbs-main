<?php 
/** Fenom template 'file:chunks/landingBlocks/childService/additionalServices.tpl' compiled at 2017-04-08 06:16:40 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?><?php
/* file:chunks/landingBlocks/childService/additionalServices.tpl:16: {/switch} */
 $t430b73c0_1 = strval($var["_modx"]->resource["parent"]);
if($t430b73c0_1 == '3') {
?>
<?php
/* file:chunks/landingBlocks/childService/additionalServices.tpl:3: {var $service = 'аудиту'} */
 $var["service"]='аудиту'; ?>
<?php
} elseif($t430b73c0_1 == '4') {
?>
<?php
/* file:chunks/landingBlocks/childService/additionalServices.tpl:5: {var $service = 'консалтингу'} */
 $var["service"]='консалтингу'; ?>
<?php
} elseif($t430b73c0_1 == '48') {
?>
<?php
/* file:chunks/landingBlocks/childService/additionalServices.tpl:7: {var $service = 'бухгалтерскому обслуживанию'} */
 $var["service"]='бухгалтерскому обслуживанию'; ?>
<?php
} elseif($t430b73c0_1 == '5033') {
?>
<?php
/* file:chunks/landingBlocks/childService/additionalServices.tpl:9: {var $service = 'МСФО'} */
 $var["service"]='МСФО'; ?>    
<?php
} elseif($t430b73c0_1 == '5076') {
?>
<?php
/* file:chunks/landingBlocks/childService/additionalServices.tpl:11: {var $service = 'экспертизам'} */
 $var["service"]='экспертизам'; ?>
<?php
} elseif($t430b73c0_1 == '42') {
?>
<?php
/* file:chunks/landingBlocks/childService/additionalServices.tpl:13: {var $service = 'автоматизации'} */
 $var["service"]='автоматизации'; ?>
<?php
} elseif($t430b73c0_1 == '5036') {
?>
<?php
/* file:chunks/landingBlocks/childService/additionalServices.tpl:15: {var $service = 'оценке'} */
 $var["service"]='оценке'; ?>
<?php
} else {
?><?php
}
unset($t430b73c0_1) ?>
<div class="leo-outside-bottom" id="additionService">
    <div class="servBg">
        <div class="container">
            <div class=" _additiona_service mobile-wrap-full-width">
                <h2 class="blue module-title">Все услуги по <?php
/* file:chunks/landingBlocks/childService/additionalServices.tpl:21: {$service} */
 echo $var["service"]; ?></h2>
                <div class="custom_additiona_service mobile-wrap-full-width _ocenka_service">
                    <div>
                        <?php
/* file:chunks/landingBlocks/childService/additionalServices.tpl:34: {$_modx->runSnippet('pdoResources',[
                        'parents' => $_modx->resource.parent,
                        'depth' => 0,
                        'sortby' => 'menuindex',
                        'sortdir' => 'ASC',
                        'limit' => '12',
                        'where' => '{"template:=":"15"}',
                        'resources' => -$_modx->resource.id,
                        'totalVar' => 'totalus',
                        'tpl' => '@FILE:chunks/landingBlocks/tpl/additionalService.row.tpl'
                    ])} */
 echo $var["_modx"]->runSnippet('pdoResources', array('parents' => $var["_modx"]->resource["parent"], 'depth' => 0, 'sortby' => 'menuindex', 'sortdir' => 'ASC', 'limit' => '12', 'where' => '{"template:=":"15"}', 'resources' => -$var["_modx"]->resource["id"], 'totalVar' => 'totalus', 'tpl' => '@FILE:chunks/landingBlocks/tpl/additionalService.row.tpl')); ?>
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
	'name' => 'file:chunks/landingBlocks/childService/additionalServices.tpl',
	'base_name' => 'chunks/landingBlocks/childService/additionalServices.tpl',
	'time' => 1491482635,
	'depends' => array (
  'file' => 
  array (
    'chunks/landingBlocks/childService/additionalServices.tpl' => 1491482635,
  ),
),
	'macros' => array(),

        ));
