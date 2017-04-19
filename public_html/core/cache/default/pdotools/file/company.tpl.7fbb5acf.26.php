<?php 
/** Fenom template 'file:templates/landing/company.tpl' compiled at 2017-04-07 17:13:16 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?><!doctype html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7 ie6 oldie" lang="ru" dir="ltr"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8 ie7 oldie" lang="ru" dir="ltr"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9 ie8 oldie" lang="ru" dir="ltr"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" xmlns="http://www.w3.org/1999/xhtml" lang="ru" dir="ltr" prefix="og: http://ogp.me/ns#">
<!--<![endif]-->
<?php
/* file:templates/landing/company.tpl:8: {include 'file:chunks/common/head.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/common/head.tpl')->display($var); ?>
<body class="tmpl-index landingBody itemid-101 lang-ru com-k2 view-item layout-item task-none zoo-itemid-0 zoo-categoryid-0 device-ios-no device-android-no device-mobile-no device-table-no">        
    <?php
/* file:templates/landing/company.tpl:10: {if $_modx->resource.slideImg !=''} */
 if($var["_modx"]->resource["slideImg"] != '') { ?>
        <?php
/* file:templates/landing/company.tpl:11: {var $style = $_modx->resource.slideImg} */
 $var["style"]=$var["_modx"]->resource["slideImg"]; ?>
        <?php
/* file:templates/landing/company.tpl:12: {else} */
 } else { ?>
        <?php
/* file:templates/landing/company.tpl:13: {var $style = '/images/full/slide2.jpg'} */
 $var["style"]='/images/full/slide2.jpg'; ?>
    <?php
/* file:templates/landing/company.tpl:14: {/if} */
 } ?>
    <header style="background: url('<?php
/* file:templates/landing/company.tpl:15: {$style} */
 echo $var["style"]; ?>') no-repeat center top;background-size: cover;">
        <?php
/* file:templates/landing/company.tpl:16: {include 'file:chunks/common/topmenu.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/common/topmenu.tpl')->display($var); ?>
        <?php
/* file:templates/landing/company.tpl:17: {include 'file:chunks/company/slider.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/company/slider.tpl')->display($var); ?>
    </header>
    <?php
/* file:templates/landing/company.tpl:19: {include 'file:chunks/common/breadcrumbs.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/common/breadcrumbs.tpl')->display($var); ?>
    <?php
/* file:templates/landing/company.tpl:20: {include 'file:chunks/company/about.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/company/about.tpl')->display($var); ?>
    <?php
/* file:templates/landing/company.tpl:21: {include 'file:chunks/company/adv.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/company/adv.tpl')->display($var); ?>
    <?php
/* file:templates/landing/company.tpl:22: {include 'file:chunks/company/workers.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/company/workers.tpl')->display($var); ?>
    <div class="container">
    </div>
    <div class="leo-outside-bottom">
        <div class="container">
            <?php
/* file:templates/landing/company.tpl:27: {include 'file:chunks/company/keys.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/company/keys.tpl')->display($var); ?>
            <?php
/* file:templates/landing/company.tpl:28: {include 'file:chunks/company/reviews.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/company/reviews.tpl')->display($var); ?>
        </div>
    </div>
    <?php
/* file:templates/landing/company.tpl:31: {include 'file:chunks/landingBlocks/anyQuestions.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/landingBlocks/anyQuestions.tpl')->display($var); ?>    
    <?php
/* file:templates/landing/company.tpl:32: {include 'file:chunks/common/footer.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/common/footer.tpl')->display($var); ?>
    <?php
/* file:templates/landing/company.tpl:33: {include 'file:chunks/common/weCallYou.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/common/weCallYou.tpl')->display($var); ?>
    <?php
/* file:templates/landing/company.tpl:34: {include 'file:chunks/common/jivoSite.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/common/jivoSite.tpl')->display($var); ?>
    
    <script>
        function goToByScroll(id){
            // Remove "link" from the ID
          id = id.replace("link", "");
            // Scroll
          $('html,body').animate({
              scrollTop: $(id).offset().top-70},
              'slow');
         }
         $('.about-compane-yellow-icons a').on('click',function(e){
            e.preventDefault(); 
            // Call the scroll function
            goToByScroll($(this).attr('href')); 
         });
        //$('.about-compane-yellow-icons a').smoothScroll({
         // speed:1000,
        //});
    </script>
    
</body>

</html><?php
}, array(
	'options' => 160,
	'provider' => 'file',
	'name' => 'file:templates/landing/company.tpl',
	'base_name' => 'templates/landing/company.tpl',
	'time' => 1491482635,
	'depends' => array (
  'file' => 
  array (
    'templates/landing/company.tpl' => 1491482635,
  ),
),
	'macros' => array(),

        ));
