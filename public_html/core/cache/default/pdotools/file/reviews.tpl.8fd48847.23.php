<?php 
/** Fenom template 'file:chunks/company/reviews.tpl' compiled at 2017-04-07 17:13:16 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?><div class=" white-bg" id="reviews-company">
    <div class="blue module-title">
        <h2>Отзывы клиентов</h2>
    </div>
    <noindex>
        <a name="our-reviews" class="our-reviews"></a>
        <div id="k2ModuleBox163" class="_page_about_company_revies k2ItemsBlock white-bg">
            <div class="row">
                <?php
/* file:chunks/company/reviews.tpl:22: {$_modx->runSnippet('!pdoResources',[
                   'parents' => 5029,
                   'hideContainers' => 1,
                   'limit' => 120,
                   'includeContent' => 1,
                   'includeTVs' => 'fioOtz,reviewImg,companyOrder',
                   'prepareTVs' => 1,
                   'processTVs' => 1,
                   'sortby' => 'companyOrder',
                   'sortdir' => 'ASC',
                   'showUnpublished' => 1,
                   'where' => '{"companyOrder:!=":""}',
                   'tpl' => '@FILE:chunks/company/reviews.row.tpl'
                ])} */
 echo $var["_modx"]->runSnippet('!pdoResources', array('parents' => 5029, 'hideContainers' => 1, 'limit' => 120, 'includeContent' => 1, 'includeTVs' => 'fioOtz,reviewImg,companyOrder', 'prepareTVs' => 1, 'processTVs' => 1, 'sortby' => 'companyOrder', 'sortdir' => 'ASC', 'showUnpublished' => 1, 'where' => '{"companyOrder:!=":""}', 'tpl' => '@FILE:chunks/company/reviews.row.tpl')); ?>
            </div>
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
        </div>
    </noindex>
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", init());
        function init() {
            customLeoPagenator(
                    1,
                    jQuery('._page_about_company_revies'),
                    jQuery('._page_about_company_revies .leo-paginator'),
                    4,
                    true
                    );
            SqueezeBox.assign($$('a.boxed'));
        }
    </script>
</div><?php
}, array(
	'options' => 160,
	'provider' => 'file',
	'name' => 'file:chunks/company/reviews.tpl',
	'base_name' => 'chunks/company/reviews.tpl',
	'time' => 1491482635,
	'depends' => array (
  'file' => 
  array (
    'chunks/company/reviews.tpl' => 1491482635,
  ),
),
	'macros' => array(),

        ));
