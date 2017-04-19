<?php 
/** Fenom template 'file:chunks/infocenter/sendReviewForm.tpl' compiled at 2017-04-07 17:44:28 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?><?php
/* file:chunks/infocenter/sendReviewForm.tpl:12: {$_modx->runSnippet('!AjaxForm',[
    'snippet' => 'FormIt',
    'form' => '@FILE:chunks/forms/sendReviewForm.form.tpl',
    'hooks' => 'spam,email,FormItSaveForm',
    'emailSubject' => 'Отзыв об Инфо-центре',
    'emailTo' => $_modx->config.form_email,
    'emailFrom' => $_modx->config.emailsender,
    'emailTpl' => 'sendReview.email.tpl',
    'validate' => 'name:required,email:required,tushenka:blank',
    'validationErrorMessage' => '<h5>В форме содержатся ошибки!</h5>',
    'successMessage' => '<h5>Сообщение успешно отправлено</h5>'
])} */
 echo $var["_modx"]->runSnippet('!AjaxForm', array('snippet' => 'FormIt', 'form' => '@FILE:chunks/forms/sendReviewForm.form.tpl', 'hooks' => 'spam,email,FormItSaveForm', 'emailSubject' => 'Отзыв об Инфо-центре', 'emailTo' => $var["_modx"]->config["form_email"], 'emailFrom' => $var["_modx"]->config["emailsender"], 'emailTpl' => 'sendReview.email.tpl', 'validate' => 'name:required,email:required,tushenka:blank', 'validationErrorMessage' => '<h5>В форме содержатся ошибки!</h5>', 'successMessage' => '<h5>Сообщение успешно отправлено</h5>')); ?><?php
}, array(
	'options' => 160,
	'provider' => 'file',
	'name' => 'file:chunks/infocenter/sendReviewForm.tpl',
	'base_name' => 'chunks/infocenter/sendReviewForm.tpl',
	'time' => 1491482635,
	'depends' => array (
  'file' => 
  array (
    'chunks/infocenter/sendReviewForm.tpl' => 1491482635,
  ),
),
	'macros' => array(),

        ));
