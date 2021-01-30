<?php


function diskAnalysisProblem($segment_size, $spaces){
    $segments=[];
    $n=sizeof($spaces);
    for ($i=0; $i<$n; $i++){
       $segments[]= array_slice($spaces, $i, $segment_size);
    }

    $minimums=[];
    foreach ($segments as $segment){
        $minimums[]= min($segment);
    }
    return max($minimums);
}


print_r(diskAnalysisProblem(2,[8,2,4]));
echo "<br>";
print_r(diskAnalysisProblem(1,[1,2,3,1,2]));


