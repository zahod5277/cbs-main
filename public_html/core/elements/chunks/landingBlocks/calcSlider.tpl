<div class="main-slider">
    <div class="container">
        <div class="custom">
            <div class="mainTitle RobotoBold">
                <h1>
                    {$_modx->resource.landingTitle}
                </h1>
            </div>
            <div class="RobotoLight after-title">
                {$_modx->resource.landingSlogan}
            </div>
            {if $_modx->resource.sliderCalcParam?}
                {var $variants = $_modx->resource.sliderCalcParam|fromJSON}
                <div class="slider-calc-form">
                    {if $_modx->resource.sliderCalcTrigger?}
                        <p class="slider-form__block slider-form__block_price">{$_modx->resource.sliderCalcTrigger}</p>
                    {/if}
                    <select name="sliderCalcParams" id="sliderCalcParams" class="slider-form__block slider-block_select">
                        {foreach $variants as $variant}
                            <option value="{$variant.price}">{$variant.value}</option>
                        {/foreach}
                    </select>
                    <p class="slider-form__block slider-form__block_sum">от <strong></strong> рублей</p>
                    <button class="slider-form__block slider-form__block_order" data-target="#getServiceCalc" data-toggle="modal">Заказать</button>
                </div>
            {/if}
            <div class="slider-options-bonus">
                {if $_modx->resource.sliderCalcOptions?}
                    <div class="slider-options-row">
                        <div class="slider-options-bonus__item-outer">
                            <div class="slider-options-bonus__item slider-options-bonus__item_handler slider-options-bonus__item_bonus">
                                <i class="slider-options-bonus__ico" style="background-image:url('/images/ico-select-option.png')"></i>
                                <span class="slider-options-bonus__text">Выбрать опцию</span>
                            </div>
                        </div>
                        {var $options = $_modx->resource.sliderCalcOptions|fromJSON}
                        {foreach $options as $option}
                            <div class="slider-options-bonus__item-outer">
                                <input type="checkbox" id="options-{$option.MIGX_id}" data-operator="{$option.operator}" name="options-{$option.MIGX_id}" value="{$option.price|replace:" ":""}" class="options-bonus-hidden">
                                <label class="slider-options-bonus__item" for="options-{$option.MIGX_id}">
                                    <i class="slider-options-bonus__ico" style="background-image:url('{$option.image}')"></i>
                                    <span class="slider-options-bonus__text">{$option.descr}</span>
                                </label>
                            </div>
                        {/foreach}
                    </div>
                {/if}
                {if $_modx->resource.sliderCalcGift?}
                    {var $gifts = $_modx->resource.sliderCalcGift|fromJSON}
                    <div class="slider-options-row">
                        <div class="slider-options-bonus__item-outer">
                            <div class="slider-options-bonus__item slider-options-bonus__item_handler slider-options-bonus__item_gift">
                                <i class="slider-options-bonus__ico" style="background-image:url('/images/ico-gift-white.png')"></i>
                                <span class="slider-options-bonus__text">Выбрать подарок</span>
                            </div>
                        </div>
                        {foreach $gifts as $gift}
                            <div class="slider-options-bonus__item-outer">
                                <input type="checkbox" id="gift-{$gift.MIGX_id}" name="gift-{$gift.MIGX_id}" value="{$gift.descr|replace:" ":""}" class="options-bonus-hidden">
                                <label class="slider-options-bonus__item" for="gift-{$gift.MIGX_id}">
                                    <i class="slider-options-bonus__ico" style="background-image:url('{$gift.image}')"></i>
                                    <span class="slider-options-bonus__text">{$gift.descr}</span>
                                </label>
                            </div>
                        {/foreach}
                    </div>
                {/if}
            </div>
            <div class="main-slider-links">
                <a href="#" data-target="#getOffer" data-toggle="modal" class="main-slider-links__item">
                    <i class="main-slider-links__ico" style="background-image:url('images/ico-letter.png')"></i>Получить коммерческое предложение
                </a>
                {if $_modx->resource.calcLink?}
                <a href="{$_modx->resource.calcLink|url}" class="main-slider-links__item">
                    <i class="main-slider-links__ico" style="background-image:url('images/ico_calculator_white.png')"></i>Калькулятор стоимости услуг
                </a>
                {/if}
                <a href="#" data-target="#getContract" data-toggle="modal" class="main-slider-links__item">
                    <i class="main-slider-links__ico" style="background-image:url('images/ico-dog.png')"></i>Просмотреть договор
                </a>
                <a href="#" data-target="#add-question" data-toggle="modal" class="main-slider-links__item">
                    <i class="main-slider-links__ico" style="background-image:url('images/ico-help-button.png')"></i>У меня есть вопросы
                </a>
                
                <a href="#" data-target="#download-pdf" data-toggle="modal" class="main-slider-links__item">
                    <i class="main-slider-links__ico" style="background-image:url('images/ico-bar-chart.png')"></i>Скачать презентацию
                </a>
            </div>
            <div class="little-slider-links">
                <a data-scroll href="#serviceDescription" class="little-slider-links-item">Почитать описание услуги</a>
                <a data-scroll href="#shortVideo" class="little-slider-links-item">Посмотреть краткое видео</a>
                <a data-scroll href="#clientReviews" class="little-slider-links-item">Отзывы клиентов</a>
                <a data-scroll href="#ourWorkers" class="little-slider-links-item">Наши специалисты</a>
                <a data-scroll href="#ratings" class="little-slider-links-item">Рейтинги и награды CBS Group</a>
                <a data-scroll href="#projectKeys" class="little-slider-links-item">Кейсы проектов</a>
                <a data-scroll href="#companyRecords" class="little-slider-links-item">Наши достижения</a>
            </div>
            <div class="get-more">
            </div>
        </div>
    </div>
</div>
<!-- END SLIDER BLOCK -->
{include 'file:chunks/landingBlocks/sendPDF.tpl'}
{$_modx->runSnippet('!AjaxForm',[
    'snippet' => 'FormIt',
    'form' => '@FILE: chunks/forms/getCalcService.form.tpl',
    'hooks' => 'spam,email,FormItSaveForm',
    'emailSubject' => 'Заказали услугу (шапка страницы) - [[*pagetitle]]',
    'emailTo' => $_modx->config.form_email,
    'emailFrom' => $_modx->config.emailsender,
    'emailTpl' => 'getServiceCalc.mail.tpl',
    'validate' => 'name:required,phone:required,tushenka:blank',
    'validationErrorMessage' => '<h5>В форме содержатся ошибки!</h5>',
    'successMessage' => '<h5>Сообщение успешно отправлено</h5>'
])}
