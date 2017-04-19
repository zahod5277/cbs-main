<?php 
/** Fenom template 'file:chunks/infocenter/infoCategory.tpl' compiled at 2017-04-07 17:01:40 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?><div class="container outside-component">
    <div class="component-wrapper">
        <div id="k2Container " class="itemListView">
            <div class="itemListCategoriesBlock">
                <div class="itemListCategory">
                    <div class="blue module-title">
                        <h2>
                            <?php
/* file:chunks/infocenter/infoCategory.tpl:8: {if $_modx->resource.longtitle==''} */
 if($var["_modx"]->resource["longtitle"] == '') { ?>
                                <?php
/* file:chunks/infocenter/infoCategory.tpl:9: {$_modx->resource.pagetitle} */
 echo $var["_modx"]->resource["pagetitle"]; ?>
                            <?php
/* file:chunks/infocenter/infoCategory.tpl:10: {else} */
 } else { ?>
                                <?php
/* file:chunks/infocenter/infoCategory.tpl:11: {$_modx->resource.longtitle} */
 echo $var["_modx"]->resource["longtitle"]; ?>
                            <?php
/* file:chunks/infocenter/infoCategory.tpl:12: {/if} */
 } ?>
                            <?php
/* file:chunks/infocenter/infoCategory.tpl:13: {if $_modx->resource.id!='5136'} */
 if($var["_modx"]->resource["id"] != '5136') { ?>
                            (<?php
/* file:chunks/infocenter/infoCategory.tpl:22: {$_modx->runSnippet('pdoMenu',[
                                    'parents' => 5009,
                                    'resources' => $_modx->resource.id,
                                    'level' => 2,
                                    'tplOuter' => '@INLINE {$wrapper}',
                                    'tplInner' => '@INLINE {$wrapper}',
                                    'tplParentRow' => '@INLINE {$children}',
                                    'countChildren' => 1
                                 ])} */
 echo $var["_modx"]->runSnippet('pdoMenu', array('parents' => 5009, 'resources' => $var["_modx"]->resource["id"], 'level' => 2, 'tplOuter' => '@INLINE {$wrapper}', 'tplInner' => '@INLINE {$wrapper}', 'tplParentRow' => '@INLINE {$children}', 'countChildren' => 1)); ?>)
                            <?php
/* file:chunks/infocenter/infoCategory.tpl:23: {/if} */
 } ?>
                        </h2>
                        <div class="btn-search relative">
                            <a href="/search">Найти</a>
                        </div>  
                    </div>

                    <div class="clr"></div>
                </div>
            </div>
            <div class="itemList">
                <div id="itemListLeading">
                    <?php
/* file:chunks/infocenter/infoCategory.tpl:37: {if $_modx->resource.parent=='5102'} */
 if($var["_modx"]->resource["parent"] == '5102') { ?>
                       <?php
/* file:chunks/infocenter/infoCategory.tpl:38: {var $where = '{"tags:LIKE":"%'~$_modx->resource.pagetitle~'%"}'} */
 $var["where"]=('{"tags:LIKE":"%'.strval($var["_modx"]->resource["pagetitle"]).strval('%"}')); ?>
                       <?php
/* file:chunks/infocenter/infoCategory.tpl:39: {var $ids = 5009} */
 $var["ids"]=5009; ?>
                       <?php
/* file:chunks/infocenter/infoCategory.tpl:40: {elseif $_modx->resource.id=='5136'} */
 } elseif($var["_modx"]->resource["id"] == '5136') { ?>
                           <?php
/* file:chunks/infocenter/infoCategory.tpl:41: {var $where = '{"atention:=":"1"}'} */
 $var["where"]='{"atention:=":"1"}'; ?>
                           <?php
/* file:chunks/infocenter/infoCategory.tpl:42: {var $ids = 5009} */
 $var["ids"]=5009; ?>
                       <?php
/* file:chunks/infocenter/infoCategory.tpl:43: {else} */
 } else { ?>
                       <?php
/* file:chunks/infocenter/infoCategory.tpl:44: {var $where = ''} */
 $var["where"]=''; ?>
                       <?php
/* file:chunks/infocenter/infoCategory.tpl:45: {var $ids = $_modx->resource.id} */
 $var["ids"]=$var["_modx"]->resource["id"]; ?>
                    <?php
/* file:chunks/infocenter/infoCategory.tpl:46: {/if} */
 } ?>
                    <?php
