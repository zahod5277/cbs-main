<?php 
/** Fenom template 'file:templates/landing/main.tpl' compiled at 2017-04-07 17:01:19 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?><!doctype html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7 ie6 oldie" lang="ru" dir="ltr"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8 ie7 oldie" lang="ru" dir="ltr"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9 ie8 oldie" lang="ru" dir="ltr"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="ru" dir="ltr" prefix="og: http://ogp.me/ns#">
<!--<![endif]-->
<?php
/* file:templates/landing/main.tpl:8: {include 'file:chunks/common/head.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/common/head.tpl')->display($var); ?>
<body class="tmpl-index landingBody itemid-125 lang-ru com-k2 view-item layout-item task-none zoo-itemid-0 zoo-categoryid-0 device-ios-no device-android-no device-mobile-no device-table-no">
    <?php
/* file:templates/landing/main.tpl:10: {if $_modx->resource.slideImg!=''} */
 if($var["_modx"]->resource["slideImg"] != '') { ?>
        <?php
/* file:templates/landing/main.tpl:11: {var $img = $_modx->resource.slideImg} */
 $var["img"]=$var["_modx"]->resource["slideImg"]; ?>
        <?php
/* file:templates/landing/main.tpl:12: {else} */
 } else { ?>
        <?php
/* file:templates/landing/main.tpl:13: {var $img = '/images/full/slide3.jpg'} */
 $var["img"]='/images/full/slide3.jpg'; ?>
    <?php
/* file:templates/landing/main.tpl:14: {/if} */
 } ?>
    <header style="background: url('<?php
/* file:templates/landing/main.tpl:15: {$img} */
 echo $var["img"]; ?>') no-repeat center top;background-size: cover;">
        <?php
/* file:templates/landing/main.tpl:16: {include 'file:chunks/common/topmenu.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/common/topmenu.tpl')->display($var); ?>
        <?php
/* file:templates/landing/main.tpl:17: {include 'file:chunks/main/mainslider.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/main/mainslider.tpl')->display($var); ?>
    </header>
    <?php
/* file:templates/landing/main.tpl:19: {include 'file:chunks/main/services.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/main/services.tpl')->display($var); ?>
    <?php
/* file:templates/landing/main.tpl:20: {include 'file:chunks/main/advantages.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/main/advantages.tpl')->display($var); ?>
    <?php
/* file:templates/landing/main.tpl:21: {include 'file:chunks/main/facts.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/main/facts.tpl')->display($var); ?>
    <?php
/* file:templates/landing/main.tpl:22: {include 'file:chunks/main/trust.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/main/trust.tpl')->display($var); ?>
    <?php
/* file:templates/landing/main.tpl:23: {include 'file:chunks/main/reviews.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/main/reviews.tpl')->display($var); ?>
    <?php
/* file:templates/landing/main.tpl:24: {include 'file:chunks/main/infocenter.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/main/infocenter.tpl')->display($var); ?>
    <?php
/* file:templates/landing/main.tpl:25: {include 'file:chunks/main/newsSubscribe.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/main/newsSubscribe.tpl')->display($var); ?>
    <?php
/* file:templates/landing/main.tpl:26: {include 'file:chunks/landingBlocks/anyQuestions.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/landingBlocks/anyQuestions.tpl')->display($var); ?>
    <?php
/* file:templates/landing/main.tpl:27: {include 'file:chunks/common/footer.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/common/footer.tpl')->display($var); ?>
    <?php
/* file:templates/landing/main.tpl:28: {include 'file:chunks/common/weCallYou.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/common/weCallYou.tpl')->display($var); ?>
    <?php
/* file:templates/landing/main.tpl:29: {include 'file:chunks/common/jivoSite.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/common/jivoSite.tpl')->display($var); ?>
</body>
</html><?php
}, array(
	'options' => 160,
	'provider' => 'file',
	'name' => 'file:templates/landing/main.tpl',
	'base_name' => 'templates/landing/main.tpl',
	'time' => 1491482635,
	'depends' => array (
  'file' => 
  array (
    'templates/landing/main.tpl' => 1491482635,
  ),
),
	'macros' => array(),

        ));
