{var $params = $json[0]['param']|fromJSON}
{if $json[0]['basePrice']?}
    <input type="hidden" name="basePrice" value="{$json[0]['basePrice']}">
{/if}
{foreach $params as $param}
    {if $param['image']?}
        {var $innerIco = $param['image']}
    {else}
        {var $innerIco = 'images/ico-motivation.png'}
    {/if}
    <div class="calculator-form-select">
        <label for="" class="calculator-form-label">
            <i class="calculator-form-label-ico calculator-form-label-ico_oborot" style="background-image:url('{$innerIco}')"></i>
            <span class="calculator-form-label-text">{$param.title}</span>
        </label>
        {if $param.singleValue?}
            <select name="{'param-'~$param.MIGX_id}" id="{'param-'~$param.MIGX_id}" class="paramSelect calculator-form-select-item" data-operator="{$param.operator}" data-sort="{$param.MIGX_id}">
                {if $param.operator!='*'}
                <option value="0">Нет</option>
                {else}
                <option value="1">Нет</option>
                {/if}
                <option value="{$param.singleValue}">Да</option>
            </select>
        {else}
            {var $values = $param.value|fromJSON}
            <select name="{'param-'~$param.MIGX_id}" id="{'param-'~$param.MIGX_id}" class="paramSelect calculator-form-select-item" data-operator="{$param.operator}" data-sort="{$param.MIGX_id}">
                {foreach $values as $value}
                    <option value="{$value.values}">{$value.paramTitle}</option>
                {/foreach}
            </select>
        {/if}
    </div>
{/foreach}