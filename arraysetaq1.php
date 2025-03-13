<?php
 $arr=array("apple"=>10,"banana"=>20,"cherry"=>30,"date"=>40);
 function display_elements($array)
 {
     echo"\nelements of the associative array along with the keys:\n";
     foreach($array as $key => $value)
     {
         echo "$key:$value\n";
     }
    }
 function display_size($array)
 {
    $size=count($array);
     echo"\nSize of the associative array is:$array\n";
 }
 function menu()
 {
    global $arr;
    while(true)
    {
        echo"\nmenu:\n";
        echo "1. Display elements of the array along with the keys\n";
        echo "2. Display the size of the array\n";
        echo "3. Exit\n";
    

 $choice=readline("enter your choice(1/2/3):");
 switch($choice){
    case 1:
        display_elements($arr);
        break;
    case 2:
        display_size($arr);
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