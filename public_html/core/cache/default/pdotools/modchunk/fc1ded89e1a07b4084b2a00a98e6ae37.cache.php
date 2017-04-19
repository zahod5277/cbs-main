<?php  return '<?php 
/** Fenom template \'modchunk/fc1ded89e1a07b4084b2a00a98e6ae37\' compiled at 2017-04-07 17:44:28 */
return new Fenom\\Render($fenom, function ($var, $tpl) {
?><div class="mb30px">
    <a class="moduleItemTitle blue px16" href="<?php
/* modchunk/fc1ded89e1a07b4084b2a00a98e6ae37:2: {$_modx->makeUrl($id)} */
 echo $var["_modx"]->makeUrl($var["id"]); ?>">
        <?php
/* modchunk/fc1ded89e1a07b4084b2a00a98e6ae37:3: {$pagetitle} */
 echo $var["pagetitle"]; ?>
    </a>
    <div>
        <span class="genericItemDateCreated greyText">
            <?php
/* modchunk/fc1ded89e1a07b4084b2a00a98e6ae37:9: {$_modx->runSnippet(\'dateRU\', [
                \'input\' => $createdon
            ])} */
 echo $var["_modx"]->runSnippet(\'dateRU\', array(\'input\' => $var["createdon"])); ?>
        </span>
    </div>
</div><?php
}, array(
	\'options\' => 160,
	\'provider\' => false,
	\'name\' => \'modchunk/fc1ded89e1a07b4084b2a00a98e6ae37\',
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