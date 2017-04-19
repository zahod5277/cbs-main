<?php 
/** Fenom template 'file:chunks/infocenter/introSearch.tpl' compiled at 2017-04-07 17:44:28 */
return new Fenom\Render($fenom, function ($var, $tpl) {
?><div class="container">
    <div class="">
        <div class="custom">
            <div class="blue module-title">
                <h1>Инфо-центр</h1>
            </div>
            <div class="RobotoLight infoCenterP">
                <?php
/* file:chunks/infocenter/introSearch.tpl:8: {$_modx->resource.content} */
 echo $var["_modx"]->resource["content"]; ?>
            </div>
        </div>
    </div>
    <div>
        <div class="custom margin40-0px">
            <?php
/* file:chunks/infocenter/introSearch.tpl:14: {include 'file:chunks/infocenter/searchForm.tpl'} */
 $tpl->getStorage()->getTemplate('file:chunks/infocenter/searchForm.tpl')->display($var); ?>
        </div>
    </div>
    <div class=" ">
        <div class="custom">
            <div class="page-about-info-center">
                <div class="row ">
                    <div class="col-xs-6">
                        <div>
                            <div class="wrapper-about-info-center">
                                <div class="img-1 about-info-center">
                                    &nbsp;
                                </div>
                            </div>
                            <div class="text-about-info-center">
                                <div class="RobotoBold">
                                    Что такое Инфо-центр
                                </div>
                                <div>
                                    Еженедельно мы публикуем и рассылаем информацию об основных изменениях в сфере финансов, налогов и учета. Она включает только самые важные, нужные и актуальные новости, законы, проекты, письма, постановления и т.д.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div>
                            <div class="wrapper-about-info-center">
                                <div class="img-2 about-info-center">
                                    &nbsp;
                                </div>
                            </div>
                            <div class="text-about-info-center">
                                <div class="RobotoBold">
                                    Кто готовит
                                </div>
                                <div>
                                    Информацию собирают и готовят специалисты-практики с опытом в сфере финансов, налогообложения и учета более 15 лет.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <div>
                            <div class="wrapper-about-info-center">
                                <div class="img-3 about-info-center">
                                    &nbsp;
                                </div>
                            </div>
                            <div class="text-about-info-center">
                                <div class="RobotoBold">
                                    Откуда информация
                                </div>
                                <div>
                                    Более чем 20 источников, включая известные и популярные издания, официальные сайты Правительства РФ, Государственной думы, Минфина, Высшего Арбитражного Суда, Единого портала.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div>
                            <div class="wrapper-about-info-center">
                                <div class="img-4 about-info-center">
                                    &nbsp;
                                </div>
                            </div>
                            <div class="text-about-info-center">
                                <div class="RobotoBold">
                                    Для кого
                                </div>
                                <div>
                                    Целевая аудитория нашей рассылки &mdash; CEO, Финансовый директор, Главный бухгалтер, Бухгалтер, Юрист, Внутренний контролер (аудитор), Специалист департамента налогообложения, Специалист по отчетности.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-about-info-center-inline">
                <div class="row">
                    <div class="col-xs-3">
                        <div class="wrapper-about-info-center">
                            <div class="img-5 about-info-center-inline">
                                &nbsp;
                            </div>
                        </div>
                        <div class="text-about-info-center-inline">
                            Проекту &gt;3 лет
                            <br /> и он бесплатный
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="wrapper-about-info-center">
                            <div class="img-6 about-info-center-inline">
                                &nbsp;
                            </div>
                        </div>
                        <div class="text-about-info-center-inline">
                            Вышло более
                            <br /> 200 выпусков
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="wrapper-about-info-center">
                            <div class="img-7 about-info-center-inline">
                                &nbsp;
                            </div>
                        </div>
                        <div class="text-about-info-center-inline">
                            Размещено более
                            <br /> 10 000 публикаций
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="wrapper-about-info-center">
                            <div class="img-8 about-info-center-inline">
                                &nbsp;
                            </div>
                        </div>
                        <div class="text-about-info-center-inline">
                            У нас более 50 000 подписчиков
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}, array(
	'options' => 160,
	'provider' => 'file',
	'name' => 'file:chunks/infocenter/introSearch.tpl',
	'base_name' => 'chunks/infocenter/introSearch.tpl',
	'time' => 1491482635,
	'depends' => array (
  'file' => 
  array (
    'chunks/infocenter/introSearch.tpl' => 1491482635,
  ),
),
	'macros' => array(),

        ));
