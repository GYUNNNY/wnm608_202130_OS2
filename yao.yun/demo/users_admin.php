<?php

include "../lib/php/functions.php";

$users = file_get_json("users.json");

// pretty_dump($_SERVER);
pretty_dump([$_GET,$_post]);



$empty_object = (object) [

];




function showUserPage($user) {

$classes = implode(", ", $user->classes);

echo <<<HTML
<nav class="nav crumbs">
   <ul>
      <li><a href="{$_SERVER['PHP_SELF']}">Back</a></li>
   </ul>
</nav>

<div>
   <h2>$user->name</h2>
   <div>
      <strong>Type</strong>
      <span>$user->type</span>
   </div>
   <div>
      <strong>Email</strong>
      <span>$user->email</span>
   </div>
   <div>
      <strong>Classes</strong>
      <span>$classes</span>
   </div>
</div>

<div>
   	
	   	<div class="form-control">
	   		<label for="example1" class="form-label">Name</label>
         <input id="example1" type="text" placeholder="Enter your name"
         class="form-input" value="$user->type">	   		
	  	   </div>
	   	<div class="form-control">
	    	<label for="example1" class="form-label">Email</label>
			<input id="example1" type="text" placeholder="Enter your email" class="form-input" value="$user->email">	   		
	   	</div>
	   	<div class="form-control">
	    	<label for="example1" class="form-label">Classes</label>
			<input id="example1" type="text" placeholder="Enter your class" class="form-input" value="$classes">	   		
	   	</div>
	   	<div class="display-flex">
	   		
	   		<input type="button" class="form-button" value="Submit">
	   	</div>
</div>
HTML;
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>User Administrator</title>
   <?php include "../parts/meta.php" ?>
</head>
<body>
   <header class="navbar">
      <div class="container display-flex flex-align-center">
         <div class="flex-none">
            <h1>User Admin</h1>
         </div>
         <div class="flex-stretch"></div>
         <nav class="flex-none nav flex">
            <ul>
               <li><a href="<?= $_SERVER['PHP_SELF'] ?>">List</a></li>
            </ul>
         </nav>
      </div>
   </header>

   <div class="container">
      <div class="card soft">

         <?php
         if(isset($_GET['id'])) {
            //ternary conditional 
            showUserPage($users[$_GET['id']]);
         } else {
         ?>

         <h5>User List</h5>

         <ul>
         <?php

         for($i=0; $i<count($users); $i++) {
            echo "<li>
            <a href='{$_SERVER['PHP_SELF']}?id=$i'>{$users[$i]->name}</a>
            </li>";
         }

         ?>
         </ul>
         <?php
         }
         ?>
      </div>
   </div>
</body>
</html>