<div class="container">
    <div class=" _exteded_text_block">
        <div class="custom_exteded_text_block">
            <div class="row">
                <div class="col-xs-3">
                    {if $_modx->resource.parent!=5010}
                        {var $parent = $_modx->resource.parent}
                    {else}
                        {var $parent = $_modx->resource.id}
                    {/if}
                    {$_modx->runSnippet('!pdoMenu',[
                    'parents' => $parent,
                    'level' => 1,
                    'tpl' => '@FILE:chunks/landingBlocks/childService/childServiceSidebarMenu.row.tpl',
                    'tplOuter' => '@FILE:chunks/landingBlocks/childService/childServiceSidebarMenuOuter.tpl'
                ])}
                </div>
                <div class="col-xs-9 childSrviceOuter calculatorOuter no-padding">
                    <div class="module-title blue">
                        <h2>
                            {$_modx->resource.pagetitle}
                        </h2>
                    </div>
                        <p class="calculator-text-description">
                        {$_modx->resource.calcText}
                        </p>
                    {if $_modx->resource.calcFunctions?}
                    <div class="calculator-block">
                        <h3 class="calculator-block__heading">
                            <i class="calculator-block__ico calculator-block__ico_calc" style="background-image:url('images/ico_calculator.png')"></i>
                             Наш калькулятор определяет стоимость
                        </h3>
                        <div class="calculator-block__inner">
                            {var $functions = $_modx->resource.calcFunctions|fromJSON}
                            <ul class="calculator-block-functions-list">
                                {foreach $functions as $function}
                                <li class="calculator-block-functions-list-item">
                                    <a href="{$function.calcFunctionLink|url}" target="_blank">{$function.calcFunction}</a>
                                    </li>
                                {/foreach}
                            </ul>
                        </div>
                    </div>
                    {/if}
                    <h3 class="calculator-block__heading">
                         <i class="calculator-block__ico calculator-block__ico_calc" style="background-image:url('images/ico_tumblers.png')"></i> 
                        Выберите необходимые показатели
                    </h3>
                    {var $calculator = $_modx->resource.calculatorParams|fromJSON}
                    <div class="calculator-form-select">
                        <label for="" class="calculator-form-label calculator-form-label_first">
                            {if $calculator[0]['image']?}
                                {var $ico = $calculator[0]['image']}
                            {else}
                                {var $ico = 'images/ico-motivation.png'}
                            {/if}
                            <i class="calculator-form-label-ico calculator-form-label-ico_oborot" style="background-image:url('{$ico}')"></i>
                            <span class="calculator-form-label-text">Требуемая услуга</span>
                        </label>
                        <select data-pageid="{$_modx->resource.id}" name="mainOption" id="mainOption" class="mainOption calculator-form-select-item">
                            {foreach $calculator as $calcItem}
                                <option value="{$calcItem.title}">{$calcItem.title}</option>
                            {/foreach}
                        </select>
                    </div>
                    {*атрибут id связан с AJAX, не удалять!*}
                    <div class="calculator-block" id="calculatorBlock">
                        {*берем только значение первого параметра, чтобы не дублировать вывод опций*}
                        {$_modx->getChunk('@FILE:chunks/landingBlocks/calculator/calculatorSelectItem.tpl',[
                            'json' => $calculator
                        ])}
                    </div>
                    {if $_modx->resource.freeBonus?}
                    <div class="calculator-block">
                        <h3 class="calculator-block__heading">
                            <i class="calculator-block__ico calculator-block__ico_calc" style="background-image:url('images/ico_gift.png')"></i> Выберите бесплатные бонусы к услуге
                        </h3>
                        <div class="calculator-block__inner">
                            <form action="" class="calculator-bonus-form">
                                {var $bonuses = $_modx->resource.freeBonus|fromJSON}
                                {foreach $bonuses as $bonus}
                                <p class="calculator-bonus-form-item">
                                    <input type="checkbox" class="calculator-bonus-form-checkbox" id="bonus-{$bonus.MIGX_id}" name="bonus-{$bonus['MIGX_id']}" value="{$bonus.bonus}">
                                    <label class="calculator-bonus-form-item-text" for="bonus-{$bonus['MIGX_id']}">{$bonus.bonus}</label>
                                </p>
                                {/foreach}
                            </form>
                        </div>
                    </div>
                    {/if}
                    <div class="calculator-block">
                        <h3 class="calculator-block__heading">
                            <i class="calculator-block__ico calculator-block__ico_calc" style="background-image:url('images/ico_rich.png')"></i> 
                            Стоимость услуги для вас <span class="calculator-summ-outer">от <span class="calculator-summ">45 000</span> рублей</span>
                        </h3>
                    </div>
                    <div class="calculator-block">
                        <div class="calculator-block__inner">
                            <div class="calculator-block-cta">
                                <div class="calculator-block-cta-item">
                                    <i class="block-cta-ico" style="background-image:url('/images/ico-clipboard.png')"></i>
                                    <div class="block-cta-text">
                                        <p class="block-cta-heading block-cta-heading_underline">
                                            <a href="#" data-target="#getOffer" data-toggle="modal">Получить коммерческое предложение</a>
                                        </p>
                                        <p class="block-cta-heading block-cta-heading_little">{$_modx->resource.commOfferTrigger}</p>
                                    </div>
                                </div>
                                <div class="calculator-block-cta-item">
                                    <i class="block-cta-ico" style="background-image:url('/images/ico-agreement.png')"></i>
                                    <div class="block-cta-text">
                                        <p class="block-cta-heading block-cta-heading_underline">
                                            <a href="#" data-target="#getContract" data-toggle="modal">Получить сразу договор на услугу</a>
                                        </p>
                                        <p class="block-cta-heading block-cta-heading_little">{$_modx->resource.contractTrigger}</p>
                                    </div>
                                </div>
                                <div class="calculator-block-cta-item">
                                    <i class="block-cta-ico" style="background-image:url('/images/ico-help-button.png')"></i>
                                    <div class="block-cta-text">
                                        <p class="block-cta-heading block-cta-heading_underline">
                                            <a href="#" data-target="#add-question" data-toggle="modal">У меня остались вопросы</a>
                                        </p>
                                        <p class="block-cta-heading block-cta-heading_little">задать вопрос и уточнить детали</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {if $_modx->resource.addServices?}
                    <div class="calculator-block">
                        <h3 class="calculator-block__heading">
                            <i class="calculator-block__ico calculator-block__ico_calc" style="background-image:url('images/ico_calccart.png')"></i> Дополнительно вы сможете получить следующие услуги
                        </h3>
                        <div class="calculator-block__inner">
                            {var $addServices = $_modx->resource.addServices|fromJSON}
                            <ul class="calculator-additional-list">
                                {foreach $addServices as $service}
                                    <li class="calculator-additional-list-item">
                                        <a href="{$service.link}">{$service.service}</a>
                                    </li>
                                {/foreach}
                            </ul>
                        </div>
                    </div>
                    {/if}
                    {if $_modx->resource.additionalTextTitle?}
                       <h3 class="calculator-block__heading">
                            {$_modx->resource.additionalTextTitle}
                        </h3> 
                    {/if}
                    {if $_modx->resource.additionalTextBlock?}
                        {$_modx->resource.additionalTextBlock}
                    {/if}
                </div>
            </div>
        </div>
    </div>
    <div class="mb40px">
        {include 'file:chunks/landingBlocks/consultForm.tpl'}
    </div>
</div>