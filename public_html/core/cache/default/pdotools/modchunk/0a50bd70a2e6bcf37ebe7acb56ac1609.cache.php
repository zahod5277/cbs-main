<?php  return '<?php 
/** Fenom template \'modchunk/0a50bd70a2e6bcf37ebe7acb56ac1609\' compiled at 2017-04-07 16:55:16 */
return new Fenom\\Render($fenom, function ($var, $tpl) {
?><div class="modal fade leo-modal" id="fillprofile" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form class="ajax_form" action="<?php
/* modchunk/0a50bd70a2e6bcf37ebe7acb56ac1609:5: {$_modx->makeUrl($_modx->resource.id)} */
 echo $var["_modx"]->makeUrl($var["_modx"]->resource["id"]); ?>" method="POST">
                    <div>
                        <button class="btn btn-link close-modal" data-dismiss="modal" type="button">
                            <img src="images/icon-close.png" />
                        </button>
                        <span class="blue">
                            Заполните, пожалуйста, анкету<br />мы свяжемся с вами в течение 10 минут
                        </span>
                    </div>
                    <div class="body-review body-review-big">
                        <div class="form-group">
                            <input class="form-control" name="name_project" placeholder="Какой проект или услуга Вас интересует" required="" type="text" />
                            <input type="text" name="tushenka" class="tushenka" value="">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="problem" placeholder="В чем заключается причина обращения к нам (опишите кратко задачу)" required="" type="text" />
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="time" placeholder="Как срочно Вы планируете реализовать проект или разрешить вопрос" required="" type="text" />
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="name_compane" placeholder="Как называется ваша компания" required="" type="text" />
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="web_site" placeholder="Укажите сайт вашей компании" required="" type="text" />
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="position" placeholder="Кем вы являетесь в компании" required="" type="text" />
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="name" placeholder="Представьтесь пожалуйста" required="" type="text" />
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="connect_type" placeholder="Оставьте удобный для Вас способ связи" required="" type="text" />
                        </div>
                        <div class="checkbox grey">
                            <label>
                                <input name="mailer" type="checkbox" />
                                Хотите ли Вы получать нашу информационную рассылку
                            </label>
                        </div>
                        <p>
                            &laquo;Мы гарантируем полную конфиденциальность информации.
                            <br /> Предоставленные Вами данные будут применены только для общения по обсуждаемому проекту.&raquo;</p>
                        <input name="fill-profile" type="hidden" value="1" />
                        <button class="send-email leo-button-block" class="w50perc" type="submit">
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
	\'name\' => \'modchunk/0a50bd70a2e6bcf37ebe7acb56ac1609\',
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