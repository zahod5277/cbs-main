<?php 
/** Fenom template 'file:chunks/infocenter/new/articleContent.tpl' compiled at 2017-04-07 16:56:29 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?><div class="container outside-component">
    <div class="component-wrapper">
        <div id="fb-root"></div>
        <script>
            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.5&appId=890436047736649";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <span id="startOfPageId3438"></span>
        <div id="k2Container" class="leo-basic-inner-page itemView ">
            <div class="row">
                <div class="col-xs-8 ArticleContent mb40px">
                    <div class="infoCenterArticleTitle">
                        <div class="articleIco">
                            <span class="articleIconImg"></span>
                        </div>
                        <div class="articleTitle">
                            <h1><?php
/* file:chunks/infocenter/new/articleContent.tpl:24: {$_modx->resource.pagetitle} */
 echo $var["_modx"]->resource["pagetitle"]; ?></h1>
                        </div>
                    </div>
                    <div class="hidden-print infocenterRatingOuter">
                        <div class="itemDateCreatedOuter">
                            <!-- Date created -->
                            <span class="itemDateCreated greyText">
                                <?php
/* file:chunks/infocenter/new/articleContent.tpl:31: {$_modx->resource.createdon|date_format:'%d %B %Y'} */
 echo Fenom\Modifier::dateFormat($var["_modx"]->resource["createdon"], '%d %B %Y'); ?>
                            </span>
                        </div>
                        <div class="itemDateCreatedOuter infocenterNewsRating">
                            <div class="itemRatingBlock">
                                <span class="greyText">Рейтинг новости</span>
                                <div class="itemRatingForm ratingStars">
                                    <?php
/* file:chunks/infocenter/new/articleContent.tpl:44: {$_modx->runSnippet('@FILE:snippets/getRating.php',[
                                        'id' => $_modx->resource.id,
                                        'from' => 1,
                                        'to' => 5,
                                        'tpl' => '@FILE:chunks/infocenter/rating.row.tpl',
                                        'tplOuter' => '@FILE:chunks/infocenter/rating.outer.tpl'
                                    ])} */
 echo $var["_modx"]->runSnippet('@FILE:snippets/getRating.php', array('id' => $var["_modx"]->resource["id"], 'from' => 1, 'to' => 5, 'tpl' => '@FILE:chunks/infocenter/rating.row.tpl', 'tplOuter' => '@FILE:chunks/infocenter/rating.outer.tpl')); ?>
                                </div>
                                <div class="clr"></div>
                            </div>
                        </div>
                        <div class="itemDateCreatedOuter infocenterViews">
                            <span class="itemHits greyText">
                                <?php
/* file:chunks/infocenter/new/articleContent.tpl:53: {var $count = $_modx->runSnippet('!HitsPage',[
                                    'saveTv' => 'true'
                                ])} */
 $var["count"]=$var["_modx"]->runSnippet('!HitsPage', array('saveTv' => 'true')); ?>
                                Просмотров: <?php
/* file:chunks/infocenter/new/articleContent.tpl:54: {$count} */
 echo $var["count"]; ?> <i class="viewProgress"></i>
                            </span>
                        </div>
                    </div>
                    <div class="clr"></div>
                    <div class="itemBody padding0">
                        <div class="itemFullText infocenterFulltext">
                            <?php
/* file:chunks/infocenter/new/articleContent.tpl:61: {if $_modx->resource.content!=''} */
 if($var["_modx"]->resource["content"] != '') { ?>
                                <?php
/* file:chunks/infocenter/new/articleContent.tpl:62: {$_modx->resource.content} */
 echo $var["_modx"]->resource["content"]; ?>
                            <?php
/* file:chunks/infocenter/new/articleContent.tpl:63: {else} */
 } else { ?>
                                <?php
/* file:chunks/infocenter/new/articleContent.tpl:64: {$_modx->resource.introtext} */
 echo $var["_modx"]->resource["introtext"]; ?>
                            <?php
/* file:chunks/infocenter/new/articleContent.tpl:65: {/if} */
 } ?>
                        </div>
                    </div>
                    <div class="hidden-print">
                    </div>
                    <div class="infocenterUnderContent hidden-print">
                        <div class="ratingAndSocials">
                            <div class="underContentRating">
                                <span class="underContentRatingTitle">Оцените новость</span>
                                <div class="itemRatingForm ratingStars">
                                    <?php
