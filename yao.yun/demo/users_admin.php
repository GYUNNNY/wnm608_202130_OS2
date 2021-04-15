<?php

include "../lib/php/function.php";

$users = file_get_json("users.json");

// pretty_dump($_SERVER);
// pretty_dump($_GET);








function showUserPage($user) {

$classes = implode(", ", $user->classes);

echo <<<HTML
<nav class="nav crumbs">
   <ul>
      <li><a href="{$_SERVER['PHP_SELF']}">Back</a></li>
   </ul>
</nav>
<div>
   <h2>$user->fullname</h2>
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
<div class="grid gap">
          <div class="col-xs-12 col-md-6">
            <div class="form-control">
            <label for="example1" class="form-label">First Name</label>
            <input id="example1" type="text" placeholder="$user->firtsname" class="form-input">
            </div>
          </div>
         <div class="col-xs-12 col-md-6">
          <div class="form-control">
            <label for="example2" class="form-label">Last Name</label>
            <input id="example2" type="text" placeholder="$user->lastname" class="form-input">
          </div>
         </div>
       </div>
         
         <div class="grid gap">
          <div class="col-xs-12 col-md-6">
           <div class="form-control">
            <label for="example3" class="form-label">Address</label>
            <input id="example3" type="text" placeholder="Address" class="form-input">
            </div>
          </div>
         <div class="col-xs-12 col-md-6">
          <div class="form-control">
            <label for="example3" class="form-label">City</label>
            <input id="example3" type="text" placeholder="City" class="form-input">
          </div>
        </div>
      </div>
      <div class="grid gap">
          <div class="col-xs-12 col-md-6">
           <div class="form-control">
            <label for="example3" class="form-label">State</label>
            <input id="example3" type="text" placeholder="State" class="form-input">
            </div>
          </div>
         <div class="col-xs-12 col-md-6">
          <div class="form-control">
            <label for="example3" class="form-label">ZIP Code</label>
            <input id="example3" type="text" placeholder="ZIP Code" class="form-input">
          </div>
        </div>
      </div>
       <div class="grid gap">
          <div class="col-xs-12 col-md-6">
           <div class="form-control">
            <label for="example3" class="form-label">Email</label>
            <input id="example3" type="text" placeholder="$user->email" class="form-input">
            </div>
          </div>
         <div class="col-xs-12 col-md-6">
          <div class="form-control">
            <label for="example3" class="form-label">Phone Number</label>
            <input id="example3" type="text" placeholder="Phone Number" class="form-input">
          </div>
        </div>
      </div>
      
       <div class="center" style="margin-top: 4em"><a href="#" class="darkbutton">Submit</a></div>
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
      <div class="container display-flex flex-align-center"  style="margin-top: 0">
         <div class="flex-none">
            <div class="brand">User Admin</div>
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
            showUserPage($users[$_GET['id']]);
         } else {
         ?>

         <h2>User List</h2>

         <ul>
         <?php

         for($i=0; $i<count($users); $i++) {
            echo "<li>
            <a href='{$_SERVER['PHP_SELF']}?id=$i'>{$users[$i]->fullname}</a>
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