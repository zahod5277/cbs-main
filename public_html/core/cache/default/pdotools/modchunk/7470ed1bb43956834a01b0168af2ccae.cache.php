<?php  return '<?php 
/** Fenom template \'modchunk/7470ed1bb43956834a01b0168af2ccae\' compiled at 2017-04-07 16:55:16 */
return new Fenom\\Render($fenom, function ($var, $tpl) {
?><?php
/* modchunk/7470ed1bb43956834a01b0168af2ccae:1: {if $idx % 2==\'1\'} */
 if($var["idx"] % 2 == \'1\') { ?>
    <div class="row">
<?php
/* modchunk/7470ed1bb43956834a01b0168af2ccae:3: {/if} */
 } ?>
    <div class="col-xs-6">
        <div class="page-service-company">
            <div class="title-service upper-case childServiceRowTitle RobotoBold">
                <h3>
                     <a href="<?php
/* modchunk/7470ed1bb43956834a01b0168af2ccae:8: {$_modx->makeUrl($id)} */
 echo $var["_modx"]->makeUrl($var["id"]); ?>" title="<?php
/* modchunk/7470ed1bb43956834a01b0168af2ccae:8: {$pagetitle} */
 echo $var["pagetitle"]; ?>">
                        <?php
/* modchunk/7470ed1bb43956834a01b0168af2ccae:9: {$pagetitle} */
 echo $var["pagetitle"]; ?>
                    </a>
                </h3>
            </div>
            <div class="body-service">
                <div class="body-serviceP">
                    <p><?php
/* modchunk/7470ed1bb43956834a01b0168af2ccae:15: {$introtext} */
 echo $var["introtext"]; ?></p>              
                </div>
                <div class="calculator-wrapper">
                    <?php
/* modchunk/7470ed1bb43956834a01b0168af2ccae:18: {var $wrapper = \'childServicePriceWrapper\'} */
 $var["wrapper"]=\'childServicePriceWrapper\'; ?>
                    <?php
/* modchunk/7470ed1bb43956834a01b0168af2ccae:19: {if $_pls[\'tv.simplePrice\']!=\'\'} */
 if($var["_pls"][\'tv.simplePrice\'] != \'\') { ?>
                        <?php
/* modchunk/7470ed1bb43956834a01b0168af2ccae:20: {var $var = \'simplePrice\'} */
 $var["var"]=\'simplePrice\'; ?>
                        <?php
/* modchunk/7470ed1bb43956834a01b0168af2ccae:21: {var $tpl = \'simplePriceTpl\'} */
 $var["tpl"]=\'simplePriceTpl\'; ?>
                    <?php
/* modchunk/7470ed1bb43956834a01b0168af2ccae:22: {/if} */
 } ?>
                    <?php
/* modchunk/7470ed1bb43956834a01b0168af2ccae:23: {if $_pls[\'tv.hourPrice\']!=\'\'} */
 if($var["_pls"][\'tv.hourPrice\'] != \'\') { ?>
                        <?php
/* modchunk/7470ed1bb43956834a01b0168af2ccae:24: {var $var = \'hourPrice\'} */
 $var["var"]=\'hourPrice\'; ?>
                        <?php
/* modchunk/7470ed1bb43956834a01b0168af2ccae:25: {var $tpl = \'hourPriceTpl\'} */
 $var["tpl"]=\'hourPriceTpl\'; ?>
                    <?php
/* modchunk/7470ed1bb43956834a01b0168af2ccae:26: {/if} */
 } ?>
                    <?php
/* modchunk/7470ed1bb43956834a01b0168af2ccae:27: {if $_pls[\'tv.selectBoxPrice\']!=\'\'} */
 if($var["_pls"][\'tv.selectBoxPrice\'] != \'\') { ?>
                        <?php
/* modchunk/7470ed1bb43956834a01b0168af2ccae:28: {var $var = \'selectBoxPrice\'} */
 $var["var"]=\'selectBoxPrice\'; ?>
                        <?php
/* modchunk/7470ed1bb43956834a01b0168af2ccae:29: {var $tpl = \'selectBoxPriceTpl\'} */
 $var["tpl"]=\'selectBoxPriceTpl\'; ?>
                        <?php
/* modchunk/7470ed1bb43956834a01b0168af2ccae:30: {var $wrapper = \'selectBoxPriceTplWrapper\'} */
 $var["wrapper"]=\'selectBoxPriceTplWrapper\'; ?>
                    <?php
/* modchunk/7470ed1bb43956834a01b0168af2ccae:31: {/if} */
 } ?>
                    <div class="priceTitle">
                        <?php
/* modchunk/7470ed1bb43956834a01b0168af2ccae:33: {$_pls[\'tv.PriceTitle\']} */
 echo $var["_pls"][\'tv.PriceTitle\']; ?>
                    </div>
                    <?php
/* modchunk/7470ed1bb43956834a01b0168af2ccae:40: {$_modx->runSnippet(\'getImageList\',[
                        \'tvname\' => $var,
                        \'tpl\' => $tpl,
                        \'docid\' => $id,
                        \'wrapperTpl\' => $wrapper
                    ])} */
 echo $var["_modx"]->runSnippet(\'getImageList\', array(\'tvname\' => $var["var"], \'tpl\' => $var["tpl"], \'docid\' => $var["id"], \'wrapperTpl\' => $var["wrapper"])); ?>
                </div>
            </div>
            <div class="footer-service">
                    <div class="calculator-description">
                        <?php
/* modchunk/7470ed1bb43956834a01b0168af2ccae:45: {$_pls[\'tv.PriceFooter\']} */
 echo $var["_pls"][\'tv.PriceFooter\']; ?>
                    </div>
                <button class="leo-button-block leo-blue-button give-service" data-service="<?php
/* modchunk/7470ed1bb43956834a01b0168af2ccae:47: {$pagetitle} */
 echo $var["pagetitle"]; ?>" data-target="#give-service" data-toggle="modal">
                    <?php
/* modchunk/7470ed1bb43956834a01b0168af2ccae:48: {$_pls[\'tv.buttonText\']} */
 echo $var["_pls"][\'tv.buttonText\']; ?>
                </button>
            </div>
        </div>
    </div>
<?php
/* modchunk/7470ed1bb43956834a01b0168af2ccae:53: {var $totalus = $_modx->getPlaceholder(\'totalus\')} */
 $var["totalus"]=$var["_modx"]->getPlaceholder(\'totalus\'); ?> 
<?php
/* modchunk/7470ed1bb43956834a01b0168af2ccae:54: {if ($idx % 2==\'0\') || ($idx == $totalus)} */
 if(($var["idx"] % 2 == \'0\') || ($var["idx"] == $var["totalus"])) { ?>
    </div>
<?php
/* modchunk/7470ed1bb43956834a01b0168af2ccae:56: {/if} */
 } ?><?php
}, array(
	\'options\' => 160,
	\'provider\' => false,
	\'name\' => \'modchunk/7470ed1bb43956834a01b0168af2ccae\',
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