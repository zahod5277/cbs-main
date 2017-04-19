<?php 
/** Fenom template 'file:templates/landing/indepEval.tpl' compiled at 2017-04-07 18:39:54 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?>
<!doctype html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7 ie6 oldie" lang="ru" dir="ltr"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8 ie7 oldie" lang="ru" dir="ltr"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9 ie8 oldie" lang="ru" dir="ltr"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" xmlns="http://www.w3.org/1999/xhtml" lang="ru" dir="ltr" prefix="og: http://ogp.me/ns#">
<!--<![endif]-->
<?php
/* file:templates/landing.tpl:9: {include 'file:chunks/common/head.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/common/head.tpl')->display($var); ?>

<body class="tmpl-index landingBody lang-ru com-k2 view-item layout-item task-none zoo-itemid-0 zoo-categoryid-0 device-ios-no device-android-no device-mobile-no device-table-no">
    
    <?php
/* file:templates/landing.tpl:13: {if $_modx->resource.slideImg !=''} */
 if($var["_modx"]->resource["slideImg"] != '') { ?>
        <?php
/* file:templates/landing.tpl:14: {var $style = $_modx->resource.slideImg} */
 $var["style"]=$var["_modx"]->resource["slideImg"]; ?>
        <?php
/* file:templates/landing.tpl:15: {else} */
 } else { ?>
        <?php
/* file:templates/landing.tpl:16: {var $style = '/images/full/slide12.jpg'} */
 $var["style"]='/images/full/slide12.jpg'; ?>
    <?php
/* file:templates/landing.tpl:17: {/if} */
 } ?>
    <header style="background: url('<?php
/* file:templates/landing.tpl:18: {$style} */
 echo $var["style"]; ?>') no-repeat center top;background-size: cover;">
        <?php
/* file:templates/landing.tpl:19: {include 'file:chunks/common/topmenu.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/common/topmenu.tpl')->display($var); ?>
        <?php
/* file:templates/landing.tpl:20: {include 'file:chunks/landingBlocks/slider.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/landingBlocks/slider.tpl')->display($var); ?>
    </header>
    
    
    <?php
/* file:templates/landing.tpl:24: {include 'file:chunks/common/breadcrumbs.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/common/breadcrumbs.tpl')->display($var); ?>
        
            <?php
/* file:templates/landing.tpl:26: {include 'file:chunks/landingBlocks/adv.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/landingBlocks/adv.tpl')->display($var); ?>
        
    <?php
/* file:templates/landing.tpl:28: {include 'file:chunks/landingBlocks/video.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/landingBlocks/video.tpl')->display($var); ?>
    <?php
/* file:templates/landing.tpl:29: {include 'file:chunks/landingBlocks/adv2.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/landingBlocks/adv2.tpl')->display($var); ?>
    
    
    <div class="our-facts-outer">
        <div class="container">
        </div>
    </div>
    <div class="container">
        <?php
/* file:templates/landing.tpl:37: {include 'file:chunks/landingBlocks/consultForm.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/landingBlocks/consultForm.tpl')->display($var); ?>
        <?php
/* file:templates/landing.tpl:38: {include 'file:chunks/landingBlocks/workers.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/landingBlocks/workers.tpl')->display($var); ?>
    </div>
    <?php
/* file:templates/landing.tpl:40: {include 'file:chunks/landingBlocks/reviewsAndKeys.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/landingBlocks/reviewsAndKeys.tpl')->display($var); ?>
    <?php
/* file:templates/landing.tpl:41: {include 'file:chunks/landingBlocks/companyRecords.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/landingBlocks/companyRecords.tpl')->display($var); ?>
    <?php
/* file:templates/landing.tpl:42: {include 'file:chunks/landingBlocks/additionalServices.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/landingBlocks/additionalServices.tpl')->display($var); ?>
    <?php
/* file:templates/landing.tpl:43: {include 'file:chunks/landingBlocks/anyQuestions.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/landingBlocks/anyQuestions.tpl')->display($var); ?>
    <?php
/* file:templates/landing.tpl:44: {include 'file:chunks/common/footer.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/common/footer.tpl')->display($var); ?>
    <?php
/* file:templates/landing.tpl:45: {include 'file:chunks/common/weCallYou.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/common/weCallYou.tpl')->display($var); ?>
    <?php
/* file:templates/landing.tpl:46: {include 'file:chunks/common/jivoSite.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/common/jivoSite.tpl')->display($var); ?>
    
</body>
</html><?php
}, array(
	'options' => 160,
	'provider' => 'file',
	'name' => 'file:templates/landing/indepEval.tpl',
	'base_name' => 'templates/landing/indepEval.tpl',
	'time' => 1491482635,
	'depends' => array (
  'file' => 
  array (
    'templates/landing.tpl' => 1491482635,
    'templates/landing/indepEval.tpl' => 1491482635,
  ),
),
	'macros' => array(),

        ));
