<?php  return '<?php 
/** Fenom template \'modchunk/36c7c440d2ff98e4e36084d9c45d6b6a\' compiled at 2017-04-07 17:01:19 */
return new Fenom\\Render($fenom, function ($var, $tpl) {
?><li class="reviewRowLi">
    <div class="slide-desc">
        <div class="slide-desc-in">	
            <div class="slide-desc-bg slide-desc-bg-default"></div>
            <div class="slide-desc-text slide-desc-text-default">
                <div class="slide-text">
                    <div class="row">
                        <div class="col-xs-3">
                            <img src="<?php
/* modchunk/36c7c440d2ff98e4e36084d9c45d6b6a:9: {$_pls[\'tv.otzLogo\']} */
 echo $var["_pls"][\'tv.otzLogo\']; ?>" />
                        </div>
                        <div class="col-xs-9">
                            <div class="comment-desc">
                                <div>
                                    <div class="dark upper-case comments-author">
                                        <div>
                                            <?php
/* modchunk/36c7c440d2ff98e4e36084d9c45d6b6a:16: {$longtitle} */
 echo $var["longtitle"]; ?>
                                        </div>
                                        <div>
                                            <b><?php
/* modchunk/36c7c440d2ff98e4e36084d9c45d6b6a:19: {$description} */
 echo $var["description"]; ?></b>
                                        </div>
                                    </div>
                                    <div class="comment-fio dark-light"><?php
/* modchunk/36c7c440d2ff98e4e36084d9c45d6b6a:22: {$_pls[\'tv.fioOtz\']} */
 echo $var["_pls"][\'tv.fioOtz\']; ?></div>
                                </div>
                            </div>
                            <div class="comment-read-more">
                                <button class="btn blue upper-case" data-target="#comment<?php
/* modchunk/36c7c440d2ff98e4e36084d9c45d6b6a:26: {$idx} */
 echo $var["idx"]; ?>" data-toggle="modal" href="#" type="button">
                                    Читать отзыв
                                </button>
                            </div>
                            <div class="modal fade leo-modal " id="comment<?php
/* modchunk/36c7c440d2ff98e4e36084d9c45d6b6a:30: {$idx} */
 echo $var["idx"]; ?>">
                                <div class="modal-dialog">
                                    <div class="modal-content dark">
                                        <div class="modal-body dark">
                                            <button class="btn btn-link close-modal" data-dismiss="modal" type="button">
                                                <img src="images/icon-close.png" />
                                            </button>
                                            <span class="blue">
                                                <?php
/* modchunk/36c7c440d2ff98e4e36084d9c45d6b6a:38: {if $_pls[\'tv.otzTitle\']!=\'\'} */
 if($var["_pls"][\'tv.otzTitle\'] != \'\') { ?>
                                                    <?php
/* modchunk/36c7c440d2ff98e4e36084d9c45d6b6a:39: {$_pls[\'tv.otzTitle\']} */
 echo $var["_pls"][\'tv.otzTitle\']; ?>
                                                    <?php
/* modchunk/36c7c440d2ff98e4e36084d9c45d6b6a:40: {else} */
 } else { ?>
                                                    <?php
/* modchunk/36c7c440d2ff98e4e36084d9c45d6b6a:41: {$longtitle} */
 echo $var["longtitle"]; ?> <?php
/* modchunk/36c7c440d2ff98e4e36084d9c45d6b6a:41: {$description} */
 echo $var["description"]; ?>
                                                <?php
/* modchunk/36c7c440d2ff98e4e36084d9c45d6b6a:42: {/if} */
 } ?>
                                            </span>
                                            <div class="body-review">
                                                <?php
/* modchunk/36c7c440d2ff98e4e36084d9c45d6b6a:45: {$content} */
 echo $var["content"]; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="clear: both"></div>
            </div>
        </div>
    </div>
</li><?php
}, array(
	\'options\' => 160,
	\'provider\' => false,
	\'name\' => \'modchunk/36c7c440d2ff98e4e36084d9c45d6b6a\',
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