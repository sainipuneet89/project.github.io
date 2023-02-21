<form method="post">
    <input type="text" name="value">
    <input type="submit" name="submit">
</form>
<?php
if(isset($_POST["submit"])){
$d= $_POST["value"];

for($i=$d;$i<=$d;$i++){
    for($j=2; $j<=$i; $j++){
        if($i%$j==0){
            break;
        }}
        if($i==$j){
            echo $d." is prime number";
        }
        else{echo $d." is not prime";}
        
        
    
        } 
    }; 



?>