<?php
$month_arr = array(
  '01' => 'января',
  '02' => 'февраля',
  '03' => 'марта',
  '04' => 'апреля',
  '05' => 'мая',
  '06' => 'июня',
  '07' => 'июля',
  '08' => 'августа',
  '09' => 'сентября',
  '10' => 'октября',
  '11' => 'ноября',
  '12' => 'декабря'
);

$d = $input; 
$month = strftime("%m",$d); 
$year = strftime("%Y",$d); 
$day = strftime("%e",$d); 
$month = $month_arr[$month]; 

return $day.' '.$month.' '.$year;
return;
