<?php
session_start();
setcookie("rinku", "tinku.com", time()
   + (24 * 60 * 60));
?>
<!DOCTYPE html>
<html>

<head>
   <title>
      <?php echo $title; ?>
   </title>
   <style>
      body {
         background-color: antiquewhite;
      }

      .navbar {
         border: solid black 2px;
         border-radius: 20px;
         display: flex;
         background-color: skyblue;
         position: relative;
      }

      a {
         padding: 20px;
         text-decoration: none;
         font-size: 20px;
         color: rgb(44, 3, 158);
      }

      a:hover {
         color: red;
      }
   </style>
   <title>document</title>
</head>

<body>
   <div class="navbar">

      <a href="home.php">Home</a>
      <a href="html.php">Html</a>
      <a href="css.php">Css</a>
      <a href="javascript.php">JavaScript</a>
      <a href="logout.php">Log Out</a>
      <a style='text-align: right;'>
         <?php if (isset($_SESSION['username'])) {
            echo 'Welcome ' . $_SESSION['username'];
         }
         ; ?>
      </a>
   </div>