<?php  return '<?php 
/** Fenom template \'modchunk/52909b74307eccb368e5ca27fbc0fdee\' compiled at 2017-04-07 16:56:29 */
return new Fenom\\Render($fenom, function ($var, $tpl) {
?><div class="modal fade leo-modal hidden-print" id="send-article-to-email" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <form id="questions" class="ajax_form" method="POST" action="<?php
/* modchunk/52909b74307eccb368e5ca27fbc0fdee:5: {$_modx->makeUrl($_modx->resource.id)} */
 echo $var["_modx"]->makeUrl($var["_modx"]->resource["id"]); ?>">
                    <div>
                        <button class="btn btn-link close-modal" data-dismiss="modal" type="button">
                            <img src="images/icon-close.png" />
                        </button>
                        <span class="blue">Укажите ваш email ниже</span>
                    </div>
                    <div class="body-review">
                        <div class="form-group">
                            <input class="form-control" name="email" placeholder="Ваше Email" required="" type="email" />
                        </div>
                        <input type="text" class="tushenka" name="tushenka" value="">
                        <input name="article" type="hidden" value="<?php
/* modchunk/52909b74307eccb368e5ca27fbc0fdee:17: {$_modx->resource.id} */
 echo $var["_modx"]->resource["id"]; ?>">
                        <button class="send-email leo-button-block" type="submit">Отправить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><?php
}, array(
	\'options\' => 160,
	\'provider\' => false,
	\'name\' => \'modchunk/52909b74307eccb368e5ca27fbc0fdee\',
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