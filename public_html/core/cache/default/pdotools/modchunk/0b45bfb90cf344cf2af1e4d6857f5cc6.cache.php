<?php  return '<?php 
/** Fenom template \'modchunk/0b45bfb90cf344cf2af1e4d6857f5cc6\' compiled at 2017-04-07 16:55:15 */
return new Fenom\\Render($fenom, function ($var, $tpl) {
?><div class="contact-from">
    <div class="about-contact-from">
        <?php
/* modchunk/0b45bfb90cf344cf2af1e4d6857f5cc6:3: {$_modx->resource.formTitle} */
 echo $var["_modx"]->resource["formTitle"]; ?>
    </div>
    <form class="ajax_form form no-alert" method="POST" action="<?php
/* modchunk/0b45bfb90cf344cf2af1e4d6857f5cc6:5: {$_modx->makeUrl($_modx->resource.id)} */
 echo $var["_modx"]->makeUrl($var["_modx"]->resource["id"]); ?>">
        <div class="row">
            <div class="col-xs-4">
                <div class="form-group">
                    <input class="form-control white" name="name" placeholder="Ваше имя" required="" type="text" />
                </div>
            </div>
            <div class="col-xs-4">
                <div class="form-group">
                    <input class="form-control white" name="phone" placeholder="Ваш телефон" required="" type="text" />
                </div>
            </div>
            <div class="col-xs-4">
                <button class="leo-black-btn btn-block send-email" type="submit">
                    Отправляю заявку
                </button>
            </div>
        </div>
        <input name="page_accounting" type="hidden" value="Отправлено со страницы <?php
/* modchunk/0b45bfb90cf344cf2af1e4d6857f5cc6:23: {$_modx->resource.pagetitle} */
 echo $var["_modx"]->resource["pagetitle"]; ?>" />
        <input name="send-message" type="hidden" value="1" />
        <input type="text" class="tushenka" name="tushenka" value="">
    </form>
</div><?php
}, array(
	\'options\' => 160,
	\'provider\' => false,
	\'name\' => \'modchunk/0b45bfb90cf344cf2af1e4d6857f5cc6\',
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