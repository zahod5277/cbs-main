<?php 
/** Fenom template 'file:chunks/landingBlocks/companyRecords.tpl' compiled at 2017-04-07 16:55:16 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?><?php
/* file:chunks/landingBlocks/companyRecords.tpl:1: {if $_modx->resource.companyRecords!=''} */
 if($var["_modx"]->resource["companyRecords"] != '') { ?>
    <div id="companyRecords">
        <div id="companyRecordsInner">
            <div class="container outside-component">
                <div class="component-wrapper">
                    <span id="startOfPageId2807"></span>
                    <div id="k2Container" class="companyRecords mobile-full-width itemView _main_style">
                        <div class="special-block mobile-full-width">
                            <div class="itemHeader blue module-title companyRecordsH">
                                <h2>Достижения компании</h2>
                            </div>
                            <div class="itemBody">
                                
                                <div class="our-advantage-inner">
                                    <?php
/* file:chunks/landingBlocks/companyRecords.tpl:18: {$_modx->runSnippet('getImageList',[
                                'tvname' => 'companyRecords',
                                'tpl' => 'companyRecords.row.tpl'
                            ])} */
 echo $var["_modx"]->runSnippet('getImageList', array('tvname' => 'companyRecords', 'tpl' => 'companyRecords.row.tpl')); ?>
                                </div>
                                
                                <div class="clr"></div>
                                <div class="clr"></div>
                            </div>
                            <div class="clr"></div>
                            <div class="itemBackToTop">
                                <a class="k2Anchor" href="/uncategorised/2807-ocenka#startOfPageId2807">
                                    Наверх		</a>
                            </div>
                            <div class="clr"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
/* file:chunks/landingBlocks/companyRecords.tpl:36: {/if} */
 } ?>                        <?php
}, array(
	'options' => 160,
	'provider' => 'file',
	'name' => 'file:chunks/landingBlocks/companyRecords.tpl',
	'base_name' => 'chunks/landingBlocks/companyRecords.tpl',
	'time' => 1491482635,
	'depends' => array (
  'file' => 
  array (
    'chunks/landingBlocks/companyRecords.tpl' => 1491482635,
  ),
),
	'macros' => array(),

        ));
