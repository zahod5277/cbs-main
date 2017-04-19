<?php  return '<?php 
/** Fenom template \'modchunk/37179ccb1211a524d805e2b4dc4f0b3f\' compiled at 2017-04-07 16:55:15 */
return new Fenom\\Render($fenom, function ($var, $tpl) {
?><div class="modal fade leo-modal" id="send-anceta" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <form id="get-profile" class="ajax_form" method="POST">
                    <div>
                        <span class="blue">Отправить анкету</span>
                        <button class="btn btn-link close-modal" data-dismiss="modal" type="button">
                            <img src="images/icon-close.png" />
                        </button>
                    </div>
                    <div class="body-review">
                        <div class="form-group">
                            <input class="form-control" name="email" placeholder="Введите ваш email" required="" type="email" />
                        </div>
                        <input name="file" type="hidden" value="<?php
/* modchunk/37179ccb1211a524d805e2b4dc4f0b3f:16: {$_modx->resource.anketa} */
 echo $var["_modx"]->resource["anketa"]; ?>" />
                        <input type="text" class="tushenka" name="tushenka" value="">
                        <input name="subject" type="hidden" value="Анкета с сайта CBS Group" />
                        <button class="send-email leo-button-block" type="submit">
                            Отправить
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><?php
}, array(
	\'options\' => 160,
	\'provider\' => false,
	\'name\' => \'modchunk/37179ccb1211a524d805e2b4dc4f0b3f\',
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