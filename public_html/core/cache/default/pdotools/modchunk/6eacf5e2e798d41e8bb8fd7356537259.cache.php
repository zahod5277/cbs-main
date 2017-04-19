<?php  return '<?php 
/** Fenom template \'modchunk/6eacf5e2e798d41e8bb8fd7356537259\' compiled at 2017-04-07 17:01:40 */
return new Fenom\\Render($fenom, function ($var, $tpl) {
?><?php
/* modchunk/6eacf5e2e798d41e8bb8fd7356537259:1: {if $_pls[\'tv.isVideo\']==1} */
 if($var["_pls"][\'tv.isVideo\'] == 1) { ?>
    <?php
/* modchunk/6eacf5e2e798d41e8bb8fd7356537259:2: {var $class=\'hard-situation\'} */
 $var["class"]=\'hard-situation\'; ?>
<?php
/* modchunk/6eacf5e2e798d41e8bb8fd7356537259:3: {/if} */
 } ?>
<div class="itemContainer  itemContainerLast <?php
/* modchunk/6eacf5e2e798d41e8bb8fd7356537259:4: {$class} */
 echo $var["class"]; ?>"  style="width:100%" >
    <div class="catItemView groupLeading catItemIsFeatured">
        <div class="row">
            <div class="col-xs-7 catItemTitle infocenterRowItem">
                <h3>
                    <a href="<?php
/* modchunk/6eacf5e2e798d41e8bb8fd7356537259:9: {$_modx->makeUrl($id)} */
 echo $var["_modx"]->makeUrl($var["id"]); ?>">
                        <?php
/* modchunk/6eacf5e2e798d41e8bb8fd7356537259:10: {if $longtitle==\'\'} */
 if($var["longtitle"] == \'\') { ?>
                            <?php
/* modchunk/6eacf5e2e798d41e8bb8fd7356537259:11: {$pagetitle} */
 echo $var["pagetitle"]; ?>
                            <?php
/* modchunk/6eacf5e2e798d41e8bb8fd7356537259:12: {else} */
 } else { ?>
                            <?php
/* modchunk/6eacf5e2e798d41e8bb8fd7356537259:13: {$longtitle} */
 echo $var["longtitle"]; ?>    
                        <?php
/* modchunk/6eacf5e2e798d41e8bb8fd7356537259:14: {/if} */
 } ?>
                    </a>
                </h3>
                <span class="catItemDateCreated">
                    <?php
/* modchunk/6eacf5e2e798d41e8bb8fd7356537259:20: {$_modx->runSnippet(\'dateRU\',[
                        \'input\' => $createdon
                    ])} */
 echo $var["_modx"]->runSnippet(\'dateRU\', array(\'input\' => $var["createdon"])); ?>
                </span>
                <?php
/* modchunk/6eacf5e2e798d41e8bb8fd7356537259:22: {if $_pls[\'tv.tags\']!=\'\' && $template==4} */
 if($var["_pls"][\'tv.tags\'] != \'\' && $var["template"] == 4) { ?>
                <div class="catItemTagsBlock">                  
                    <ul class="catItemTags">
                       <?php
/* modchunk/6eacf5e2e798d41e8bb8fd7356537259:28: {$_modx->runSnippet(\'@FILE:snippets/getTags.php\',[
                                    \'id\' => $id,
                                    \'tpl\' => \'@FILE:chunks/infocenter/tags.row.tpl\'
                                 ])} */
 echo $var["_modx"]->runSnippet(\'@FILE:snippets/getTags.php\', array(\'id\' => $var["id"], \'tpl\' => \'@FILE:chunks/infocenter/tags.row.tpl\')); ?>
                    </ul>
                <div class="clr"></div>
                </div>
                <?php
/* modchunk/6eacf5e2e798d41e8bb8fd7356537259:32: {/if} */
 } ?>                    
            </div>
            <div class="col-xs-3">
                <div class="itemRatingBlock">
                    <?php
/* modchunk/6eacf5e2e798d41e8bb8fd7356537259:36: {if $template==4 && $_pls[\'tv.starSum\']!=\'\'} */
 if($var["template"] == 4 && $var["_pls"][\'tv.starSum\'] != \'\') { ?>
                    <span>Рейтинг</span>
                    <div class="itemRatingForm ratingStars">
                                    <?php
/* modchunk/6eacf5e2e798d41e8bb8fd7356537259:45: {$_modx->runSnippet(\'@FILE:snippets/getRating.php\',[
                                        \'id\' => $id,
                                        \'from\' => 1,
                                        \'to\' => 5,
                                        \'tpl\' => \'@FILE:chunks/infocenter/rating.row.tpl\',
                                        \'tplOuter\' => \'@FILE:chunks/infocenter/rating.outer.tpl\'
                                    ])} */
 echo $var["_modx"]->runSnippet(\'@FILE:snippets/getRating.php\', array(\'id\' => $var["id"], \'from\' => 1, \'to\' => 5, \'tpl\' => \'@FILE:chunks/infocenter/rating.row.tpl\', \'tplOuter\' => \'@FILE:chunks/infocenter/rating.outer.tpl\')); ?>
                   </div>
                   <?php
/* modchunk/6eacf5e2e798d41e8bb8fd7356537259:47: {/if} */
 } ?>
                </div>
            </div>
            <div class="col-xs-2">
                <div class="catItemHitsBlock">
                    <span class="catItemHits greyText">
                                <?php
/* modchunk/6eacf5e2e798d41e8bb8fd7356537259:53: {var $count = $_pls[\'tv.HitsPage\']} */
 $var["count"]=$var["_pls"][\'tv.HitsPage\']; ?>
                                Просмотров <b><?php
/* modchunk/6eacf5e2e798d41e8bb8fd7356537259:54: {$count} */
 echo $var["count"]; ?></b>
                            </span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clr"></div><?php
}, array(
	\'options\' => 160,
	\'provider\' => false,
	\'name\' => \'modchunk/6eacf5e2e798d41e8bb8fd7356537259\',
	\'base_name\' => \'runtime\',
	\'time\' => 0,
	\'depends\' => array (
  0 => 
  array (
    \'runtime\' => 0.0,
  ),
),
	\'macros\' => array(),

        ));
';