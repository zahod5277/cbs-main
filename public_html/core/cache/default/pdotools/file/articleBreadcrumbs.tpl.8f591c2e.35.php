<?php 
/** Fenom template 'file:chunks/infocenter/new/articleBreadcrumbs.tpl' compiled at 2017-04-07 16:56:28 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?><div class="breadcrumbs hidden-print">
    <div class="container">
        <div id="k2ModuleBox146" class="infocenterBreadcrumb">
            <div class="row">
                <div class="col-xs-9 infocenterBreadcrumbCrumbs">
                    <?php
/* file:chunks/infocenter/new/articleBreadcrumbs.tpl:12: {$_modx->runSnippet('pdoCrumbs',[
                       'showHome' => 1,
                        'tplWrapper' => '@INLINE {$output}',
                        'tpl' => '@INLINE <a href="{$link}">{$pagetitle}</a>',
                        'tplCurrent' => '@INLINE <a href="{$link}">{$pagetitle}</a>',
                        'outputSeparator' => '<span class="bcSeparator">/</span>'
                    ])} */
 echo $var["_modx"]->runSnippet('pdoCrumbs', array('showHome' => 1, 'tplWrapper' => '@INLINE {$output}', 'tpl' => '@INLINE <a href="{$link}">{$pagetitle}</a>', 'tplCurrent' => '@INLINE <a href="{$link}">{$pagetitle}</a>', 'outputSeparator' => '<span class="bcSeparator">/</span>')); ?>
                </div>
                <div class="col-xs-3 breadcrumbs-link">
                    <a href="<?php
/* file:chunks/infocenter/new/articleBreadcrumbs.tpl:15: {$_modx->makeUrl(5116)} */
 echo $var["_modx"]->makeUrl(5116); ?>"><i class="zoomIco"></i><span>Найти еще публикации</span></a>
                </div>
            </div>
        </div>
    </div>
</div><?php
}, array(
	'options' => 160,
	'provider' => 'file',
	'name' => 'file:chunks/infocenter/new/articleBreadcrumbs.tpl',
	'base_name' => 'chunks/infocenter/new/articleBreadcrumbs.tpl',
	'time' => 1491482635,
	'depends' => array (
  'file' => 
  array (
    'chunks/infocenter/new/articleBreadcrumbs.tpl' => 1491482635,
  ),
),
	'macros' => array(),

        ));
