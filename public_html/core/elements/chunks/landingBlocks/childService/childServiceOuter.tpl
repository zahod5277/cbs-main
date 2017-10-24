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
                <div class="col-xs-9 childSrviceOuter" id="serviceDescription">
                    <div class="module-title blue">
                        <h2>
                            {$_modx->resource.pagetitle}
                        </h2>
                    </div>
                    {$_modx->resource.content}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="mb40px" style="margin-top:40px;">
        {include 'file:chunks/landingBlocks/consultForm.tpl'}
    </div>
</div>