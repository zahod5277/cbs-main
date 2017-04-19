<?php  return '<?php 
/** Fenom template \'modchunk/b14fea22f0717b4a63802e49ccf3e050\' compiled at 2017-04-07 17:13:16 */
return new Fenom\\Render($fenom, function ($var, $tpl) {
?><div class="col-xs-6 leo-pagin-item">
    <div class="row">
        <div class="col-xs-5">
            <div class="docs-wrapper">
                <div class="moduleItemTitle RobotoLight" href="<?php
/* modchunk/b14fea22f0717b4a63802e49ccf3e050:5: {$_modx->makeUrl($id)} */
 echo $var["_modx"]->makeUrl($var["id"]); ?>">
                    <div class="RobotoBold px14">
                        <h3>
                            <?php
/* modchunk/b14fea22f0717b4a63802e49ccf3e050:8: {$pagetitle} */
 echo $var["pagetitle"]; ?>
                        </h3>
                    </div>
                </div>
                <div class="moduleAttachments">
                    <?php
/* modchunk/b14fea22f0717b4a63802e49ccf3e050:13: {if $_pls[\'tv.reviewImg\']} */
 if($var["_pls"][\'tv.reviewImg\']) { ?>
                        <a class="boxed" href="<?php
/* modchunk/b14fea22f0717b4a63802e49ccf3e050:14: {$_pls[\'tv.reviewImg\']} */
 echo $var["_pls"][\'tv.reviewImg\']; ?>">
                            Смотреть оригинал
                        </a>
                    <?php
/* modchunk/b14fea22f0717b4a63802e49ccf3e050:17: {/if} */
 } ?>
                </div>
            </div>
        </div>
        <div class="col-xs-7">
            <div class="docs-introtext">
                <div class="moduleItemIntrotext">
                    <div>
                        <div class="reviews-post">
                            <div class="RobotoBold">
                                <?php
/* modchunk/b14fea22f0717b4a63802e49ccf3e050:27: {$longtitle} */
 echo $var["longtitle"]; ?>
                            </div>
                            <div class="RobotoBold">
                                <?php
/* modchunk/b14fea22f0717b4a63802e49ccf3e050:30: {$description} */
 echo $var["description"]; ?>
                            </div>
                        </div>
                        <div class="reviews-fio">
                            <?php
/* modchunk/b14fea22f0717b4a63802e49ccf3e050:34: {$_pls[\'tv.fioOtz\']} */
 echo $var["_pls"][\'tv.fioOtz\']; ?>
                        </div>
                        <div class="reviewCompanyText">
                            <p>
                                <?php
/* modchunk/b14fea22f0717b4a63802e49ccf3e050:38: {$introtext} */
 echo $var["introtext"]; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <button class="btn btn-link read_review_btn" type="button" data-toggle="modal" data-target="#comment<?php
/* modchunk/b14fea22f0717b4a63802e49ccf3e050:43: {$idx} */
 echo $var["idx"]; ?>">
                    Читать отзыв
                </button>

            </div>
        </div>
    </div>

    <div class="modal fade leo-modal" id="comment<?php
/* modchunk/b14fea22f0717b4a63802e49ccf3e050:51: {$idx} */
 echo $var["idx"]; ?>" role="dialog" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div>
                        <button class="btn btn-link close-modal" data-dismiss="modal" type="button">
                            <img src="/images/icon-close.png" />
                        </button>
                        <span class="blue"><?php
/* modchunk/b14fea22f0717b4a63802e49ccf3e050:59: {$pagetitle} */
 echo $var["pagetitle"]; ?></span>
                    </div>
                    <div class="body-review">
                        <div>
                            <?php
/* modchunk/b14fea22f0717b4a63802e49ccf3e050:63: {$content} */
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
	\'name\' => \'modchunk/b14fea22f0717b4a63802e49ccf3e050\',
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