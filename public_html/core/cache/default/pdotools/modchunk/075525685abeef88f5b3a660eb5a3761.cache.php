<?php  return '<?php 
/** Fenom template \'modchunk/075525685abeef88f5b3a660eb5a3761\' compiled at 2017-04-07 16:55:16 */
return new Fenom\\Render($fenom, function ($var, $tpl) {
?><div class="col-xs-3 leo-pagin-item">
    <div class="docs-wrapper">
        <div class="RobotoLight keysRowTitleOuter">
            <div class="RobotoBold keysRowTitle">
                <h3>
                    <?php
/* modchunk/075525685abeef88f5b3a660eb5a3761:6: {$pagetitle} */
 echo $var["pagetitle"]; ?>
                </h3>
            </div>
        </div>

        <div class="docs-read-more">
            <button class="btn btn-link keysReadMoreBtn" type="button" data-toggle="modal" data-target="#read-more-<?php
/* modchunk/075525685abeef88f5b3a660eb5a3761:12: {$idx} */
 echo $var["idx"]; ?>">
                Читать текст
            </button>
        </div>
    </div>
    <div class="modal fade leo-modal" id="read-more-<?php
/* modchunk/075525685abeef88f5b3a660eb5a3761:17: {$idx} */
 echo $var["idx"]; ?>" role="dialog" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div>
                        <button class="btn btn-link close-modal" data-dismiss="modal" type="button">
                            <img src="images/icon-close.png" />
                        </button>
                        <span class="blue">
                            <?php
/* modchunk/075525685abeef88f5b3a660eb5a3761:26: {$pagetitle} */
 echo $var["pagetitle"]; ?>
                        </span>
                    </div>
                    <div class="body-review">
                        <?php
/* modchunk/075525685abeef88f5b3a660eb5a3761:30: {if $introtext!=\'\'} */
 if($var["introtext"] != \'\') { ?>
                        <?php
/* modchunk/075525685abeef88f5b3a660eb5a3761:31: {$introtext} */
 echo $var["introtext"]; ?>
                        <?php
/* modchunk/075525685abeef88f5b3a660eb5a3761:32: {else} */
 } else { ?>
                         <?php
/* modchunk/075525685abeef88f5b3a660eb5a3761:33: {$content} */
 echo $var["content"]; ?>
                        <?php
/* modchunk/075525685abeef88f5b3a660eb5a3761:34: {/if} */
 } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php
}, array(
	\'options\' => 160,
	\'provider\' => false,
	\'name\' => \'modchunk/075525685abeef88f5b3a660eb5a3761\',
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