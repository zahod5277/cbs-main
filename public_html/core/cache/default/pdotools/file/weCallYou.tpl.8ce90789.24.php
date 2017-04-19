<?php 
/** Fenom template 'file:chunks/common/weCallYou.tpl' compiled at 2017-04-07 16:55:16 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?><!-- WE CALL YOU -->
<?php
/* file:chunks/common/weCallYou.tpl:13: {$_modx->runSnippet('!AjaxForm',[
    'snippet' => 'FormIt',
    'form' => '@FILE: chunks/forms/weCallYou.form.tpl',
    'hooks' => 'spam,email,FormItSaveForm',
    'emailSubject' => ' [[*pagetitle]] (пусть мне перезвонят)',
    'emailTo' => $_modx->config.form_email,
    'emailFrom' => $_modx->config.emailsender,
    'emailTpl' => 'callback.mail.tpl',
    'validate' => 'name:required,phone:required,tushenka:blank',
    'validationErrorMessage' => '<h5>В форме содержатся ошибки!</h5>',
    'successMessage' => '<h5>Сообщение успешно отправлено</h5>'
])} */
 echo $var["_modx"]->runSnippet('!AjaxForm', array('snippet' => 'FormIt', 'form' => '@FILE: chunks/forms/weCallYou.form.tpl', 'hooks' => 'spam,email,FormItSaveForm', 'emailSubject' => ' [[*pagetitle]] (пусть мне перезвонят)', 'emailTo' => $var["_modx"]->config["form_email"], 'emailFrom' => $var["_modx"]->config["emailsender"], 'emailTpl' => 'callback.mail.tpl', 'validate' => 'name:required,phone:required,tushenka:blank', 'validationErrorMessage' => '<h5>В форме содержатся ошибки!</h5>', 'successMessage' => '<h5>Сообщение успешно отправлено</h5>')); ?>
<!-- END WE CALL YOU -->


<?php
}, array(
	'options' => 160,
	'provider' => 'file',
	'name' => 'file:chunks/common/weCallYou.tpl',
	'base_name' => 'chunks/common/weCallYou.tpl',
	'time' => 1491482635,
	'depends' => array (
  'file' => 
  array (
    'chunks/common/weCallYou.tpl' => 1491482635,
  ),
),
	'macros' => array(),

        ));
