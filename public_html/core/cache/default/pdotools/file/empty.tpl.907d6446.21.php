<?php 
/** Fenom template 'file:templates/info/empty.tpl' compiled at 2017-04-08 02:39:06 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?><!doctype html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7 ie6 oldie" lang="ru" dir="ltr"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8 ie7 oldie" lang="ru" dir="ltr"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9 ie8 oldie" lang="ru" dir="ltr"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="ru" dir="ltr" prefix="og: http://ogp.me/ns#">
<!--<![endif]-->

    <?php
/* file:templates/base.tpl:9: {include 'file:chunks/common/head.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/common/head.tpl')->display($var); ?>

<body class="tmpl-index itemid-125 menuBody lang-ru com-k2 view-item layout-item task-none zoo-itemid-0 zoo-categoryid-0 device-ios-no device-android-no device-mobile-no device-table-no">
    
    <header>
        <?php
/* file:templates/info/empty.tpl:4: {include 'file:chunks/infocenter/new/topmenu.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/infocenter/new/topmenu.tpl')->display($var); ?>
    </header>

    
    <div class="container outside-component">
        <div id="k2Container" class="itemListView  genericView">
            <?php
/* file:templates/info/empty.tpl:10: {$_modx->resource.content} */
 echo $var["_modx"]->resource["content"]; ?>
        </div>
    </div>
    <?php
/* file:templates/info/empty.tpl:13: {include 'file:chunks/common/footer.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/common/footer.tpl')->display($var); ?>
    <?php
/* file:templates/info/empty.tpl:14: {include 'file:chunks/common/weCallYou.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/common/weCallYou.tpl')->display($var); ?>
    <?php
/* file:templates/info/empty.tpl:15: {include 'file:chunks/common/jivoSite.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/common/jivoSite.tpl')->display($var); ?>

</body>

<script>
    $('.itemPrintLink, .underContentPrintBtn').on('click', function(){ 
       window.print();
       void 0;
     });
    $('.ratingStars').on('click', '.itemRatingList a', function(){ 
        var id = $(this).data('id'),
            point = $(this).data('star'),
            parent = $(this).parents('.ratingStars');
            action = $(this).data('action');
             $.post('ajax.php', { action: action, id:id, point:point }, function(data) { 
		var data = JSON.parse(data);
                if (data.status=='success'){ 
                    $(parent).html(data.html);
                    alert('Спасибо! Ваш голос учтен');
                 } else {
                   alert(data.html);
            }
	});
        return false;
        
    })
</script>

</html><?php
}, array(
	'options' => 160,
	'provider' => 'file',
	'name' => 'file:templates/info/empty.tpl',
	'base_name' => 'templates/info/empty.tpl',
	'time' => 1491482635,
	'depends' => array (
  'file' => 
  array (
    'templates/base.tpl' => 1491482635,
    'templates/info/empty.tpl' => 1491482635,
  ),
),
	'macros' => array(),

        ));
