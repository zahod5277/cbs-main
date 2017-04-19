<?php 
/** Fenom template 'file:chunks/landingBlocks/sendAnketa.tpl' compiled at 2017-04-07 16:55:15 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?><!-- SEND ANKETA -->
<?php
/* file:chunks/landingBlocks/sendAnketa.tpl:13: {$_modx->runSnippet('!AjaxForm',[
    'snippet' => 'FormIt',
    'form' => '@FILE: chunks/forms/sendAnketa.form.tpl',
    'hooks' => 'spam,email,FormItSaveForm,sendPDF',
    'emailSubject' => 'Отправлена анкета',
    'emailTo' => $_modx->config.form_email,
    'emailFrom' => $_modx->config.emailsender,
    'emailTpl' => 'sendAnketa.email.tpl',
    'validate' => 'email:reqiured,tushenka:blank',
    'validationErrorMessage' => '<h5>В форме содержатся ошибки!</h5>',
    'successMessage' => '<h5>Сообщение успешно отправлено</h5>'
])} */
 echo $var["_modx"]->runSnippet('!AjaxForm', array('snippet' => 'FormIt', 'form' => '@FILE: chunks/forms/sendAnketa.form.tpl', 'hooks' => 'spam,email,FormItSaveForm,sendPDF', 'emailSubject' => 'Отправлена анкета', 'emailTo' => $var["_modx"]->config["form_email"], 'emailFrom' => $var["_modx"]->config["emailsender"], 'emailTpl' => 'sendAnketa.email.tpl', 'validate' => 'email:reqiured,tushenka:blank', 'validationErrorMessage' => '<h5>В форме содержатся ошибки!</h5>', 'successMessage' => '<h5>Сообщение успешно отправлено</h5>')); ?>
<!-- END SEND ANKETA --><?php
}, array(
	'options' => 160,
	'provider' => 'file',
	'name' => 'file:chunks/landingBlocks/sendAnketa.tpl',
	'base_name' => 'chunks/landingBlocks/sendAnketa.tpl',
	'time' => 1491482635,
	'depends' => array (
  'file' => 
  array (
    'chunks/landingBlocks/sendAnketa.tpl' => 1491482635,
  ),
),
	'macros' => array(),

        ));
