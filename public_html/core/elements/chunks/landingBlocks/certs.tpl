 <div class="col-xs-12 no-padding sidebarCerts">
     {if ($_modx->resource.template!=4)}
     <h4 class="ratingsTitle">
         CBS Group - одна из лидирующих компаний России в области аудита, учета и консалтинга
     </h4>
     <div class="moduleAttachments">
     {$_modx->runSnippet('BannerY',[
        'position' => 3,
        'tpl' => '@INLINE <img src="{$image}" class="sidebarCertsImg img img-responsive">'
      ])}
     </div>
    <span class="infocenterRedModal">
        Узнать стоимость услуги в день обращения 
    </span>
        {$_modx->runSnippet('!AjaxForm',[
            'snippet' => 'FormIt',
            'form' => '@FILE: chunks/forms/getServiceCostForm.form.tpl',
            'hooks' => 'spam,email,FormItSaveForm',
            'emailSubject' => 'Узнать стоимость услуги {$_modx->resource.pagetitle}',
            'emailTo' => $_modx->config.form_email,
            'emailFrom' => $_modx->config.emailsender,
            'emailTpl' => 'getServiceCost.email.tpl',
            'validate' => 'servicePhone:required,tushenka:blank',
            'validationErrorMessage' => '<h5>В форме содержатся ошибки!</h5>',
            'successMessage' => '<h5>Сообщение успешно отправлено</h5>'
        ])}
     {/if}
     <div class="modalDelimeter"></div>
     {$_modx->runSnippet('BannerY',[
         'position' => 1,
         'tpl' => '@INLINE <a href="{$url}"><img src="{$image}" class="sidebarCertsImg img img-responsive"></a>'
    ])}
 </div>