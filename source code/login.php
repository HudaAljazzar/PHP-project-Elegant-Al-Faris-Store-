<?php
require'header.php';
require'config.php';

if($_POST)
     {
          if(isset($_POST))
               {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    
                    $rightuser=mysqli_query($conectdb,'SELECT  `name`  FROM `user` WHERE name="'.$username.'"') or die(mysqli_error($rightuser));
                    $rightpass=mysqli_query($conectdb,'SELECT  `password`  FROM `user` WHERE password="'.$password.'"') or
                     die(mysqli_error($rightpass));

                    if(empty($username)||empty($password))
                         {
                              echo'<h3>Please Fill In The Fields</h3>';
                         }
                    else {
                               if(mysqli_num_rows($rightuser)>0 && mysqli_num_rows($rightpass)>0)
                               {
                                         if ($username == $rightuser && $password == $rightpass)
                                         {
                                              echo '<h3> .. Sing In successful .. </h3>';
                                              $name = 'singin';
                                              $value = 1;
                                              $exp = time() + 60*60*24*7;
                                              setcookie($name,$value,$exp);
                                             
                                         }else
                                          {
                                             echo '<h3>Incorrect Sing In ..!</h3>';
                                          }
                              }else {
                                   echo'<h3>The Information Does Not Match</h3>';
                              }
                         }
               }
    }


 ?>

<html>
 <head>
      <style>
           
           body {
                background-color: orange;
                color: black;
                }
               input{
                color: orange;
                text-align: center;
                background-color: white;
                padding:20px;
                width: 300;
                height: 40;
              }
              a{
                   background-color: black;
                   color: white;
              }
      </style>      
 </head>
 <body><center>
 <form method="POST" action="">
 <h3>Enter Username</h3><input type="text" name="username" /></br>
 <label for="password">
					<i class="fas fa-lock"></i>
				</label>
<h3>Enter password</h3><input type="password" name="password" /></br></br></br>

<a href="play_store.php">Sing In</a>
 </form> </center>
 </body>
 </html>
 <?php require'footer.php';?>
