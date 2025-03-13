<?php
$n=153;
$sum=0;
$rem;
$temp=$n;
while($n>0)
{

    $rem=$n%10;
    $cube=$rem*$rem*$rem;
    $sum=$sum+$cube;
    $n=$n/10;
    
}
if($sum==$temp)
{
    echo "$temp is armstrong number";
}
else
{
    echo"$temp is not armstrong number";
}

?>

