<div class="bottom-cta-menu">
    <div class="container">
        {$_modx->runSnippet('!AjaxForm',[
            'snippet' => 'FormIt',
            'form' => '@FILE: chunks/forms/bottomCtaMenu.form.tpl',
            'hooks' => 'spam,email,FormItSaveForm',
            'emailSubject' => 'Посетитель отправил заявку со страницы [[*pagetitle]]',
            'emailTo' => $_modx->config.form_email,
            'emailFrom' => $_modx->config.emailsender,
            'emailTpl' => 'bottomCtaMenu.email.tpl'
            'validate' => 'ctaname:required',
            'validationErrorMessage' => '<h5>Укажите телефон или e-mail</h5>',
            'successMessage' => '<h5>Сообщение успешно отправлено</h5>'
        ])}
        {if $_modx->resource.calcLink?}
        <a target="_blank" href="{$_modx->resource.calcLink|url}"><i class="bottom-cta-menu__ico" style="background-image: url('images/ico_calculator_white.png')"></i>Калькулятор стоимости</a>
        {/if}
        <a href="#" data-target="#getOffer" data-toggle="modal"><i class="bottom-cta-menu__ico" style="background-image: url('images/ico-letter.png')"></i>Получить предложение</a>
        <a href="#" data-target="#getContract" data-toggle="modal"><i class="bottom-cta-menu__ico" style="background-image: url('images/ico-contract.png')"></i>Посмотреть договор</a>
    </div>
</div>