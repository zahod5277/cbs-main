<?php 
/** Fenom template 'file:chunks/main/services.tpl' compiled at 2017-04-07 17:01:19 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?><div class="container">
    <div class="">
        <div class="blue module-title">
            <h2>Услуги компании</h2>
        </div>
        <div class="custom">
            <div class="our-services">
                <div class="row">
                    <?php
/* file:chunks/main/services.tpl:9: {$_modx->resource.content} */
 echo $var["_modx"]->resource["content"]; ?>
                </div>
                <div class="our-services-inner">
                    <?php
/* file:chunks/main/services.tpl:22: {$_modx->runSnippet('pdoResources',[
                       'parents' => 5010,
                       'resources' => '3,4,48,5033,5076,42,5036',
                       'level' => 1,
                       'sortby' => 'menuindex',
                       'sortdir' => 'ASC',
                       'includeTVs' => 'ico,serviceTitle,serviceDescr',
                       'prepareTVs' => 1,
                       'processTVs' => 1,
                       'tpl' => '@FILE:chunks/main/services.row.tpl'
                    ])} */
 echo $var["_modx"]->runSnippet('pdoResources', array('parents' => 5010, 'resources' => '3,4,48,5033,5076,42,5036', 'level' => 1, 'sortby' => 'menuindex', 'sortdir' => 'ASC', 'includeTVs' => 'ico,serviceTitle,serviceDescr', 'prepareTVs' => 1, 'processTVs' => 1, 'tpl' => '@FILE:chunks/main/services.row.tpl')); ?>
                </div>
            </div>
        </div>
    </div>
</div><?php
}, array(
	'options' => 160,
	'provider' => 'file',
	'name' => 'file:chunks/main/services.tpl',
	'base_name' => 'chunks/main/services.tpl',
	'time' => 1491482635,
	'depends' => array (
  'file' => 
  array (
    'chunks/main/services.tpl' => 1491482635,
  ),
),
	'macros' => array(),

        ));
