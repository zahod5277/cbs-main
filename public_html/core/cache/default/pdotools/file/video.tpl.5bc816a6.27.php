<?php 
/** Fenom template 'file:chunks/landingBlocks/video.tpl' compiled at 2017-04-07 16:56:06 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?><?php
/* file:chunks/landingBlocks/video.tpl:1: {if $_modx->resource.video!=''} */
 if($var["_modx"]->resource["video"] != '') { ?>
    <?php
/* file:chunks/landingBlocks/video.tpl:2: {var $video = $_modx->resource.video} */
 $var["video"]=$var["_modx"]->resource["video"]; ?>
    <?php
/* file:chunks/landingBlocks/video.tpl:3: {else} */
 } else { ?>
    <?php
/* file:chunks/landingBlocks/video.tpl:4: {var $video = '<h2>Видео-ролик еще не загружен</h2>'} */
 $var["video"]='<h2>Видео-ролик еще не загружен</h2>'; ?>
<?php
/* file:chunks/landingBlocks/video.tpl:5: {/if} */
 } ?>
<?php
/* file:chunks/landingBlocks/video.tpl:6: {if $_modx->resource.videoImg!=''} */
 if($var["_modx"]->resource["videoImg"] != '') { ?>
    <?php
/* file:chunks/landingBlocks/video.tpl:7: {var $videoImg = 'style="background:url('~$_modx->resource.videoImg~')no-repeat scroll left top;"'} */
 $var["videoImg"]=('style="background:url('.strval($var["_modx"]->resource["videoImg"]).strval(')no-repeat scroll left top;"')); ?>
    <?php
/* file:chunks/landingBlocks/video.tpl:8: {else} */
 } else { ?>
    <?php
/* file:chunks/landingBlocks/video.tpl:9: {var $videoImg = ''} */
 $var["videoImg"]=''; ?>
<?php
/* file:chunks/landingBlocks/video.tpl:10: {/if} */
 } ?>
<div class="our-advantage-videoblockf">
    <div class="container">
        <div class=" ">
            <div class="custom">
                <div class="wathc-video" <?php
/* file:chunks/landingBlocks/video.tpl:15: {$videoImg} */
 echo $var["videoImg"]; ?>>
                    <div class="inner-watch-video">
                        <a data-target="#dispaly-movie" data-toggle="modal" href="#"><img src="/images/icon-play.png" />
                        </a>
                        <div class="watchVideoBtn">
                            смотреть подробное видео об услуге
                        </div>
                    </div>
                </div>
                <div class="modal fade leo-modal" id="dispaly-movie" role="dialog" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div>
                                    <button class="btn btn-link close-modal" data-dismiss="modal" type="button">
                                        <img src="images/icon-close.png" />
                                    </button>
                                </div>
                                <div class="body-review">
                                    <?php
/* file:chunks/landingBlocks/video.tpl:34: {$video} */
 echo $var["video"]; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php
}, array(
	'options' => 160,
	'provider' => 'file',
	'name' => 'file:chunks/landingBlocks/video.tpl',
	'base_name' => 'chunks/landingBlocks/video.tpl',
	'time' => 1491573356,
	'depends' => array (
  'file' => 
  array (
    'chunks/landingBlocks/video.tpl' => 1491573356,
  ),
),
	'macros' => array(),

        ));
