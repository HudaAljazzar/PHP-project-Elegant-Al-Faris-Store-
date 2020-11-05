<?php
require'config.php';
require'header.php';
if($_GET)
    {
        $email=$_GET['email'];
        $address=$_GET['address'];
        $phone=$_GET['phone'];
        $bank=$_GET['near_bank'];

        echo'<h3>Thank you for contacting us, we will contact you soon</h3>';
        $info=mysqli_query($conectdb,'insert into sill_user set email="'.$email.'",address="'.$address.'",phone="'.$phone.'",bank_name="'.$bank.'"') 
        or die(mysqli_error($info));

    }

?>
<html>
    <head>
        <style>
            input{
                background-color: white;
                color: black;
                width: 300;
                height: 30
            }
        </style>
    </head>
    <body><center>
    <h3>Please Fill The Following Fields</h3>
    <form method="GET" action="">
    <input type="text" placeholder="Enter Your Email" name="email"/></br><br></br>
    <input type="text" placeholder="Enter Your Country Then Your City" name="address"/></br></br></br>
    <input type="text" placeholder="Enter Your PHone" name="phone"/></br></br></br>
    <input type="text" placeholder="Enter Your Nearest Bank Account Address" name="near_bank"/></br></br></br>
    <input type="submit" value="Send"  name="send"/></br></br></br></br>
    </form>
    </body></center>
</html>
<?php require'footer.php';?>
