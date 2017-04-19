<?php  return '<?php 
/** Fenom template \'modchunk/6765358515d8e6b2138dc666399a454b\' compiled at 2017-04-07 16:55:16 */
return new Fenom\\Render($fenom, function ($var, $tpl) {
?><?php
/* modchunk/6765358515d8e6b2138dc666399a454b:1: {var $total = $_modx->getPlaceholder(\'totalus\')} */
 $var["total"]=$var["_modx"]->getPlaceholder(\'totalus\'); ?>
<?php
/* modchunk/6765358515d8e6b2138dc666399a454b:2: {if $idx%3==1} */
 if($var["idx"] % 3 == 1) { ?>
<div class="row">
<?php
/* modchunk/6765358515d8e6b2138dc666399a454b:4: {/if} */
 } ?>
    <div class="col-xs-4">
        <div class="advantage">
            <div>
                <a class="advantageLink" href="<?php
/* modchunk/6765358515d8e6b2138dc666399a454b:8: {$_modx->makeUrl($id)} */
 echo $var["_modx"]->makeUrl($var["id"]); ?>" title="<?php
/* modchunk/6765358515d8e6b2138dc666399a454b:8: {$pagetitle} */
 echo $var["pagetitle"]; ?>"><?php
/* modchunk/6765358515d8e6b2138dc666399a454b:8: {$pagetitle} */
 echo $var["pagetitle"]; ?></a>
            </div>
        </div>
    </div>
<?php
/* modchunk/6765358515d8e6b2138dc666399a454b:12: {if ($idx%3==0) || ($idx==$total)} */
 if(($var["idx"] % 3 == 0) || ($var["idx"] == $var["total"])) { ?>
</div>
<?php
/* modchunk/6765358515d8e6b2138dc666399a454b:14: {/if} */
 } ?><?php
}, array(
	\'options\' => 160,
	\'provider\' => false,
	\'name\' => \'modchunk/6765358515d8e6b2138dc666399a454b\',
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