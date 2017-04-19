<?php 
/** Fenom template 'file:chunks/infocenter/new/sidebar.tpl' compiled at 2017-04-07 16:56:29 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?><div class="col-xs-3 infocenterSidebar hidden-print">
    <div class="right-position sidebarInner infocenterSidebarInner">
        <div class="actualImportant">
            <h3>Актуально. Важно. Коротко.</h3>
            <p>Обо всех изменениях в бухгалтерском
                и налоговом законодательстве</p>
        </div>
        <div class="infocenterSidebarDescr">
            <p>Вы сейчас в Инфо-центре компании
                CBS Group.</p> 
            <p>Здесь вы найдете ответ на
                любой вопрос. </p>
            <p class="paddingTop5px"><a href="<?php
/* file:chunks/infocenter/new/sidebar.tpl:13: {$_modx->makeUrl(5009)} */
 echo $var["_modx"]->makeUrl(5009); ?>">Что такое Инфо-центр?</a></p>
        </div>
        <div class="infocenterSideBarServices">
            <h3>Услуги компании CBS group</h3>
            <ul>
                <li><a href="<?php
/* file:chunks/infocenter/new/sidebar.tpl:18: {$_modx->makeUrl(3)} */
 echo $var["_modx"]->makeUrl(3); ?>">Аудит</a></li>
                <li><a href="<?php
/* file:chunks/infocenter/new/sidebar.tpl:19: {$_modx->makeUrl(48)} */
 echo $var["_modx"]->makeUrl(48); ?>">Бухгалтерский учет</a></li>
                <li><a href="<?php
/* file:chunks/infocenter/new/sidebar.tpl:20: {$_modx->makeUrl(4)} */
 echo $var["_modx"]->makeUrl(4); ?>">Консалтинг</a></li>
                <li><a href="<?php
/* file:chunks/infocenter/new/sidebar.tpl:21: {$_modx->makeUrl(5076)} */
 echo $var["_modx"]->makeUrl(5076); ?>">Экспертиза учета</a></li>
                <li><a href="<?php
/* file:chunks/infocenter/new/sidebar.tpl:22: {$_modx->makeUrl(42)} */
 echo $var["_modx"]->makeUrl(42); ?>">Автоматизация 1С</a></li>
                <li><a href="<?php
/* file:chunks/infocenter/new/sidebar.tpl:23: {$_modx->makeUrl(5033)} */
 echo $var["_modx"]->makeUrl(5033); ?>">МСФО</a></li>
                <li><a href="<?php
/* file:chunks/infocenter/new/sidebar.tpl:24: {$_modx->makeUrl(5036)} */
 echo $var["_modx"]->makeUrl(5036); ?>">Оценка</a></li>
            </ul>
        </div>
        <span class="infocenterRedModal">
            Узнать стоимость любой услуги в день обращения 
        </span>
        <?php
/* file:chunks/infocenter/new/sidebar.tpl:41: {$_modx->runSnippet('!AjaxForm',[
            'snippet' => 'FormIt',
            'form' => '@FILE: chunks/forms/getServiceCostForm.form.tpl',
            'hooks' => 'spam,email,FormItSaveForm',
            'emailSubject' => 'Узнать стоимость услуги (Инфо-центр)',
            'emailTo' => $_modx->config.form_email,
            'emailFrom' => $_modx->config.emailsender,
            'emailTpl' => 'getServiceCost.email.tpl',
            'validate' => 'servicePhone:required,tushenka:blank',
            'validationErrorMessage' => '<h5>В форме содержатся ошибки!</h5>',
            'successMessage' => '<h5>Сообщение успешно отправлено</h5>'
        ])} */
 echo $var["_modx"]->runSnippet('!AjaxForm', array('snippet' => 'FormIt', 'form' => '@FILE: chunks/forms/getServiceCostForm.form.tpl', 'hooks' => 'spam,email,FormItSaveForm', 'emailSubject' => 'Узнать стоимость услуги (Инфо-центр)', 'emailTo' => $var["_modx"]->config["form_email"], 'emailFrom' => $var["_modx"]->config["emailsender"], 'emailTpl' => 'getServiceCost.email.tpl', 'validate' => 'servicePhone:required,tushenka:blank', 'validationErrorMessage' => '<h5>В форме содержатся ошибки!</h5>', 'successMessage' => '<h5>Сообщение успешно отправлено</h5>')); ?>
        <?php
/* file:chunks/infocenter/new/sidebar.tpl:53: {$_modx->runSnippet('!AjaxForm',[
            'snippet' => 'FormIt',
            'form' => '@FILE: chunks/forms/infocenterSidebarNewForm.tpl',
            'hooks' => 'spam,email,FormItSaveForm',
            'emailSubject' => 'Заказана платная консультация со страницы Инфо-центр',
            'emailTo' => $_modx->config.form_email,
            'emailFrom' => $_modx->config.emailsender,
            'emailTpl' => 'payConsultFromInfocentr.email.tpl',
            'validate' => 'sidebarPhone:required,tushenka:blank',
            'validationErrorMessage' => '<h5>В форме содержатся ошибки!</h5>',
            'successMessage' => '<h5>Сообщение успешно отправлено</h5>'
        ])} */
 echo $var["_modx"]->runSnippet('!AjaxForm', array('snippet' => 'FormIt', 'form' => '@FILE: chunks/forms/infocenterSidebarNewForm.tpl', 'hooks' => 'spam,email,FormItSaveForm', 'emailSubject' => 'Заказана платная консультация со страницы Инфо-центр', 'emailTo' => $var["_modx"]->config["form_email"], 'emailFrom' => $var["_modx"]->config["emailsender"], 'emailTpl' => 'payConsultFromInfocentr.email.tpl', 'validate' => 'sidebarPhone:required,tushenka:blank', 'validationErrorMessage' => '<h5>В форме содержатся ошибки!</h5>', 'successMessage' => '<h5>Сообщение успешно отправлено</h5>')); ?>
    </div>
</div><?php
}, array(
	'options' => 160,
	'provider' => 'file',
	'name' => 'file:chunks/infocenter/new/sidebar.tpl',
	'base_name' => 'chunks/infocenter/new/sidebar.tpl',
	'time' => 1491482635,
	'depends' => array (
  'file' => 
  array (
    'chunks/infocenter/new/sidebar.tpl' => 1491482635,
  ),
),
	'macros' => array(),

        ));
