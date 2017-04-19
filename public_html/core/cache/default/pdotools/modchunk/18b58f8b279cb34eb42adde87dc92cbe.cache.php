<?php  return '<?php 
/** Fenom template \'modchunk/18b58f8b279cb34eb42adde87dc92cbe\' compiled at 2017-04-07 16:55:16 */
return new Fenom\\Render($fenom, function ($var, $tpl) {
?><div class=" _tape_news _proposal">
    <div class="custom_tape_news _proposal">
        <div class="sub-form">
            <div class="row">
                <div class="col-xs-5">
                    <div>
                        <div class="sub-friends">
                            Оставьте заявку на консультацию в 1 клик
                        </div>
                    </div>
                </div>
                <div class="col-xs-7">
                    <form class="ajax_form form-inline no-alert" method="POST" action="<?php
/* modchunk/18b58f8b279cb34eb42adde87dc92cbe:13: {$_modx->makeUrl($_modx->resource.id)} */
 echo $var["_modx"]->makeUrl($var["_modx"]->resource["id"]); ?>">
                        <div class="form-group">
                            <input class="form-control" name="name" placeholder="Ваше имя" required="" type="text" />
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="phone" placeholder="Ваш телефон" required="" type="text" />
                        </div>
                        <input type="hidden" name="Адрес страницы" value="<?php
/* modchunk/18b58f8b279cb34eb42adde87dc92cbe:20: {$_modx->resource.pagetitle} */
 echo $var["_modx"]->resource["pagetitle"]; ?> id: <?php
/* modchunk/18b58f8b279cb34eb42adde87dc92cbe:20: {$_modx->resource.id} */
 echo $var["_modx"]->resource["id"]; ?>">
                        <input type="hidden" name="send-message" value="1" />
                        <input type="text" class="tushenka" name="tushenka" value="">
                        <button class="btn us_submit send-email consultButton" type="submit">
                            Оставить заявку
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><?php
}, array(
	\'options\' => 160,
	\'provider\' => false,
	\'name\' => \'modchunk/18b58f8b279cb34eb42adde87dc92cbe\',
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