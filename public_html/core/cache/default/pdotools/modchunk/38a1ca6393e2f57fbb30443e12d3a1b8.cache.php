<?php  return '<?php 
/** Fenom template \'modchunk/38a1ca6393e2f57fbb30443e12d3a1b8\' compiled at 2017-04-08 07:56:49 */
return new Fenom\\Render($fenom, function ($var, $tpl) {
?><?php
/* modchunk/38a1ca6393e2f57fbb30443e12d3a1b8:1: {if $_pls[\'tv.isVideo\']==1} */
 if($var["_pls"][\'tv.isVideo\'] == 1) { ?>
    <?php
/* modchunk/38a1ca6393e2f57fbb30443e12d3a1b8:2: {var $class=\'hard-situation\'} */
 $var["class"]=\'hard-situation\'; ?>
<?php
/* modchunk/38a1ca6393e2f57fbb30443e12d3a1b8:3: {/if} */
 } ?>
<div class="itemContainer itemContainerLast <?php
/* modchunk/38a1ca6393e2f57fbb30443e12d3a1b8:4: {$class} */
 echo $var["class"]; ?>" style="float:none;">
    <div class="groupLeading">
        <div class="row">
            <div class="col-xs-7">
                <div class="genericItemTitle">
                <h3>
                    <a href="<?php
/* modchunk/38a1ca6393e2f57fbb30443e12d3a1b8:10: {$uri} */
 echo $var["uri"]; ?>">
                    <?php
/* modchunk/38a1ca6393e2f57fbb30443e12d3a1b8:11: {$pagetitle} */
 echo $var["pagetitle"]; ?>
                    </a>
                </h3>
                </div>
                <span class="genericItemDateCreated greyText">
                    <?php
/* modchunk/38a1ca6393e2f57fbb30443e12d3a1b8:18: {$_modx->runSnippet(\'dateRU\',[
                        \'input\' => $createdon
                    ])} */
 echo $var["_modx"]->runSnippet(\'dateRU\', array(\'input\' => $var["createdon"])); ?>          
                </span>
            </div>
            <div class="col-xs-3">
                <!-- Item category name -->
                <div class="genericItemCategory">
                    <a href="[[~[[#[[+id]].parent]]]]">
                        [[#[[#[[+id]].parent]].pagetitle]]
                    </a>
                </div>
            </div>

            <div class="col-xs-2">
                <!-- Item Hits -->
                <div class="catItemHitsBlock">
                    <?php
/* modchunk/38a1ca6393e2f57fbb30443e12d3a1b8:33: {if $_pls[\'tv.HitsPage\']!=\'\'} */
 if($var["_pls"][\'tv.HitsPage\'] != \'\') { ?>
                    <span class="catItemHits">
                        Просмотров 
                        <span class="RobotoBold"><?php
/* modchunk/38a1ca6393e2f57fbb30443e12d3a1b8:36: {$_pls[\'tv.HitsPage\']} */
 echo $var["_pls"][\'tv.HitsPage\']; ?></span>
                    </span>
                    <?php
/* modchunk/38a1ca6393e2f57fbb30443e12d3a1b8:38: {/if} */
 } ?>
                </div>
            </div>
        </div>
    </div>
</div><?php
}, array(
	\'options\' => 160,
	\'provider\' => false,
	\'name\' => \'modchunk/38a1ca6393e2f57fbb30443e12d3a1b8\',
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