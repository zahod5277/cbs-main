<?php 
/** Fenom template 'file:chunks/common/breadcrumbs.tpl' compiled at 2017-04-07 16:55:15 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?><div class="breadcrumbs hidden-print">
    <div class="container">
        <div id="k2ModuleBox146" class="k2BreadcrumbsBlock inner_ leo_breadcrumbs">
            <div class="row">
                <div class="col-xs-9">
                    <?php
/* file:chunks/common/breadcrumbs.tpl:12: {$_modx->runSnippet('pdoCrumbs',[
                       'showHome' => 1,
                        'tplWrapper' => '@INLINE {$output}',
                        'tpl' => '@INLINE <a href="{$link}">{$pagetitle}</a>',
                        'tplCurrent' => '@INLINE {if $pagetitle=="Контакты"}<a href="{$link}">{$pagetitle}</a>{else}<span class="blueBreadcrumb">{$pagetitle}</span>{/if}'
                        'outputSeparator' => '<span class="bcSeparator">/</span>'
                    ])} */
 echo $var["_modx"]->runSnippet('pdoCrumbs', array('showHome' => 1, 'tplWrapper' => '@INLINE {$output}', 'tpl' => '@INLINE <a href="{$link}">{$pagetitle}</a>', 'tplCurrent' => '@INLINE {if $pagetitle=="Контакты"}<a href="{$link}">{$pagetitle}</a>{else}<span class="blueBreadcrumb">{$pagetitle}</span>{/if}', 'outputSeparator' => '<span class="bcSeparator">/</span>')); ?>
                </div>
            </div>
        </div>
    </div>
</div><?php
}, array(
	'options' => 160,
	'provider' => 'file',
	'name' => 'file:chunks/common/breadcrumbs.tpl',
	'base_name' => 'chunks/common/breadcrumbs.tpl',
	'time' => 1491482635,
	'depends' => array (
  'file' => 
  array (
    'chunks/common/breadcrumbs.tpl' => 1491482635,
  ),
),
	'macros' => array(),

        ));
