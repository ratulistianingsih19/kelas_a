<?php

echo "Ratu Listianingsih Sumirat <br>";
echo "5520117018 <br>";
echo "IF A 2017 <br><br>";
$kangguru1= "  ";
$kangguru2= "  ";

function kangguru($m1,$w1,$m2,$w2){
    echo "Kangguru(".$m1.",".$w1.",".$m2.",".$w2.")";
    echo "<br>";
for  ($i=0;$i<4;$i++){
     $m1 += $w1;
     $m2 += $w2;
     @$kangguru1.= $m1. " ";
     @$kangguru2.= $m2. " ";
}
    echo "Kangguru1"."=" .$kangguru1;
    echo "<br>";
    echo "Kangguru2"."=" .$kangguru2;
    echo "<br>";

if ($m1==$m2){
    echo "<br> YES </br></br>";
} else{
    echo "<br> NO </br>";

    }
}
kangguru (0,3,4,2);
kangguru (0,9,7,5);
?> 