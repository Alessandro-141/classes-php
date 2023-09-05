<?php
  // Executar no navegador:
  // http://localhost/classes_php/datas.php

// Declare two dates = Declarar duas datas
$Date1 = '01-10-2010';
$Date2 = '05-10-2010';
  
// Declare an empty array = Declarar um array vazio
$array = array();
  
// Use strtotime function = Use a função strtotime
$Variable1 = strtotime($Date1);
$Variable2 = strtotime($Date2);
  
// Use for loop to store dates into array
// 86400 sec = 24 hrs = 60*60*24 = 1 day
/* Traduziodo:
/ Use o loop for para armazenar datas no array
// 86400 segundos = 24 horas = 60*60*24 = 1 dia
*/
for ($currentDate = $Variable1; $currentDate <= $Variable2; 
                                $currentDate += (86400)) {
                                      
$Store = date('Y-m-d', $currentDate);
$array[] = $Store;
}
  
// Display the dates in array format = Exibir as datas em formato de array
print_r($array);
/* SAÍDA:
Array ( [0] => 2010-10-01 [1] => 2010-10-02 [2] => 2010-10-03 [3] => 2010-10-04 [4] => 2010-10-05 )
*/
?>