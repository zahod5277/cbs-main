<?php 
/** Fenom template 'file:chunks/landingBlocks/sendPDF.tpl' compiled at 2017-04-07 16:55:15 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?><!-- DOWNLOAD PDF -->
<?php
/* file:chunks/landingBlocks/sendPDF.tpl:13: {$_modx->runSnippet('!AjaxForm',[
    'snippet' => 'FormIt',
    'form' => '@FILE: chunks/forms/sendPDF.form.tpl',
    'hooks' => 'spam,email,FormItSaveForm,sendPDF',
    'emailSubject' => 'Отправлена презентация',
    'emailTpl' => 'sendPDF.email.tpl',
    'emailTo' => $_modx->config.form_email,
    'emailFrom' => $_modx->config.emailsender,
    'validate' => 'email:reqiured,tushenka:blank',
    'validationErrorMessage' => '<h5>В форме содержатся ошибки!</h5>',
    'successMessage' => '<h5>Сообщение успешно отправлено</h5>'
])} */
 echo $var["_modx"]->runSnippet('!AjaxForm', array('snippet' => 'FormIt', 'form' => '@FILE: chunks/forms/sendPDF.form.tpl', 'hooks' => 'spam,email,FormItSaveForm,sendPDF', 'emailSubject' => 'Отправлена презентация', 'emailTpl' => 'sendPDF.email.tpl', 'emailTo' => $var["_modx"]->config["form_email"], 'emailFrom' => $var["_modx"]->config["emailsender"], 'validate' => 'email:reqiured,tushenka:blank', 'validationErrorMessage' => '<h5>В форме содержатся ошибки!</h5>', 'successMessage' => '<h5>Сообщение успешно отправлено</h5>')); ?>
<!-- END DOWNLOAD PDF --><?php
}, array(
	'options' => 160,
	'provider' => 'file',
	'name' => 'file:chunks/landingBlocks/sendPDF.tpl',
	'base_name' => 'chunks/landingBlocks/sendPDF.tpl',
	'time' => 1491482635,
	'depends' => array (
  'file' => 
  array (
    'chunks/landingBlocks/sendPDF.tpl' => 1491482635,
  ),
),
	'macros' => array(),

        ));
