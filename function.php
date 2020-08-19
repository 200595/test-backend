<?php
function mutateTheArray($n, $a){
    for($i = 0; $i < $n; $i++){
        if ($i == 0){
            $b[0] = 0 + $a[$i] + $a[$i + 1];
        }elseif ($i == $n -1){
            $b[$n-1] = $a[$i-1] + $a[$i] + 0;
        }else{
            $b[$i] = $a[$i-1] + $a[$i] + $a[$i+1];
        }
    }
    return $b;
}
