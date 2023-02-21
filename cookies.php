<form method="post">
    <input input="text" name="number">
    <input type="submit" name="submit">
</form>
<?php
$d = $_POST["number"];
for ($i = $d; $i <= $d; $i++) {
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            break;
        }
    }
    if ($i == $j) {
        echo $d . " is prime number";
    } else {
        echo $d . " is not prime";
    }

}


?>