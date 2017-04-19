<?php 
/** Fenom template 'file:chunks/infocenter/sendArticleForm.tpl' compiled at 2017-04-07 16:56:29 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?><?php
/* file:chunks/infocenter/sendArticleForm.tpl:12: {$_modx->runSnippet('!AjaxForm',[
    'snippet' => 'FormIt',
    'form' => '@FILE: chunks/forms/sendArticleForm.tpl',
    'hooks' => 'spam,email,FormItSaveForm,sendArticle',
    'emailSubject' => 'Статья из Инфо-центра отправлена на почту',
    'emailTo' => $_modx->config.form_email,
    'emailFrom' => $_modx->config.emailsender,
    'emailTpl' => 'sendArticle.email.tpl'
    'validate' => 'email:required,tushenka:blank',
    'validationErrorMessage' => '<h5>В форме содержатся ошибки!</h5>',
    'successMessage' => '<h5>Сообщение успешно отправлено</h5>'
])} */
 echo $var["_modx"]->runSnippet('!AjaxForm', array('snippet' => 'FormIt', 'form' => '@FILE: chunks/forms/sendArticleForm.tpl', 'hooks' => 'spam,email,FormItSaveForm,sendArticle', 'emailSubject' => 'Статья из Инфо-центра отправлена на почту', 'emailTo' => $var["_modx"]->config["form_email"], 'emailFrom' => $var["_modx"]->config["emailsender"], 'emailTpl' => 'sendArticle.email.tpl', 'validate' => 'email:required,tushenka:blank', 'validationErrorMessage' => '<h5>В форме содержатся ошибки!</h5>', 'successMessage' => '<h5>Сообщение успешно отправлено</h5>')); ?><?php
}, array(
	'options' => 160,
	'provider' => 'file',
	'name' => 'file:chunks/infocenter/sendArticleForm.tpl',
	'base_name' => 'chunks/infocenter/sendArticleForm.tpl',
	'time' => 1491482635,
	'depends' => array (
  'file' => 
  array (
    'chunks/infocenter/sendArticleForm.tpl' => 1491482635,
  ),
),
	'macros' => array(),

        ));
