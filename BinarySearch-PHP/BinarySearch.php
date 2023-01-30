<?php
$bigSortedArray=[1,2,5,8,40,86,995,98774,11114221];
$index=array_search(98774,$bigSortedArray);


 function sorted_array_search($item,$sorted_array){

    $left=0;
    $right=count($sorted_array);
    while($right >= $left){
        $mid=($left+$right)/2;
        if($sorted_array[$mid]==$item)
            return $mid;
        else if($sorted_array[$mid]>$item)
            $right=$mid-1;
        else if($sorted_array[$mid]< $item)
            $left=$mid+1;
    }
    return false;
 }

?>