/* file:chunks/infocenter/new/articleContent.tpl:81: {$_modx->runSnippet('@FILE:snippets/getRating.php',[
                                        'id' => $_modx->resource.id,
                                        'from' => 1,
                                        'to' => 5,
                                        'tpl' => '@FILE:chunks/infocenter/rating.row.tpl',
                                        'tplOuter' => '@FILE:chunks/infocenter/ratingEmpty.outer.tpl'
                                    ])} */
 echo $var["_modx"]->runSnippet('@FILE:snippets/getRating.php', array('id' => $var["_modx"]->resource["id"], 'from' => 1, 'to' => 5, 'tpl' => '@FILE:chunks/infocenter/rating.row.tpl', 'tplOuter' => '@FILE:chunks/infocenter/ratingEmpty.outer.tpl')); ?>
                                </div>
                                <div class="underContentShareIcons">
                                <span>Поделиться с друзьями и коллегами:</span>
                                <?php
/* file:chunks/infocenter/new/articleContent.tpl:85: {include 'file:chunks/common/shareIcons.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/common/shareIcons.tpl')->display($var); ?>
                                </div>
                            </div>
                        </div>
                        <div class="tagsAndPrintSend">
                            <div class="">
                                <!-- Item tags -->
                                <div class="itemTagsBlock no-label">
                                    <span class="underContentTagsTitle">
                                        <i class="labelIco"></i>
                                        <span>Теги по теме [[#[[#[[*id]].parent]].pagetitle]]</span>
                                    </span>
                                    <?php
/* file:chunks/infocenter/new/articleContent.tpl:100: {$_modx->runSnippet('@FILE:snippets/getTags.php',[
                                        'id' => $_modx->resource.id,
                                        'tpl' => '@FILE:chunks/infocenter/new/tags.row.tpl'
                                        ])} */
 echo $var["_modx"]->runSnippet('@FILE:snippets/getTags.php', array('id' => $var["_modx"]->resource["id"], 'tpl' => '@FILE:chunks/infocenter/new/tags.row.tpl')); ?>
                                </div>
                            </div>
                            <div class="floatLeft printSendOuter">
                                <!-- Print Button -->
                                <a class="underContentPrintBtn" rel="nofollow" href="<?php
/* file:chunks/infocenter/new/articleContent.tpl:105: {$_modx->makeUrl($_modx->resource.id)} */
 echo $var["_modx"]->makeUrl($var["_modx"]->resource["id"]); ?>">
                                    <i class="printer"></i>Хочу распечатать
                                </a>
                                <a class="underContentSendBtn" href="#" data-toggle="modal" data-target="#send-article-to-email">
                                    <i class="mailbox"></i>
                                    Отправить на E-mail
                                </a>
                            </div>
                        </div>    
                    </div>
                </div>
                <?php
/* file:chunks/infocenter/new/articleContent.tpl:116: {include 'file:chunks/infocenter/new/sidebar.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/infocenter/new/sidebar.tpl')->display($var); ?>
            </div>
            <?php
/* file:chunks/infocenter/new/articleContent.tpl:118: {include 'file:chunks/infocenter/new/articleFormAndRecommended.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/infocenter/new/articleFormAndRecommended.tpl')->display($var); ?>
        </div>
        
        <script type="text/javascript">
            jQuery(document).ready(function () {
                var $button = '<div style="text-align: right;"><a href="/search" class="breadcrumd-link RobotoLight">Найти публикации</a></div>';
                $('.breadcrums-link').append($button);
            });
        </script>
        
    </div>
</div><?php
}, array(
	'options' => 160,
	'provider' => 'file',
	'name' => 'file:chunks/infocenter/new/articleContent.tpl',
	'base_name' => 'chunks/infocenter/new/articleContent.tpl',
	'time' => 1491482635,
	'depends' => array (
  'file' => 
  array (
    'chunks/infocenter/new/articleContent.tpl' => 1491482635,
  ),
),
	'macros' => array(),

        ));
