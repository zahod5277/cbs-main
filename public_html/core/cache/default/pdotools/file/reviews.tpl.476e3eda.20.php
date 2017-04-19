<?php 
/** Fenom template 'file:chunks/main/reviews.tpl' compiled at 2017-04-07 17:01:19 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?><div class="leo-outside-bottom two">
    <div class="container">
    </div>
</div>
<div class="our-client-comments">
    <div class="container">
        <div class=" slider_comments">
            <div class="blue module-title">
                <h2>Отзывы клиентов</h2>
            </div>
            <div class="no-border">
                <div id="djslider-loader132" class="djslider-loader djslider-loader-default" data-animation=' { "auto":"1","transition":"linear","css3transition":"linear","duration":"1000","delay":4000}' data-djslider='{ "id":"132","slider_type":"0","slide_size":460,"visible_slides":"2","direction":"left","show_buttons":"0","show_arrows":"2","preload":"0","css3":"1" } '>
                    <div id="djslider132" class="djslider djslider-default djsliderRow">
                        <div id="slider-container132" class="slider-container">
                            <ul id="slider132" class="djslider-in">
                                <?php
/* file:chunks/main/reviews.tpl:31: {$_modx->runSnippet('!pdoResources',[
                                    'parents' => 5029,
                                    'hideContainers' => 1,
                                    'depth' => 1,
                                    'limit' => 0,
                                    'resources' => $_modx->resource.otzIdsIndex,
                                    'includeContent' => 1,
                                    'includeTVs' => 'fioOtz,otzTitle,otzLogo,mainOrder',
                                    'prepareTVs' => 1,
                                    'processTVs' => 1,
                                    'sortby' => 'mainOrder',
                                    'sortdir' => 'ASC',
                                    'limit' => 120,
                                    'showUnpublished' => 1,
                                    'tpl' => '@FILE:chunks/main/reviews.row.tpl'
                                 ])} */
 echo $var["_modx"]->runSnippet('!pdoResources', array('parents' => 5029, 'hideContainers' => 1, 'depth' => 1, 'limit' => 0, 'resources' => $var["_modx"]->resource["otzIdsIndex"], 'includeContent' => 1, 'includeTVs' => 'fioOtz,otzTitle,otzLogo,mainOrder', 'prepareTVs' => 1, 'processTVs' => 1, 'sortby' => 'mainOrder', 'sortdir' => 'ASC', 'limit' => 120, 'showUnpublished' => 1, 'tpl' => '@FILE:chunks/main/reviews.row.tpl')); ?>
                            </ul>
                        </div>
                        <div id="navigation132" class="navigation-container reviewsNavigation">
                            <img id="prev132" class="prev-button " src="/images/slider/left-arrow.png" alt="Previous" />
                            <img id="next132" class="next-button " src="/images/slider/right-arrow.png" alt="Next" />
                        </div>
                    </div>
                </div>
            </div>
            <div style="clear: both"></div>
        </div>
    </div>
</div><?php
}, array(
	'options' => 160,
	'provider' => 'file',
	'name' => 'file:chunks/main/reviews.tpl',
	'base_name' => 'chunks/main/reviews.tpl',
	'time' => 1491482635,
	'depends' => array (
  'file' => 
  array (
    'chunks/main/reviews.tpl' => 1491482635,
  ),
),
	'macros' => array(),

        ));
