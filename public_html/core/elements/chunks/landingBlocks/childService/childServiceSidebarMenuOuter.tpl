{if ($_modx->resource.template!=15&&$_modx->resource.template!=19&&$_modx->resource.template!=24&&$_modx->resource.template!=22)||($_modx->resource.parent==5010)}
    {var $res = $_modx->resource.id}
{else}
    {var $res = $_modx->resource.parent}
{/if}
{switch $res}
{case 3}
{var $service = 'аудиту'}
{case 4}
{var $service = 'консалтингу'}
{case 48}
{var $service = 'бухгалтерскому обслуживанию'}
{case 5033}
{var $service = 'МСФО'}    
{case 5076}
{var $service = 'экспертизам'}
{case 42}
{var $service = 'автоматизации'}
{case 5036}
{var $service = 'оценке'}
{/switch}
<h4 class="childServiceSidebarMenuTitle">Все услуги по {$service}</h4>
<ul class="childServiceSidebarMenu">
    {$wrapper}
</ul>
{include 'file:chunks/landingBlocks/certs.tpl'}

{if $_modx->resource.template==24}
    {if $_modx->resource.calcLink?}
        <a href="{$_modx->resource.calcLink|url}" class="sidebar-calc-link">
            <div class="col-xs-12 no-padding">
                <div class="sidebar-calc">
                    <h3>Калькулятор расчета стоимости</h3>
                    <p>Узнай стоимость он-лайн</p>
                    <p>без звонков и не давая контактов</p>
                    <img src="images/sidebar-ico.png" alt="" class="sidebar-calc-ico">
                </div>
            </div>
        </a>
    {/if}
{/if}