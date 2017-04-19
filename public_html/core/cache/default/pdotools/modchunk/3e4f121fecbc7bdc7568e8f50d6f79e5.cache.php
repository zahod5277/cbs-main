<?php  return '<?php 
/** Fenom template \'modchunk/3e4f121fecbc7bdc7568e8f50d6f79e5\' compiled at 2017-04-07 16:55:16 */
return new Fenom\\Render($fenom, function ($var, $tpl) {
?><div class="modal fade leo-modal hidden-print" id="getPayConsultModal" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <form id="questions" class="ajax_form" method="POST" action="<?php
/* modchunk/3e4f121fecbc7bdc7568e8f50d6f79e5:5: {$_modx->makeUrl($_modx->resource.id)} */
 echo $var["_modx"]->makeUrl($var["_modx"]->resource["id"]); ?>">
                    <div>
                        <button class="btn btn-link close-modal" data-dismiss="modal" type="button">
                            <img src="images/icon-close.png" />
                        </button>
                        <span class="blue">Узнать стоимость в день обращения</span>
                    </div>
                    <div class="body-review">
                        <div class="form-group">
                            <input class="form-control" name="email" placeholder="Ваш e-mail или телефон" required="" type="text" />
                             <input type="text" class="tushenka" value="" name="tushenka">
                            <select class="form-control modalSelect" name="service" id="service" placeholder="Какая услуга вас интересует?">
                                <option value="none" disabled selected="selected">Выберите услугу</option>
                                <option value="аудит">Аудит</option>
                                <option value="учет">Учет</option>
                                <option value="Консалтинг">Консалтинг</option>
                                <option value="Экспертиза">Экспертные услуги</option>
                                <option value="МСФО">МСФО</option>
                                <option value="Автоматизация">Автоматизация</option>
                                <option value="Оценка">Оценка</option>
                            </select>
                        </div>
                        <input name="article" type="hidden" value="<?php
/* modchunk/3e4f121fecbc7bdc7568e8f50d6f79e5:27: {$_modx->resource.id} */
 echo $var["_modx"]->resource["id"]; ?>">
                        <button class="send-email leo-button-block" type="submit">Узнать стоимость</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><?php
}, array(
	\'options\' => 160,
	\'provider\' => false,
	\'name\' => \'modchunk/3e4f121fecbc7bdc7568e8f50d6f79e5\',
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