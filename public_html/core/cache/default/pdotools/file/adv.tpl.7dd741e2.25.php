<?php 
/** Fenom template 'file:chunks/landingBlocks/adv.tpl' compiled at 2017-04-07 16:55:15 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?><div class="our-advantage">
    <div class="container">
        <div class=" _service_company">
            <div class="blue module-title">
            <h2>Услуги компании</h2>
            </div>
            <div class="custom_service_company">
                <?php
/* file:chunks/landingBlocks/adv.tpl:18: {$_modx->runSnippet('pdoResources',[
                    'parents' => $_modx->resource.id,
                    'level' => 1,
                    'includeTVs' => 'simplePrice,hourPrice,selectBoxPrice,PriceTitle,PriceFooter,buttonText',
                    'processTVs' => 1,
                    'prepareTVs' => 1,
                    'sortby' => 'menuindex',
                    'totalVar' => 'totalus',
                    'where' => '{"template:=":"15"}',
                    'tpl' => '@FILE:chunks/landingBlocks/tpl/childService.row.tpl.tpl'
                ])} */
 echo $var["_modx"]->runSnippet('pdoResources', array('parents' => $var["_modx"]->resource["id"], 'level' => 1, 'includeTVs' => 'simplePrice,hourPrice,selectBoxPrice,PriceTitle,PriceFooter,buttonText', 'processTVs' => 1, 'prepareTVs' => 1, 'sortby' => 'menuindex', 'totalVar' => 'totalus', 'where' => '{"template:=":"15"}', 'tpl' => '@FILE:chunks/landingBlocks/tpl/childService.row.tpl.tpl')); ?>
            </div>
        </div>
    </div>
</div>
<?php
/* file:chunks/landingBlocks/adv.tpl:34: {$_modx->runSnippet('!AjaxForm',[
    'snippet' => 'FormIt',
    'form' => '@FILE: chunks/forms/childService.form.tpl',
    'hooks' => 'spam,email,FormItSaveForm',
    'emailSubject' => 'Заявка по [[*pagetitle]]',
    'emailTo' => $_modx->config.form_email,
    'emailFrom' => $_modx->config.emailsender,
    'emailTpl' => 'childService.email.tpl',
    'validate' => 'name:required,phone:required,tushenka:blank',
    'validationErrorMessage' => '<h5>В форме содержатся ошибки!</h5>',
    'successMessage' => '<h5>Сообщение успешно отправлено</h5>'
])} */
 echo $var["_modx"]->runSnippet('!AjaxForm', array('snippet' => 'FormIt', 'form' => '@FILE: chunks/forms/childService.form.tpl', 'hooks' => 'spam,email,FormItSaveForm', 'emailSubject' => 'Заявка по [[*pagetitle]]', 'emailTo' => $var["_modx"]->config["form_email"], 'emailFrom' => $var["_modx"]->config["emailsender"], 'emailTpl' => 'childService.email.tpl', 'validate' => 'name:required,phone:required,tushenka:blank', 'validationErrorMessage' => '<h5>В форме содержатся ошибки!</h5>', 'successMessage' => '<h5>Сообщение успешно отправлено</h5>')); ?><?php
}, array(
	'options' => 160,
	'provider' => 'file',
	'name' => 'file:chunks/landingBlocks/adv.tpl',
	'base_name' => 'chunks/landingBlocks/adv.tpl',
	'time' => 1491482635,
	'depends' => array (
  'file' => 
  array (
    'chunks/landingBlocks/adv.tpl' => 1491482635,
  ),
),
	'macros' => array(),

        ));
