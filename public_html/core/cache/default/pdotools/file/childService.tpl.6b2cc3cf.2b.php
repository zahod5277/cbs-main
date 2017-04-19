<?php 
/** Fenom template 'file:templates/landing/childService.tpl' compiled at 2017-04-07 17:26:43 */
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
/* file:templates/landing/childService.tpl:3: {include 'file:chunks/common/breadcrumbs.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/common/breadcrumbs.tpl')->display($var); ?>
    
    

    
    <?php
/* file:templates/landing/childService.tpl:9: {include 'file:chunks/landingBlocks/childService/childServiceOuter.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/landingBlocks/childService/childServiceOuter.tpl')->display($var); ?>
        <?php
/* file:templates/landing/childService.tpl:10: {include 'file:chunks/landingBlocks/companyRecords.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/landingBlocks/companyRecords.tpl')->display($var); ?>
        <?php
/* file:templates/landing/childService.tpl:11: {if $_modx->resource.companyRecords!=''} */
 if($var["_modx"]->resource["companyRecords"] != '') { ?>
        <div class="container mb40px childSrviceForm">
            <?php
/* file:templates/landing/childService.tpl:13: {include 'file:chunks/landingBlocks/consultForm.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/landingBlocks/consultForm.tpl')->display($var); ?>
        </div>
        <?php
/* file:templates/landing/childService.tpl:15: {/if} */
 } ?>
        <?php
/* file:templates/landing/childService.tpl:16: {include 'file:chunks/landingBlocks/reviewsAndKeys.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/landingBlocks/reviewsAndKeys.tpl')->display($var); ?>
        <?php
/* file:templates/landing/childService.tpl:17: {if $_modx->resource.addServiceToggler=='Да'} */
 if($var["_modx"]->resource["addServiceToggler"] == 'Да') { ?>
        <?php
/* file:templates/landing/childService.tpl:18: {include 'file:chunks/landingBlocks/childService/additionalServices.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/landingBlocks/childService/additionalServices.tpl')->display($var); ?>
        <?php
/* file:templates/landing/childService.tpl:19: {include 'file:chunks/landingBlocks/anyQuestions.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/landingBlocks/anyQuestions.tpl')->display($var); ?>
        <?php
/* file:templates/landing/childService.tpl:20: {/if} */
 } ?>
        <?php
/* file:templates/landing/childService.tpl:21: {include 'file:chunks/common/footer.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/common/footer.tpl')->display($var); ?>
        <?php
/* file:templates/landing/childService.tpl:22: {include 'file:chunks/common/weCallYou.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/common/weCallYou.tpl')->display($var); ?>
        <?php
/* file:templates/landing/childService.tpl:23: {include 'file:chunks/common/jivoSite.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/common/jivoSite.tpl')->display($var); ?>

</body>
</html><?php
}, array(
	'options' => 160,
	'provider' => 'file',
	'name' => 'file:templates/landing/childService.tpl',
	'base_name' => 'templates/landing/childService.tpl',
	'time' => 1491482635,
	'depends' => array (
  'file' => 
  array (
    'templates/landing.tpl' => 1491482635,
    'templates/landing/childService.tpl' => 1491482635,
  ),
),
	'macros' => array(),

        ));
