 <div class="col-xs-12 no-padding sidebarCerts">
     {if ($_modx->resource.template!=4)}
     <h4 class="ratingsTitle">
         CBS Group - одна из лидирующих компаний России в области аудита, учета и консалтинга
     </h4>
     <div class="moduleAttachments">
     <a href="images/certs/certificate1Thumb.jpg" class="boxed" rel="images/certs/certificate1Thumb.jpg"><img src="images/certs/certificate1MicroThumb.jpg" class="sidebarCertsImg img img-responsive"></a>
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
     <a href="{'5584'|url}"><img src="images/certs/1.jpg" class="sidebarCertsImg img img-responsive"></a>
     <a href="{'5524'|url}"><img src="images/certs/2.jpg" class="sidebarCertsImg img img-responsive"></a>
     <a href="{'5545'|url}"><img src="images/certs/3.jpg" class="sidebarCertsImg img img-responsive"></a>
     <a href="{'5544'|url}"><img src="images/certs/4.jpg" class="sidebarCertsImg img img-responsive"></a>
     <a href="{'5585'|url}"><img src="images/certs/5.jpg" class="sidebarCertsImg img img-responsive"></a>
 </div>