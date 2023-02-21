<?php

for($x=1; $x<=10; $x++){
    for($y=1; $y<=10-$x; $y++){
     echo '&nbsp'   ;
    }
    for($z=1;$z<=$x; $z++){
        echo '*';
    }
    echo '<br>';
}
for($a=10; $a>=1; $a--){
    for($b=10; $b>=$a+1; $b--){
        echo '&nbsp';
    }
    for($c=10; $c>=11 -$a; $c--){
        echo '*';
    }
    echo '<br>';
}

?>