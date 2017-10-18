<form method="POST" action="{$_modx->makeUrl($_modx->resource.id)}" class="ajax_form bottomCtaForm">
    <button class="bottom-cta-menu__order-btn" type="submit">Заказать</button>
    <input name="calcData" type="hidden" value="">
    <input name="pagetitle" type="hidden" value="{$_modx->resource.pagetitle}">
    <input type="text" name="ctaname" class="bottom-cta-menu__input" value="" placeholder="Укажите ваш телефон или e-mail">
</form>