<?php 
/** Fenom template 'file:chunks/company/slider.tpl' compiled at 2017-04-07 17:13:16 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?><div class="main-slider">
    <div class="container">
        <div class="custom">
            <br>
            <div>
                <h1 class="RobotoBold title-top-block mainTitle upper-case">
                         <?php
/* file:chunks/company/slider.tpl:7: {$_modx->resource.landingTitle} */
 echo $var["_modx"]->resource["landingTitle"]; ?>
                </h1>
            </div>
            <div class="RobotoLight after-title white-line">
                 <?php
/* file:chunks/company/slider.tpl:11: {$_modx->resource.landingSlogan} */
 echo $var["_modx"]->resource["landingSlogan"]; ?>
            </div>
            <div class="RobotoLight after-title">
                 <?php
/* file:chunks/company/slider.tpl:14: {$_modx->resource.landingDescr} */
 echo $var["_modx"]->resource["landingDescr"]; ?>
            </div>
            <div class="about-compane-yellow-icons">
                <div class="row">
                    <div class="col-xs-4">
                        <div class="yellow-icons yellow-icons-1">
                            &nbsp;
                        </div>
                        <a href="#about-company">
                            Краткий экскурс<br />
                            о компании
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <div class="yellow-icons yellow-icons-2">
                            &nbsp;
                        </div>
                        <a href="#principle-company">
                            Принципы<br />
                            нашей работы
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <div class="yellow-icons yellow-icons-3">
                            &nbsp;
                        </div>
                        <a href="#peoples-company">
                            Информация о
                            <br />
                            ключевых экспертах
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <div class="yellow-icons yellow-icons-4">
                            &nbsp;</div>
                        <a href="#keys-company">
                            Невыдуманные кейсы<br />
                            наших проектов
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <div class="yellow-icons yellow-icons-5">
                            &nbsp;
                        </div>
                        <a href="#reviews-company">
                            Настоящие отзывы<br />наших клиентов
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <div class="yellow-icons yellow-icons-6">
                            &nbsp;
                        </div>
                        <a href="#about-company">
                            Основные факты<br />
                            в цифрах
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php
/* file:chunks/company/slider.tpl:74: {include 'file:chunks/company/sendAnketa.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/company/sendAnketa.tpl')->display($var); ?>
        <?php
/* file:chunks/company/slider.tpl:75: {include 'file:chunks/company/modal.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/company/modal.tpl')->display($var); ?>
    </div>
</div><?php
}, array(
	'options' => 160,
	'provider' => 'file',
	'name' => 'file:chunks/company/slider.tpl',
	'base_name' => 'chunks/company/slider.tpl',
	'time' => 1491482635,
	'depends' => array (
  'file' => 
  array (
    'chunks/company/slider.tpl' => 1491482635,
  ),
),
	'macros' => array(),

        ));
