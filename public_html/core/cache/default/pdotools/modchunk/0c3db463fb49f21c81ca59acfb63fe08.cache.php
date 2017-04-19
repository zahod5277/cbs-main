<?php  return '<?php 
/** Fenom template \'modchunk/0c3db463fb49f21c81ca59acfb63fe08\' compiled at 2017-04-07 17:01:19 */
return new Fenom\\Render($fenom, function ($var, $tpl) {
?><?php
/* modchunk/0c3db463fb49f21c81ca59acfb63fe08:1: {if $idx in [1,4]} */
 if(in_array($var["idx"], array(1, 4))) { ?>
    <div class="row">
    <?php
/* modchunk/0c3db463fb49f21c81ca59acfb63fe08:3: {/if} */
 } ?>

    <?php
/* modchunk/0c3db463fb49f21c81ca59acfb63fe08:5: {if $idx==1} */
 if($var["idx"] == 1) { ?>
        <div class="col-xs-6 mainService">
            <a class="block" href="<?php
/* modchunk/0c3db463fb49f21c81ca59acfb63fe08:7: {$_modx->makeUrl($id)} */
 echo $var["_modx"]->makeUrl($var["id"]); ?>">
                <span class="service" style="background-image: url(\'<?php
/* modchunk/0c3db463fb49f21c81ca59acfb63fe08:8: {$_pls[\'tv.ico\']} */
 echo $var["_pls"][\'tv.ico\']; ?>\')">	
                    <span class="service-count">0<?php
/* modchunk/0c3db463fb49f21c81ca59acfb63fe08:9: {$idx} */
 echo $var["idx"]; ?></span>
                    <h3>
                        <?php
/* modchunk/0c3db463fb49f21c81ca59acfb63fe08:11: {$_pls[\'tv.serviceTitle\']} */
 echo $var["_pls"][\'tv.serviceTitle\']; ?>
                    </h3>
                    <span class="service-visible">
                        <?php
/* modchunk/0c3db463fb49f21c81ca59acfb63fe08:14: {$_pls[\'tv.serviceDescr\']} */
 echo $var["_pls"][\'tv.serviceDescr\']; ?>
                    </span>
                </span>
            </a>
        </div>
    <?php
/* modchunk/0c3db463fb49f21c81ca59acfb63fe08:19: {else} */
 } else { ?>
        <div class="col-xs-3">
            <a class="block" href="<?php
/* modchunk/0c3db463fb49f21c81ca59acfb63fe08:21: {$_modx->makeUrl($id)} */
 echo $var["_modx"]->makeUrl($var["id"]); ?>">
                <span class="service" style="background-image: url(\'<?php
/* modchunk/0c3db463fb49f21c81ca59acfb63fe08:22: {$_pls[\'tv.ico\']} */
 echo $var["_pls"][\'tv.ico\']; ?>\')"> 
                    <span class="relative">
                        <span class="service-count">0<?php
/* modchunk/0c3db463fb49f21c81ca59acfb63fe08:24: {$idx} */
 echo $var["idx"]; ?></span>
                        <h3><?php
/* modchunk/0c3db463fb49f21c81ca59acfb63fe08:25: {$_pls[\'tv.serviceTitle\']} */
 echo $var["_pls"][\'tv.serviceTitle\']; ?></h3>
                    </span>
                    <span class="service-desc">
                        <?php
/* modchunk/0c3db463fb49f21c81ca59acfb63fe08:28: {$_pls[\'tv.serviceDescr\']} */
 echo $var["_pls"][\'tv.serviceDescr\']; ?>
                    </span>
                </span>
            </a>
        </div>
    <?php
/* modchunk/0c3db463fb49f21c81ca59acfb63fe08:33: {/if} */
 } ?>

    <?php
/* modchunk/0c3db463fb49f21c81ca59acfb63fe08:35: {if $idx in [3,7]} */
 if(in_array($var["idx"], array(3, 7))) { ?>
    </div>
<?php
/* modchunk/0c3db463fb49f21c81ca59acfb63fe08:37: {/if} */
 } ?><?php
}, array(
	\'options\' => 160,
	\'provider\' => false,
	\'name\' => \'modchunk/0c3db463fb49f21c81ca59acfb63fe08\',
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