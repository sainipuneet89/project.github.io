<br><br>
<form method="post" enctype="multipart/form-data">
    Upload File <input type='file' name='myfile'><br><br>
    <input type='submit' name='submit'>
 </form>
 <?php 
 if(isset($_POST["submit"])){

  $filename= $_FILES['myfile']['name'];
  $errors =[];
 $filetype= $_FILES['myfile']['type'];
 $filesize=$_FILES['myfile']['size'];
 $filetmpname= $_FILES['myfile']['tmp_name'];
$exp=explode('.',$filename);
$ext = end($exp);

if($filesize > 821097){
  $error[] ="file size not allowed";
}
if($ext !='jpg' && $ext !='png'&& $ext !='jpeg'){
$error[] = " file format not supported";
}
if(!empty($error)){
  print_r($error);
}


else{
  echo("your file uploaded Successfully");
  move_uploaded_file($filetmpname,"img/".$filename);
 };};
  ?>