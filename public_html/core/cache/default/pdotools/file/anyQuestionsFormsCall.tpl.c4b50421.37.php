<?php 
/** Fenom template 'file:chunks/landingBlocks/anyQuestionsFormsCall.tpl' compiled at 2017-04-07 16:55:16 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?>
<?php
/* file:chunks/landingBlocks/anyQuestionsFormsCall.tpl:13: {$_modx->runSnippet('!AjaxForm',[
    'snippet' => 'FormIt',
    'form' => '@FILE: chunks/forms/getSpecialist.form.tpl',
    'hooks' => 'spam,email,FormItSaveForm',
    'emailSubject' => 'Заявка по [[*pagetitle]] (вызов специалиста)',
    'emailTo' => $_modx->config.form_email,
    'emailFrom' => $_modx->config.emailsender,
    'emailTpl' => 'getSpecialist.email.tpl'
    'validate' => 'specialistPhone:required,tushenka:blank',
    'validationErrorMessage' => '<h5>В форме содержатся ошибки!</h5>',
    'successMessage' => '<h5>Сообщение успешно отправлено</h5>'
])} */
 echo $var["_modx"]->runSnippet('!AjaxForm', array('snippet' => 'FormIt', 'form' => '@FILE: chunks/forms/getSpecialist.form.tpl', 'hooks' => 'spam,email,FormItSaveForm', 'emailSubject' => 'Заявка по [[*pagetitle]] (вызов специалиста)', 'emailTo' => $var["_modx"]->config["form_email"], 'emailFrom' => $var["_modx"]->config["emailsender"], 'emailTpl' => 'getSpecialist.email.tpl', 'validate' => 'specialistPhone:required,tushenka:blank', 'validationErrorMessage' => '<h5>В форме содержатся ошибки!</h5>', 'successMessage' => '<h5>Сообщение успешно отправлено</h5>')); ?>


<?php
/* file:chunks/landingBlocks/anyQuestionsFormsCall.tpl:27: {$_modx->runSnippet('!AjaxForm',[
    'snippet' => 'FormIt',
    'form' => '@FILE: chunks/forms/callToBoss.form.tpl',
    'hooks' => 'spam,email,FormItSaveForm',
    'emailSubject' => 'Обращение к Руководителю со страницы [[*pagetitle]]',
    'emailTo' => $_modx->config.form_email,
    'emailFrom' => $_modx->config.emailsender,
    'emailTpl' => 'boss.email.tpl'
    'validate' => 'bossName:required,bossPhone:required,tushenka:blank',
    'validationErrorMessage' => '<h5>В форме содержатся ошибки!</h5>',
    'successMessage' => '<h5>Сообщение успешно отправлено</h5>'
])} */
 echo $var["_modx"]->runSnippet('!AjaxForm', array('snippet' => 'FormIt', 'form' => '@FILE: chunks/forms/callToBoss.form.tpl', 'hooks' => 'spam,email,FormItSaveForm', 'emailSubject' => 'Обращение к Руководителю со страницы [[*pagetitle]]', 'emailTo' => $var["_modx"]->config["form_email"], 'emailFrom' => $var["_modx"]->config["emailsender"], 'emailTpl' => 'boss.email.tpl', 'validate' => 'bossName:required,bossPhone:required,tushenka:blank', 'validationErrorMessage' => '<h5>В форме содержатся ошибки!</h5>', 'successMessage' => '<h5>Сообщение успешно отправлено</h5>')); ?>


<?php
/* file:chunks/landingBlocks/anyQuestionsFormsCall.tpl:41: {$_modx->runSnippet('!AjaxForm',[
    'snippet' => 'FormIt',
    'form' => 'form_list_of_presentations',
    'hooks' => 'spam,email,sendPDF,FormItSaveForm',
    'emailSubject' => '[[*pagetitle]] отправлена презентация',
    'emailTo' => $_modx->config.form_email,
    'emailFrom' => $_modx->config.emailsender,
    'emailTpl' => 'presentation.email.tpl',
    'validate' => 'email:required,presTushenka:blank',
    'validationErrorMessage' => '<h5>В форме содержатся ошибки!</h5>',
    'successMessage' => '<h5>Сообщение успешно отправлено</h5>'
])} */
 echo $var["_modx"]->runSnippet('!AjaxForm', array('snippet' => 'FormIt', 'form' => 'form_list_of_presentations', 'hooks' => 'spam,email,sendPDF,FormItSaveForm', 'emailSubject' => '[[*pagetitle]] отправлена презентация', 'emailTo' => $var["_modx"]->config["form_email"], 'emailFrom' => $var["_modx"]->config["emailsender"], 'emailTpl' => 'presentation.email.tpl', 'validate' => 'email:required,presTushenka:blank', 'validationErrorMessage' => '<h5>В форме содержатся ошибки!</h5>', 'successMessage' => '<h5>Сообщение успешно отправлено</h5>')); ?>


