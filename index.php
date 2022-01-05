<?php 
error_reporting(-1);
// Дано  целое  число  N.  Преобразовать  число  так, чтобы его цифры  
//следовали в порядке возрастания.   
$n = 21186153;



$res = 0;
$c = 0;
for($i = 9; $i >= 0; $i--){
    $value =  $n;
    
    while($value != 0){  
        $num1 = round((($value / 10 )- (floor($value / 10)) )*10);  //раскладываем число на цифры
        $value = floor($value / 10);  
        if($num1 == $i){
            $dgr = ($num1 * pow(10, $c));
            $res = $res + $dgr;
            $c++;
        }
    }
}
echo ($n." - ".$res."<br>");