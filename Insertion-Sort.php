<?php
function insertion_Sort($my_array){
    for ($i = 0;$i < count($my_array);$i++){
        $value = $my_array[$i];
        $j = $i - 1;
        while ($j >=0 && $my_array[$j] < $value){
            $my_array[$j + 1] = $my_array[$j];
            $j--;
        }
        $my_array[$j + 1] = $value;
    }
    return $my_array;
}
echo "<pre>";
print_r(insertion_Sort([5,-4,3,7,2,1,0,8,9,2]));