/* file:chunks/infocenter/infoCategory.tpl:67: {$_modx->runSnippet('!pdoPage',[
                            'tpl' => '@FILE:chunks/infocenter/infoCategory.row.tpl',
                            'parents' => $ids,
                            'pageLimit' => 11,
                            'limit' => 15,
                            'sortby' => 'createdon'
                            'sortdir' => 'DESC',
                            'hideContainers' => 1,
                            'showUnpublished' => 1,
                            'where' => $where,
                            'includeTVs' => 'tags, HitsPage, starSum,atention,isVideo',
                            'prepareTVs' => 1,
                            'processTVs' => 1,
                            'tplPageWrapper' => '@INLINE {$prev}{$pages}{$next}',
                            'tplPageActive' => '@INLINE <li><span class="pagenav">{$pageNo}</span></li>',
                            'tplPage' => '@INLINE <li><a href="{$href}" class="pagenav">{$pageNo}</a></li>',
                            'tplPagePrev' => '@INLINE <li class="pagination-prev"><a href="{$href}">Назад</a></li>',
                            'tplPageNext' => '@INLINE <li class="pagination-next"><a href="{$href}">Вперед</a></li>',
                            'tplPagePrevEmpty' => '@INLINE <li class="pagination-prev"><span class="pagenav">Назад</span></li>',
                            'tplPageNextEmpty' => '@INLINE <li class="pagination-next"><span class="pagenav">Вперёд</span> </li>'
                        ])} */
 echo $var["_modx"]->runSnippet('!pdoPage', array('tpl' => '@FILE:chunks/infocenter/infoCategory.row.tpl', 'parents' => $var["ids"], 'pageLimit' => 11, 'limit' => 15, 'sortby' => 'createdon', 'sortdir' => 'DESC', 'hideContainers' => 1, 'showUnpublished' => 1, 'where' => $var["where"], 'includeTVs' => 'tags, HitsPage, starSum,atention,isVideo', 'prepareTVs' => 1, 'processTVs' => 1, 'tplPageWrapper' => '@INLINE {$prev}{$pages}{$next}', 'tplPageActive' => '@INLINE <li><span class="pagenav">{$pageNo}</span></li>', 'tplPage' => '@INLINE <li><a href="{$href}" class="pagenav">{$pageNo}</a></li>', 'tplPagePrev' => '@INLINE <li class="pagination-prev"><a href="{$href}">Назад</a></li>', 'tplPageNext' => '@INLINE <li class="pagination-next"><a href="{$href}">Вперед</a></li>', 'tplPagePrevEmpty' => '@INLINE <li class="pagination-prev"><span class="pagenav">Назад</span></li>', 'tplPageNextEmpty' => '@INLINE <li class="pagination-next"><span class="pagenav">Вперёд</span> </li>')); ?>
                </div>
                <div class="k2Pagination">
                    <ul>
                        <?php
/* file:chunks/infocenter/infoCategory.tpl:71: {$_modx->getPlaceholder('page.nav')} */
 echo $var["_modx"]->getPlaceholder('page.nav'); ?>
                    </ul>
                    <div class="clr"></div>
                </div>
            </div>
        </div>
    </div>
</div><?php
}, array(
	'options' => 160,
	'provider' => 'file',
	'name' => 'file:chunks/infocenter/infoCategory.tpl',
	'base_name' => 'chunks/infocenter/infoCategory.tpl',
	'time' => 1491482635,
	'depends' => array (
  'file' => 
  array (
    'chunks/infocenter/infoCategory.tpl' => 1491482635,
  ),
),
	'macros' => array(),

        ));
