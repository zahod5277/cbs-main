<?php 
/** Fenom template 'file:chunks/company/keysForm.tpl' compiled at 2017-04-07 17:13:16 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?><?php
/* file:chunks/company/keysForm.tpl:12: {$_modx->runSnippet('!AjaxForm',[
    'snippet' => 'FormIt',
    'form' => '@FILE: chunks/forms/keysForm.form.tpl',
    'hooks' => 'spam,email,FormItSaveForm',
    'emailSubject' => 'Заявка со страницы О компании',
    'emailTo' => $_modx->config.form_email,
    'emailFrom' => $_modx->config.emailsender,
    'emailTpl' => 'keysForm.email.tpl',
    'validate' => 'name:reqiured,phone:reqiured,tushenka:blank',
    'validationErrorMessage' => '<h5>В форме содержатся ошибки!</h5>',
    'successMessage' => '<h5>Сообщение успешно отправлено</h5>'
])} */
 echo $var["_modx"]->runSnippet('!AjaxForm', array('snippet' => 'FormIt', 'form' => '@FILE: chunks/forms/keysForm.form.tpl', 'hooks' => 'spam,email,FormItSaveForm', 'emailSubject' => 'Заявка со страницы О компании', 'emailTo' => $var["_modx"]->config["form_email"], 'emailFrom' => $var["_modx"]->config["emailsender"], 'emailTpl' => 'keysForm.email.tpl', 'validate' => 'name:reqiured,phone:reqiured,tushenka:blank', 'validationErrorMessage' => '<h5>В форме содержатся ошибки!</h5>', 'successMessage' => '<h5>Сообщение успешно отправлено</h5>')); ?><?php
}, array(
	'options' => 160,
	'provider' => 'file',
	'name' => 'file:chunks/company/keysForm.tpl',
	'base_name' => 'chunks/company/keysForm.tpl',
	'time' => 1491482635,
	'depends' => array (
  'file' => 
  array (
    'chunks/company/keysForm.tpl' => 1491482635,
  ),
),
	'macros' => array(),

        ));
