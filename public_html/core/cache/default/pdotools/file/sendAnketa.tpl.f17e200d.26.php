<?php 
/** Fenom template 'file:chunks/company/sendAnketa.tpl' compiled at 2017-04-07 17:13:16 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?><!-- SEND ANKETA -->
<div class="modal fade leo-modal" id="send-anceta" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <form id="get-profile">
                    <div>
                        <span class="blue">Отправить анкету</span>
                        <button class="btn btn-link close-modal" data-dismiss="modal" type="button"><img src="/images/icon-close.png" />
                        </button>
                    </div>
                    <div class="body-review">
                        <div class="form-group">
                            <input class="form-control" name="email" placeholder="Введите ваш email" required="" type="email" />
                        </div>
                        <input name="profile" type="hidden" value="1" />
                        <button class="send-email leo-button-block" type="button">Отправить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END SEND ANKETA -->
<!-- DOWNLOAD PDF -->
<div class="modal fade leo-modal" id="download-pdf" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <form id="get-presentation">
                    <div>
                        <span class="blue">Отправить презентацию</span>
                        <button class="btn btn-link close-modal" data-dismiss="modal" type="button"><img src="/images/icon-close.png" />
                        </button>
                    </div>
                    <div class="body-review">
                        <div class="form-group">
                            <input class="form-control" name="email" placeholder="Введите ваш email" required="" type="email" />
                        </div>
                        <input name="presentation" type="hidden" value="1" />
                        <button class="send-email leo-button-block" type="button">Отправить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END DOWNLOAD PDF -->
<?php
}, array(
	'options' => 160,
	'provider' => 'file',
	'name' => 'file:chunks/company/sendAnketa.tpl',
	'base_name' => 'chunks/company/sendAnketa.tpl',
	'time' => 1491482635,
	'depends' => array (
  'file' => 
  array (
    'chunks/company/sendAnketa.tpl' => 1491482635,
  ),
),
	'macros' => array(),

        ));
