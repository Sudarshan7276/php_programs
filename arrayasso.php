<?php
 $assoc_array1=array("apple"=>10,"banana"=>20,"cherry"=>30,"date"=>40);
 $assoc_array2=array("apple"=>10,"mango"=>50,"orange"=>60);
 
 function merge($array1,$array2)
 {
   $array3=array_merge($array1,$array2);
     print_r($array3);
 }
 
 
//  function menu()
//  {
//     global $arr;
//     while(true)
//     {
//         echo"\nmenu:\n";
//         echo "1. Display merge array\n";
       
    

//  $choice=readline("enter your choice(1/2/3):");
//  switch($choice){
//     case 1:
//         merge($assoc_array1,$assoc_array2);
//         break;
   
//     default:
//      echo "Invalid choice, please try again\n";
//      break;
//     }
//   }
// }
//  menu();
merge($assoc_array1,$assoc_array2);
?>   