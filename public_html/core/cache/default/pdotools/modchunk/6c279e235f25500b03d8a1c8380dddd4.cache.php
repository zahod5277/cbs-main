<?php  return '<?php 
/** Fenom template \'modchunk/6c279e235f25500b03d8a1c8380dddd4\' compiled at 2017-04-07 16:55:16 */
return new Fenom\\Render($fenom, function ($var, $tpl) {
?><div class="col-xs-6 leo-pagin-item">
    <div class="row">
        <div class="col-xs-5">
            <div class="docs-wrapper">
                <div class="moduleItemTitle RobotoLight" href="<?php
/* modchunk/6c279e235f25500b03d8a1c8380dddd4:5: {$_modx->makeUrl($id)} */
 echo $var["_modx"]->makeUrl($var["id"]); ?>">
                    <div class="RobotoBold reviewTitle">
                        <h3>
                            <?php
/* modchunk/6c279e235f25500b03d8a1c8380dddd4:8: {$pagetitle} */
 echo $var["pagetitle"]; ?>
                        </h3>
                    </div>
                </div>
                <?php
/* modchunk/6c279e235f25500b03d8a1c8380dddd4:12: {if $_pls[\'tv.reviewImg\']!=\'\'} */
 if($var["_pls"][\'tv.reviewImg\'] != \'\') { ?>
                <div class="moduleAttachments">
                    <a rel="nofollow" class="boxed" href="<?php
/* modchunk/6c279e235f25500b03d8a1c8380dddd4:14: {$_pls[\'tv.reviewImg\']} */
 echo $var["_pls"][\'tv.reviewImg\']; ?>">
                        Смотреть оригинал
                    </a>
                </div>
                <?php
/* modchunk/6c279e235f25500b03d8a1c8380dddd4:18: {/if} */
 } ?>
            </div>
        </div>

        <div class="col-xs-7">
            <div class="docs-introtext">
                <div class="moduleItemIntrotext">
                    <div>
                        <div class="reviews-post">
                            <div class="RobotoBold">
                                <?php
/* modchunk/6c279e235f25500b03d8a1c8380dddd4:28: {$longtitle} */
 echo $var["longtitle"]; ?>
                            </div>
                            <div class="RobotoBold">
                                <?php
/* modchunk/6c279e235f25500b03d8a1c8380dddd4:31: {$description} */
 echo $var["description"]; ?>
                            </div>
                        </div>
                        <div class="reviews-fio">
                            <?php
/* modchunk/6c279e235f25500b03d8a1c8380dddd4:35: {$_pls[\'tv.fioOtz\']} */
 echo $var["_pls"][\'tv.fioOtz\']; ?>
                        </div>
                        <div class="reviewIntrotext">
                            <?php
/* modchunk/6c279e235f25500b03d8a1c8380dddd4:38: {$introtext} */
 echo $var["introtext"]; ?>
                        </div>
                    </div>
                </div>

                <button class="btn btn-link keysReadMoreBtn" type="button" data-toggle="modal" data-target="#comment<?php
/* modchunk/6c279e235f25500b03d8a1c8380dddd4:43: {$idx} */
 echo $var["idx"]; ?>">
                    Читать отзыв
                </button>
            </div>
        </div>
    </div>

    <div class="modal fade leo-modal" id="comment<?php
/* modchunk/6c279e235f25500b03d8a1c8380dddd4:50: {$idx} */
 echo $var["idx"]; ?>" role="dialog" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div>
                        <button class="btn btn-link close-modal" data-dismiss="modal" type="button">
                            <img src="images/icon-close.png" />
                        </button>
                        <span class="blue"><?php
/* modchunk/6c279e235f25500b03d8a1c8380dddd4:58: {$pagetitle} */
 echo $var["pagetitle"]; ?></span>
                    </div>
                    <div class="body-review">
                        <div>
                            <?php
/* modchunk/6c279e235f25500b03d8a1c8380dddd4:62: {$content} */
 echo $var["content"]; ?>
                           </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php
}, array(
	\'options\' => 160,
	\'provider\' => false,
	\'name\' => \'modchunk/6c279e235f25500b03d8a1c8380dddd4\',
	\'base_name\' => \'runtime\',
	\'time\' => 0,
	\'depends\' => array (
  0 => 
  array (
    \'runtime\' => 0.0,
  ),
),
	\'macros\' => array(),

        ));
';