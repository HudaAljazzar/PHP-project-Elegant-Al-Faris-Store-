<?php
require'header.php';
require'config.php';

if($_POST)
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $certen_pass=$_POST['certainpass'];

        if(empty($username)||empty($password)||empty($certen_pass))
            {
                echo'<h3>Please Fill In The Fields</h3>';

            }
        else {
                if($password==$certen_pass)
                    {
                        $check = mysqli_query($conectdb,'
                        INSERT INTO `user`(`name`, `password`)
                         VALUES ("'.$username.'","'.$password.'")') or die(mysqli_error($check)); 

                         if($check)
                            {
                                
                                echo'<center><h3>^_^  .. Sing UP IS Successful .. ^_^</h3>';
                                echo'<h3>Can login From Here </h3><a href="play_store.php">Log In</a></center>';
                            }
                        else {
                            echo'<h3>An error occurred while signing in  ...!!</h3>';
                        }
                    }
                else {
                    echo'<h3>Password And Confirm Password Not Matched</h3>';
                }
            }

    }
 

     


?>

 <html>
 <head>
      <style>
           
           body {
                background-color: white;
                color: black;
                }
               input{
                color: black;
                text-align: center;
                background-color: white;
                padding:20px;
                width: 300;
                height: 40;
              }
            a{
                background-color: black;
                color: orange;
                
                
            }
            
      </style>
 </head>
 <body>
 <center>
 </br>
 <form method="POST" action="">
 <h3>Enter Username</h3> <input  type="text" name="username" placeholder="Enter Username" />
 <h3>Enter Password</h3><input type="password" name="password" placeholder="Enter Password" />
 <h3>Enter Confirm Password</h3><input type="password" name="certainpass" placeholder=" Confirm Password " /></br></br></br>
 <input type="submit" value="Sing Up"/>
 </form>

</center>
 </body>
 </html>
 <?php include'footer.php';?>
