<?php  return '<?php 
/** Fenom template \'modchunk/688e36c806259748390996a21ced71b1\' compiled at 2017-04-07 16:56:29 */
return new Fenom\\Render($fenom, function ($var, $tpl) {
?><?php
/* modchunk/688e36c806259748390996a21ced71b1:1: {if $idx==1||$idx==4} */
 if($var["idx"] == 1 || $var["idx"] == 4) { ?>
<tr>
<?php
/* modchunk/688e36c806259748390996a21ced71b1:3: {/if} */
 } ?>
    <td class="col-xs-4 recommCol">
        <a rel="nofollow" class="moduleItemTitle grey" href="<?php
/* modchunk/688e36c806259748390996a21ced71b1:5: {$uri} */
 echo $var["uri"]; ?>">
            <?php
/* modchunk/688e36c806259748390996a21ced71b1:6: {$pagetitle} */
 echo $var["pagetitle"]; ?>
        </a>
        <span style="color: #787878;" class="moduleItemDateCreated"><?php
/* modchunk/688e36c806259748390996a21ced71b1:8: {$createdon|dateRU} */
 echo call_user_func($tpl->getStorage()->getModifier("dateRU"), $var["createdon"]); ?></span>
    </td>
<?php
/* modchunk/688e36c806259748390996a21ced71b1:10: {if $idx==3||$idx==6} */
 if($var["idx"] == 3 || $var["idx"] == 6) { ?>
<tr>
<?php
/* modchunk/688e36c806259748390996a21ced71b1:12: {/if} */
 } ?><?php
}, array(
	\'options\' => 160,
	\'provider\' => false,
	\'name\' => \'modchunk/688e36c806259748390996a21ced71b1\',
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