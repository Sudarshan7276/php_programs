<?php
$number=readline("enter the number:");
echo $number;
$sum=0;
$temp=$number;
while($number>0)
{

$rem=$number%10;
$cube=$rem*$rem*$rem;
$sum=$sum+$cube;
$number/=10;
}
if($sum==$temp)
{
    echo"the given number is armstrong number:".$temp;
}
else{
    echo"the given number is not armstrong number:".$temp;
}

?>