<?php  return '<?php 
/** Fenom template \'modchunk/b6de71d6a1c159fe95bd93674518c2c3\' compiled at 2017-04-07 16:56:29 */
return new Fenom\\Render($fenom, function ($var, $tpl) {
?><div class="infocenterSideBarConsult">
    <h3>Заказать устную или письменную консультацию</h3>
    <p>*<a href="<?php
/* modchunk/b6de71d6a1c159fe95bd93674518c2c3:3: {$_modx->makeUrl(4)} */
 echo $var["_modx"]->makeUrl(4); ?>">услуга платная</a></p>
</div>
<div class="infocenterSidebarForm">
    <form action="" class="ajax_form" method="POST">
        <input type="text" name="sidebarName" class="form-control" placeholder="Ваше имя">
        <input type="text" name="sidebarPhone" class="form-control" placeholder="Телефон">
        <input type="text" class="tushenka" name="tushenka" value="">
        <textarea name="sidebarComment" class="form-control" id="sidebarComment" cols="10" rows="10" placeholder="Краткое описание вашего вопроса"></textarea>
        <button type="submit" value="send" name="sendSidebarForm">Отправить</button>
    </form>
</div><?php
}, array(
	\'options\' => 160,
	\'provider\' => false,
	\'name\' => \'modchunk/b6de71d6a1c159fe95bd93674518c2c3\',
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