<?php  return '<?php 
/** Fenom template \'modchunk/733249e7a96fd3f8011fee56497dbb46\' compiled at 2017-04-07 17:13:16 */
return new Fenom\\Render($fenom, function ($var, $tpl) {
?><div class="leo-pagin-item">
    <div class="moduleItemIntrotext">
        <?php
/* modchunk/733249e7a96fd3f8011fee56497dbb46:3: {if $content!=\'\'} */
 if($var["content"] != \'\') { ?>
            <?php
/* modchunk/733249e7a96fd3f8011fee56497dbb46:4: {$content} */
 echo $var["content"]; ?>
         <?php
/* modchunk/733249e7a96fd3f8011fee56497dbb46:5: {else} */
 } else { ?>
             <?php
/* modchunk/733249e7a96fd3f8011fee56497dbb46:6: {$introtext} */
 echo $var["introtext"]; ?>
         <?php
/* modchunk/733249e7a96fd3f8011fee56497dbb46:7: {/if} */
 } ?>
    </div>
</div><?php
}, array(
	\'options\' => 160,
	\'provider\' => false,
	\'name\' => \'modchunk/733249e7a96fd3f8011fee56497dbb46\',
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