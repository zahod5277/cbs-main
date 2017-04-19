<?php 
/** Fenom template 'file:chunks/infocenter/readersReviews.tpl' compiled at 2017-04-17 13:00:39 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?><div class="container">
    <div class=" _page_info_center_reviews">
        <div class="blue module-title">
            <h2>Отзывы читателей</h2>
        </div>
        <a name="our-reviews" class="our-reviews"></a>
        <div id="k2ModuleBox190" class="_page_about_company_revies k2ItemsBlock _page_info_center_reviews">
            <div class="row">
                <?php
/* file:chunks/infocenter/readersReviews.tpl:18: {$_modx->runSnippet('pdoResources',[
                    'parents' => $_modx->resource.reviewId,
                    'depth' => 0,
                    'limit' => 0,
                    'sortby' => 'menuindex',
                    'sortdir' => 'ASC',
                    'includeContent' => 1,
                    'showUnpublished' => 1,
                    'tpl' => '@FILE:chunks/infocenter/readersReviews.row.tpl'
                ])} */
 echo $var["_modx"]->runSnippet('pdoResources', array('parents' => $var["_modx"]->resource["reviewId"], 'depth' => 0, 'limit' => 0, 'sortby' => 'menuindex', 'sortdir' => 'ASC', 'includeContent' => 1, 'showUnpublished' => 1, 'tpl' => '@FILE:chunks/infocenter/readersReviews.row.tpl')); ?>
            </div>
            <button data-toggle="modal" data-target="#rewies-info-center" class="blue-link">оставить отзыв</button>
            <div class="leo-paginator">
                <div class="wrapper-pagination">
                    <div class="pagination"></div>
                    <div class="pagination-bag">
                        <span class="start-question"></span>
                        <span class="end-question"></span> из
                        <span class="count-questions"></span>
                    </div>
                </div>
            </div>
            <?php
/* file:chunks/infocenter/readersReviews.tpl:31: {include 'file:chunks/infocenter/sendReviewForm.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/infocenter/sendReviewForm.tpl')->display($var); ?>
        </div>
        
        <script type="text/javascript">
            document.addEventListener("DOMContentLoaded", init());

            function init() {
                customLeoPagenator(
                        1,
                        jQuery('._page_about_company_revies'),
                        jQuery('._page_about_company_revies .leo-paginator'),
                        2,
                        true
                        );
            }
        </script>
        
    </div>
</div>
<div class="container">
    <div class=" _tape_news _info_center_tape_news_">
        <div class="custom_tape_news _info_center_tape_news_">
            <!-- Begin Signup Form -->
            <div id="mc_embed_signup">
                <form action="http://clientcbscgru.ru1.list-update.ru/" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate sub-form" target="_blank">
                    <input type="hidden" name="list_id" value="872040">
                    <input type="hidden" name="no_conf" value="">
                    <input type="hidden" name="notify" value="">
                    <div class="row">
                        <div class="col-xs-6">
                            <div>
                                <div class="sub-friends">
                                    Сэкономьте 4 часа в неделю. Подпишитесь на нашу рассылку.
                                    <br /> Выходит еженедельно. Полностью бесплатно.
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <input id="mce-EMAIL" class="_email us_input" maxlength="255" name="email" placeholder="Введите ваш E-Mail" required="required" type="email" />
                            <button dojotype="dijit.form.Button"  name="subscribe" class="us_submit" id="mc-embedded-subscribe">
                                Подписаться
                            </button>
                        </div>
                    </div>
                    <div id="mce-responses" class="clear">
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>	
                </form>
            </div>
        </div>
    </div>
</div>
<!--End mc_embed_signup--><?php
}, array(
	'options' => 160,
	'provider' => 'file',
	'name' => 'file:chunks/infocenter/readersReviews.tpl',
	'base_name' => 'chunks/infocenter/readersReviews.tpl',
	'time' => 1492423237,
	'depends' => array (
  'file' => 
  array (
    'chunks/infocenter/readersReviews.tpl' => 1492423237,
  ),
),
	'macros' => array(),

        ));
