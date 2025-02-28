<?php

function mergrArrays($array1,$array2)
{
    return array_merge(arrays: $array1,$array2);
}
function intersection($array1,$array2)
{
    return array_intersect(array: $array1, arrays: $array2);

}
function union($array1,$array2)
{
    return array_merge(arrays: $array1,$array2);
}
function setdifference($array1,$array2)
{
    return array_diff(array: $array1,array: $array2);
}
$array1={
    "a"=>"apple"
    "b"=>"banana"
    "c"=>"cherry"
}
 $array2={
    "b"=>"banana"
    "c"=>"cherry"
    "d"=>"date"

 }
 do{
    echo"\nmenu:\n";
    echo "1. merge the given array\n";
    echo "2. find the intersection of two arrays\n";
    echo "3. fint the union of two arrays\n";
    echo "4. find set difference of two arrays\n";
    echo "5. exit\n";
    $choice=intval(trim(fgets(STDIN)));
    switch($choice)
    {
        case 1:
             echo "merging arrays:\n";
             print_r(mergearrays($array1,$array2));
             break;
        case 2:
             echo "intersection of arrays:\n";
             print_r(intersection($array1,$array2));
             break;
        case 3:
             echo "union of array:\n";
             print_r(union($array1,$array2));
             break;
        case 4:
            echo "set difference (array1-array2):\n";
            print_r(setdifference($array1,$arra));
            break;
        case 5:
             echo "existing....\n";
             break;
             default    

    }
 }
 ?>
