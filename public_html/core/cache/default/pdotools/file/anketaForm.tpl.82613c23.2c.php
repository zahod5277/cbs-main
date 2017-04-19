<?php 
/** Fenom template 'file:chunks/landingBlocks/anketaForm.tpl' compiled at 2017-04-07 16:55:15 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?><?php
/* file:chunks/landingBlocks/anketaForm.tpl:12: {$_modx->runSnippet('!AjaxForm',[
    'snippet' => 'FormIt',
    'form' => '@FILE: chunks/forms/anketa.form.tpl',
    'hooks' => 'spam,email,FormItSaveForm',
    'emailSubject' => 'Анкета',
    'emailTo' => $_modx->config.form_email,
    'emailFrom' => $_modx->config.emailsender,
    'emailTpl' => 'anketa.email.tpl'
    'validate' => 'name:required,connect_type:required,tushenka:blank',
    'validationErrorMessage' => '<h5>В форме содержатся ошибки!</h5>',
    'successMessage' => '<h5>Сообщение успешно отправлено</h5>'
])} */
 echo $var["_modx"]->runSnippet('!AjaxForm', array('snippet' => 'FormIt', 'form' => '@FILE: chunks/forms/anketa.form.tpl', 'hooks' => 'spam,email,FormItSaveForm', 'emailSubject' => 'Анкета', 'emailTo' => $var["_modx"]->config["form_email"], 'emailFrom' => $var["_modx"]->config["emailsender"], 'emailTpl' => 'anketa.email.tpl', 'validate' => 'name:required,connect_type:required,tushenka:blank', 'validationErrorMessage' => '<h5>В форме содержатся ошибки!</h5>', 'successMessage' => '<h5>Сообщение успешно отправлено</h5>')); ?><?php
}, array(
	'options' => 160,
	'provider' => 'file',
	'name' => 'file:chunks/landingBlocks/anketaForm.tpl',
	'base_name' => 'chunks/landingBlocks/anketaForm.tpl',
	'time' => 1491482635,
	'depends' => array (
  'file' => 
  array (
    'chunks/landingBlocks/anketaForm.tpl' => 1491482635,
  ),
),
	'macros' => array(),

        ));
