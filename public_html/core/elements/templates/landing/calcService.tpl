{extends 'file:templates/landing.tpl'}
{block 'WELCOMETEXT'}
    {include 'file:chunks/common/breadcrumbs.tpl'}
    {block 'ADV'}
    {/block}
{/block}
<div class="custom_exteded_text_block">
    {block 'HEADER'}
        {if $_modx->resource.slideImg !=''}
            {var $style = $_modx->resource.slideImg}
        {else}
            {var $style = '/images/full/slide12.jpg'}
        {/if}
        <header style="background: url('{$style}') no-repeat center top;background-size: cover;">
            {include 'file:chunks/common/topmenu.tpl'}
            {include 'file:chunks/landingBlocks/calcSlider.tpl'}
        </header>
    {/block}
    {block 'CONTENT'}
        {include 'file:chunks/landingBlocks/childService/childServiceOuter.tpl'}
        {include 'file:chunks/landingBlocks/video.tpl'}
        {include 'file:chunks/landingBlocks/ratings.tpl'}
        {include 'file:chunks/landingBlocks/adv2.tpl'}
        {if $_modx->resource.companyRecords!=''||($_modx->resource.template==19||$_modx->resource.template==15||$_modx->resource.template==24)}
            <div class="container mb40px childSrviceForm">
                {include 'file:chunks/landingBlocks/consultForm.tpl'}
            </div>
        {/if}

        <div class="container">
            {include 'file:chunks/landingBlocks/workers.tpl'}
        </div>
        {include 'file:chunks/landingBlocks/reviewsAndKeys.tpl'}
        {include 'file:chunks/landingBlocks/companyRecords.tpl'}
        {if $_modx->resource.addServiceToggler=='Да'}
            {include 'file:chunks/landingBlocks/childService/additionalServices.tpl'}
        {/if}
        {include 'file:chunks/landingBlocks/anyQuestions.tpl'}
        {include 'file:chunks/common/footer.tpl'}
        {include 'file:chunks/landingBlocks/bottomCtaMenu.tpl'}
        {include 'file:chunks/landingBlocks/bottomCtaMenuFormsCall.tpl'}
        {include 'file:chunks/common/weCallYou.tpl'}
        {include 'file:chunks/common/jivoSite.tpl'}
    {/block}
</div>