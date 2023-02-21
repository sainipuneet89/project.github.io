<?php 
include('header.php');
?>
<br> <br>
<div style='border: solid black 2px; color:red; font-size:22px; padding:20px; margin-right:400px; margin-left:100px;'><?php 
echo "Name:- "; echo $username =$_GET['username'];
$_SESSION['username']= $username;
echo "<br>";echo "<br>";
echo "Password:- "; echo $_GET['pass'];echo "<br>";echo "<br>";
echo "Date Of Birth:- "; echo $_GET['date']; echo ("\r");
 echo $_GET['month'];echo ("\n");
 echo $_GET['year'];echo "<br>";echo "<br>";
echo "Email:- "; echo $_GET['email'];echo "<br>";echo "<br>";
echo "Gender:- "; echo $_GET['gen'];echo "<br>";echo "<br>";
echo "Subjects:- "; print_r ($_GET["sub"]);echo "<br>";echo "<br>";
?></div>
<br>
<?php 
include('footer.php');
?>