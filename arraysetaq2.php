<?php
 $arr=array("apple"=>10,"banana"=>20,"cherry"=>30,"date"=>40);
 function display_reverse($array)
 {
    $revarr=array_flip($array);
     print_r($revarr);
 }
 function display_random($array)
 {
     print_r("\nshuffled array is:\n");
     shuffle($array);
     foreach($array as $key => $value)
     {
         print_r( "$key:$value\n");
     }
 }  
 
 function menu()
 {
    global $arr;
    while(true)
    {
        echo"\nmenu:\n";
        echo "1. Display reversed array\n";
        echo "2. Display the shuffled array\n";
        echo "3. Exit\n";
    

 $choice=readline("enter your choice(1/2/3):");
 switch($choice){
    case 1:
        display_reverse($arr);
        break;
    case 2:
        display_random($arr);
        break;
    case 3:
        exit(0);
        break;
    default:
     echo "Invalid choice, please try again\n";
     break;
    }
  }
}
 menu();
?>