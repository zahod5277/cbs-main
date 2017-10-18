{extends 'file:templates/landing.tpl'}
{block 'WELCOMETEXT'}
    {include 'file:chunks/common/breadcrumbs.tpl'}
    {block 'ADV'}
    {/block}
{/block}
<div class="custom_exteded_text_block childServiceOuterOuter">
{block 'CONTENT'}
    {include 'file:chunks/landingBlocks/calculator/calculatorOuter.tpl'}
        {if $_modx->resource.addServiceToggler=='Да'}
        {include 'file:chunks/landingBlocks/childService/additionalServices.tpl'}
        {/if}
        {include 'file:chunks/landingBlocks/anyQuestions.tpl'}
        {include 'file:chunks/landingBlocks/bottomCtaMenu.tpl'}
        {include 'file:chunks/landingBlocks/bottomCtaMenuFormsCall.tpl'}
        {include 'file:chunks/common/footer.tpl'}
        {include 'file:chunks/common/weCallYou.tpl'}
        {include 'file:chunks/common/jivoSite.tpl'}
{/block}
</div>