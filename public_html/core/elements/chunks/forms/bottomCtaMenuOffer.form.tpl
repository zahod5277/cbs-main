<div class="modal fade leo-modal hidden-print" id="getOffer" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <form id="questions" class="ajax_form" method="POST" action="{$_modx->makeUrl($_modx->resource.id)}">
                    <div>
                        <button class="btn btn-link close-modal" data-dismiss="modal" type="button">
                            <img src="images/icon-close.png" />
                        </button>
                        <span class="blue">Перезвоним через 5 минут и отправим КП</span>
                    </div>
                    <div class="body-review">
                        <div class="form-group">
                            <input class="form-control" name="name" placeholder="Ваше имя" required="" type="text" />
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="offerPhone" placeholder="Телефон или e-mail" required="" type="text" />
                        </div>
                        <input type="text" class="tushenka" value="" name="tushenka">
                        <input name="calcData" type="hidden" value="">
                        <input name="pagetitle" type="hidden" value="{$_modx->resource.pagetitle}">
                        <button class="send-email leo-button-block" type="submit">Получить КП</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>