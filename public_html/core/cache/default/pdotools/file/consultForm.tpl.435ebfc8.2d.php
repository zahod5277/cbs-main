<?php 
/** Fenom template 'file:chunks/landingBlocks/consultForm.tpl' compiled at 2017-04-07 16:55:16 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?><?php
/* file:chunks/landingBlocks/consultForm.tpl:12: {$_modx->runSnippet('!AjaxForm',[
    'snippet' => 'FormIt',
    'form' => '@FILE: chunks/forms/consult.form.tpl',
    'hooks' => 'spam,email,FormItSaveForm',
    'emailSubject' => 'Заявка по [[*pagetitle]]',
    'emailTo' => $_modx->config.form_email,
    'emailFrom' => $_modx->config.emailsender,
    'emailTpl' => 'oneClick.email.tpl'
    'validate' => 'name:required,phone:required,tushenka:blank',
    'validationErrorMessage' => '<h5>В форме содержатся ошибки!</h5>',
    'successMessage' => '<h5>Сообщение успешно отправлено</h5>'
])} */
 echo $var["_modx"]->runSnippet('!AjaxForm', array('snippet' => 'FormIt', 'form' => '@FILE: chunks/forms/consult.form.tpl', 'hooks' => 'spam,email,FormItSaveForm', 'emailSubject' => 'Заявка по [[*pagetitle]]', 'emailTo' => $var["_modx"]->config["form_email"], 'emailFrom' => $var["_modx"]->config["emailsender"], 'emailTpl' => 'oneClick.email.tpl', 'validate' => 'name:required,phone:required,tushenka:blank', 'validationErrorMessage' => '<h5>В форме содержатся ошибки!</h5>', 'successMessage' => '<h5>Сообщение успешно отправлено</h5>')); ?><?php
}, array(
	'options' => 160,
	'provider' => 'file',
	'name' => 'file:chunks/landingBlocks/consultForm.tpl',
	'base_name' => 'chunks/landingBlocks/consultForm.tpl',
	'time' => 1491482635,
	'depends' => array (
  'file' => 
  array (
    'chunks/landingBlocks/consultForm.tpl' => 1491482635,
  ),
),
	'macros' => array(),

        ));
