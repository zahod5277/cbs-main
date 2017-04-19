<?php
/*Активируем почтовый сервис MODX*/
$modx->getService('mail', 'mail.modPHPMailer');
$modx->mail->set(modMail::MAIL_FROM, $modx->getOption('emailsender'));
$modx->mail->set(modMail::MAIL_FROM_NAME, $modx->getOption('site_name'));

//тема письма
$subject = $hook->getValue('subject');

/*Адрес получателя нашего письма получаем из заполненной формы*/
$email = $hook->getValue('email');
$modx->mail->address('to', $email);

$file = $modx->config['base_path'].$hook->getValue('file'); // путь к файлу
if ($file=='none'){return;}
$path_parts = pathinfo($hook->getValue('file'));
$name = $path_parts['filename'].'.'.$path_parts['extension'];

$modx->mail->attach($file,$name);

/*Заголовок сообщения*/
$modx->mail->set(modMail::MAIL_SUBJECT, $subject);

$modx->mail->set(modMail::MAIL_BODY, $modx->getChunk('presentation'));

/*Отправляем*/
$modx->mail->setHTML(true);
if (!$modx->mail->send()) {
    $modx->log(modX::LOG_LEVEL_ERROR,'An error occurred while trying to send the email: '.$modx->mail->mailer->ErrorInfo);
}
$modx->mail->reset();
return;
