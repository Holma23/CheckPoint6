<?php
$mat1=12;
$mat2=15.5;
$mat3=13;
$result4="Refusé";
$result1="Admis avec mention bien";
$result2="Admis avec mention assez bien";
$result3="Admis avec mention passable";
$Moyenne=(integer)($mat1+$mat2+$mat3)/3;
echo 'Moyenne:'.number_format($Moyenne, 2, ',', '').'<br>';

$x=$Moyenne >= 14 ? $result1 :(($Moyenne >= 12  )? $result2 :(($Moyenne >= 10) ? $result3 : $result4  ));
echo $x;
?>
