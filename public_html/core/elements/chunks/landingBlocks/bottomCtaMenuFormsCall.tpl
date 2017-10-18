{*Получить КП*}
{$_modx->runSnippet('!AjaxForm',[
    'snippet' => 'FormIt',
    'form' => '@FILE: chunks/forms/bottomCtaMenuOffer.form.tpl',
    'hooks' => 'spam,email,FormItSaveForm',
    'emailSubject' => 'Посетитель запросил КП (нижнее меню) по [[*pagetitle]]',
    'emailTo' => $_modx->config.form_email,
    'emailFrom' => $_modx->config.emailsender,
    'emailTpl' => 'getOffer.email.tpl'
    'validate' => 'offerPhone:required',
    'validationErrorMessage' => '<h5>В форме содержатся ошибки!</h5>',
    'successMessage' => '<h5>Сообщение успешно отправлено</h5>'
])}

{*Посмотреть договор*}
{$_modx->runSnippet('!AjaxForm',[
    'snippet' => 'FormIt',
    'form' => '@FILE: chunks/forms/bottomCtaMenuContract.form.tpl',
    'hooks' => 'spam,email,FormItSaveForm',
    'emailSubject' => 'Посетитель запросил договор по [[*pagetitle]]',
    'emailTo' => $_modx->config.form_email,
    'emailFrom' => $_modx->config.emailsender,
    'emailTpl' => 'getContract.email.tpl'
    'validate' => 'contractPhone:required',
    'validationErrorMessage' => '<h5>В форме содержатся ошибки!</h5>',
    'successMessage' => '<h5>Сообщение успешно отправлено</h5>'
])}