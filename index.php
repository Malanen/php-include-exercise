<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    

   <?php 
    // In between opening PHP tag and closing PHP do following
    
    // Create a PHP variable named title and assign it the value "Marioclub". Remember to terminate each PHP statement with a semicolon
  
$title = "Marioclub";

$page = "index";
    // Create a PHP variable named page and assign it the value "index". Remember to terminate each PHP statement with a semicolon
   
include 'header.php';
    // Now use the "include" function in PHP where you include header.php. Remember that terminate each PHP statement with a semicolon

?>
  <main>
    <article>
      <h2>It's a me, Mario</h2>
      <p>Throughout the year! Join today and receive a FREE Mario's Chiller! Once you have signed up, you will receive your Mini Marios VIP card in the mail including 5 FREE Kids Meals and 5 FREE Mario's Chillers 4-6 weeks after registration. Now that's Amo.</p>
    </article>
    <ul class="images">
      <li><img src="img/thumb-1.jpg" alt="mario thumbnail 1"></li>
      <li><img src="img/thumb-2.jpg" alt="mario thumbnail 2"></li>
    </ul>
  </main>
<?php 

include 'footer.php';
    // In between opening PHP tag and closing PHP do following

    // Now use the "include" function in PHP and include "footer.php". Remember to terminate each PHP statement with a semicolon
?>