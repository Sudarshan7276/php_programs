<?php
function sortArrayAscending($array){
   asort(array: $array);
   return $array;
}
function sortArrayDescending($array): array{
    arsort(array:$array);
    return $array;
}
function sortbykeyDescending($array): array{
    ksort(array:$array);
    return $array; 
}

function my_sort($value): bool1{
    return $value % 2 !==0;
}
$array=[
    "a"=>2,
    "b"=>5,
    "c"=>9,
    "d"=>4,
    "e"=>3,
];
do{
    echo "menu:\n";
    echo"1.sort the array by key ascending\n";
    echo"2.sort the array by key descending\n";
    echo"3.sort the array by value ascending\n";
    echo"4.sort the array by value descending\n";
    echo"5.filter thr odd element form thr array\n";
    echo"enter your choice:";
    $choice = intval(value:trim(string:fgets(strem:STDIN)));
    switch($choice){
        case 1:
            echo"sorted array by keys:\n";
            print_r(value:sortbykeysAscending(array:$array));
            break;
            case 2:
                echo"sorted array by keys:\n";
                print_r(value:sortbykeysDescending(array:$array));
                break;
           case 3:
            echo"sorted array in asending order by value\n";
            print_r(value: sortArrayAscending (array: $array));
            break;
            case 4: 
                echo"sorted array in desending order by value\n";
                print_r(value: sortArraydescending (array: $array));
                break;
                case 5:
                    echo "odd elements form the array:\n";
                    print_r(value:array_filter(array:$array,callback:'my_sort'));
                    break;
                    case 6:
                        echo "exiting...\n";
                        break:
                        default:
                        echo"invalid choice please try again.\n";
                    }                


    }while($choice !=5);
    ?>
    
