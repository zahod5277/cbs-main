<?php  return '<?php 
/** Fenom template \'modchunk/5b678466785f7c715c54921d50068478\' compiled at 2017-04-07 16:55:16 */
return new Fenom\\Render($fenom, function ($var, $tpl) {
?><div class="modal fade leo-modal hidden-print" id="getSpecialist" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <form id="questions" class="ajax_form" method="POST" action="<?php
/* modchunk/5b678466785f7c715c54921d50068478:5: {$_modx->makeUrl($_modx->resource.id)} */
 echo $var["_modx"]->makeUrl($var["_modx"]->resource["id"]); ?>">
                    <div>
                        <button class="btn btn-link close-modal" data-dismiss="modal" type="button">
                            <img src="images/icon-close.png" />
                        </button>
                        <span class="blue">Напишите телефон</span>
                    </div>
                    <div class="body-review">
                        <p>Специалист перезвонит в течение 5 минут</p>
                        <div class="form-group">
                            <input class="form-control" name="specialistPhone" placeholder="+7 495 255 88 77" required="" type="text" />
                        </div>
                        <input type="text" class="tushenka" value="" name="tushenka">
                        <input name="article" type="hidden" value="<?php
/* modchunk/5b678466785f7c715c54921d50068478:18: {$_modx->resource.id} */
 echo $var["_modx"]->resource["id"]; ?>">
                        <button class="send-email leo-button-block" type="submit">Вызвать специалиста</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><?php
}, array(
	\'options\' => 160,
	\'provider\' => false,
	\'name\' => \'modchunk/5b678466785f7c715c54921d50068478\',
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