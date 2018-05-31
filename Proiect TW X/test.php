<?php 

if(!$xml=simplexml_load_file('Pinnochio.xml')){
trigger_error('Error reading XML file',E_USER_ERROR);
}
$poveste=$xml->poveste;
function inlocuieste_cuv_ro($cuvinte){ 
$cauta_cuvant = array( 
'ă','ţ','î','ş','â','—'
); 

$inlocuieste = array( 
//Cuvintele cu care trebuiesc inlocuite $cauta_cuvant. 
'a','t', 'i' ,'s','a','-'
); 

$cuvinte_inlocuite = str_replace($cauta_cuvant,$inlocuieste,$cuvinte); 

return $cuvinte_inlocuite; 
} 
echo inlocuieste_cuv_ro($poveste);
?> 