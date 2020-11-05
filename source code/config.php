<?php

$servername="localhost";
$username="root";
$password="";
$database="play_store";

$conectdb=mysqli_connect($servername,$username,$password,$database) or die(mysqli_connect_error());

if(mysqli_connect_error())
        {
            echo '<h3>Database connection failed...!</h3>';
        }

?>