<?php
/* file:chunks/landingBlocks/anyQuestionsFormsCall.tpl:55: {$_modx->runSnippet('!AjaxForm',[
    'snippet' => 'FormIt',
    'form' => '@FILE:chunks/forms/anketa.anyQuest.form.tpl',
    'hooks' => 'spam,email,FormItSaveForm',
    'emailSubject' => 'Заполнили общую анкету',
    'emailTo' => $_modx->config.form_email,
    'emailFrom' => $_modx->config.emailsender,
    'emailTpl' => 'anketa.email.tpl',
    'validate' => 'name:required,tushenka:blank',
    'validationErrorMessage' => '<h5>В форме содержатся ошибки!</h5>',
    'successMessage' => '<h5>Сообщение успешно отправлено</h5>'
])} */
 echo $var["_modx"]->runSnippet('!AjaxForm', array('snippet' => 'FormIt', 'form' => '@FILE:chunks/forms/anketa.anyQuest.form.tpl', 'hooks' => 'spam,email,FormItSaveForm', 'emailSubject' => 'Заполнили общую анкету', 'emailTo' => $var["_modx"]->config["form_email"], 'emailFrom' => $var["_modx"]->config["emailsender"], 'emailTpl' => 'anketa.email.tpl', 'validate' => 'name:required,tushenka:blank', 'validationErrorMessage' => '<h5>В форме содержатся ошибки!</h5>', 'successMessage' => '<h5>Сообщение успешно отправлено</h5>')); ?>


<?php
/* file:chunks/landingBlocks/anyQuestionsFormsCall.tpl:69: {$_modx->runSnippet('!AjaxForm',[
    'snippet' => 'FormIt',
    'form' => 'form_list_of_brief',
    'hooks' => 'spam,email,sendPDF,FormItSaveForm',
    'emailSubject' => 'Отправлена анкета расчета стоимости',
    'emailTo' => $_modx->config.form_email,
    'emailFrom' => $_modx->config.emailsender,
    'emailTpl' => 'sendBrief.email.tpl',
    'validate' => 'email:required,tushenka:blank',
    'validationErrorMessage' => '<h5>В форме содержатся ошибки!</h5>',
    'successMessage' => '<h5>Сообщение успешно отправлено</h5>'
])} */
 echo $var["_modx"]->runSnippet('!AjaxForm', array('snippet' => 'FormIt', 'form' => 'form_list_of_brief', 'hooks' => 'spam,email,sendPDF,FormItSaveForm', 'emailSubject' => 'Отправлена анкета расчета стоимости', 'emailTo' => $var["_modx"]->config["form_email"], 'emailFrom' => $var["_modx"]->config["emailsender"], 'emailTpl' => 'sendBrief.email.tpl', 'validate' => 'email:required,tushenka:blank', 'validationErrorMessage' => '<h5>В форме содержатся ошибки!</h5>', 'successMessage' => '<h5>Сообщение успешно отправлено</h5>')); ?>


<?php
/* file:chunks/landingBlocks/anyQuestionsFormsCall.tpl:83: {$_modx->runSnippet('!AjaxForm',[
    'snippet' => 'FormIt',
    'form' => '@FILE: chunks/forms/getPayConsultModal.form.tpl',
    'hooks' => 'spam,email,FormItSaveForm',
    'emailSubject' => 'Узнать стоимость в день обращения - [[*pagetitle]]',
    'emailTo' => $_modx->config.form_email,
    'emailFrom' => $_modx->config.emailsender,
    'emailTpl' => 'payConsult.email.tpl',
    'validate' => 'email:required',
    'validationErrorMessage' => '<h5>В форме содержатся ошибки!</h5>',
    'successMessage' => '<h5>Сообщение успешно отправлено</h5>'
])} */
 echo $var["_modx"]->runSnippet('!AjaxForm', array('snippet' => 'FormIt', 'form' => '@FILE: chunks/forms/getPayConsultModal.form.tpl', 'hooks' => 'spam,email,FormItSaveForm', 'emailSubject' => 'Узнать стоимость в день обращения - [[*pagetitle]]', 'emailTo' => $var["_modx"]->config["form_email"], 'emailFrom' => $var["_modx"]->config["emailsender"], 'emailTpl' => 'payConsult.email.tpl', 'validate' => 'email:required', 'validationErrorMessage' => '<h5>В форме содержатся ошибки!</h5>', 'successMessage' => '<h5>Сообщение успешно отправлено</h5>')); ?><?php
}, array(
	'options' => 160,
	'provider' => 'file',
	'name' => 'file:chunks/landingBlocks/anyQuestionsFormsCall.tpl',
	'base_name' => 'chunks/landingBlocks/anyQuestionsFormsCall.tpl',
	'time' => 1491482635,
	'depends' => array (
  'file' => 
  array (
    'chunks/landingBlocks/anyQuestionsFormsCall.tpl' => 1491482635,
  ),
),
	'macros' => array(),

        ));
