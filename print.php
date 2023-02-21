<?php

for($i=1; $i<=15; $i++){
    for($j=1; $j<=15-$i; $j++){
       echo "&nbsp;"."&nbsp"."&nbsp";
    }for($k=1; $k<=$i; $k++){
        echo "&nbsp"."&nbsp"."*"."&nbsp"."&nbsp";
    }echo "<br>";
};
for($l=1;$l<=15;$l++){
    for($m=2;$m<=$l;$m++){
        echo ("&nbsp"."&nbsp"."&nbsp");
    }for($n=$l;$n<=15;$n++){
        echo "&nbsp"."&nbsp"."*"."&nbsp"."&nbsp";
    }
    echo "<br>";
    
    };

?>