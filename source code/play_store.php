<?php

require'header.php';



?>
<html>
    <head>
        <title> Elegant Al Faris Store</title>
        <style>
          body{
            background-color:white;
            color:black;
          }
          
          

           /* Style The Dropdown Button */
            .dropbtn {
              background-color: black;
              color: orange;
              padding: 16px;
              font-size: 30px;
              border:red;
              cursor: pointer;
            }

            /* The container <div> - needed to position the dropdown content */
            .dropdown {
              position: relative;
              display: inline-block;
            }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {background-color: orange}

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
          display: block;
        }

        /* Change the background color of the dropdown button when the dropdown content is shown */
        .dropdown:hover .dropbtn {
          background-color: orange;
        } 
        a.active{
          background-color: black;
              color: orange;
              padding: 14px;
              font-size: 15px;
              border: 50px;
              
        }     

       
          </style>
    </head>
    <body>
    <a href="#" class="active">Elegant Al Faris Store</a>
    <div class="dropdown">
        <button class="dropbtn">Men</button>
        <div class="dropdown-content">
        <a href="shirts_men.php">Shirts</a>
        <a href="pants_men.php">Pants</a>
        <a href="Shoses_men.php">Shoses</a>
        </div>
    </div>

    <div class="dropdown">
        <button class="dropbtn">Wemon</button>
        <div class="dropdown-content">
        <a href="shirts_wemon.php">ٍShrits</a>
        <a href="pants_wemon.php">ٍPants</a>
        <a href="shoses_wemon.php">Shoses</a>
        </div>
    </div>
    
    <div class="dropdown">
        <button class="dropbtn">Girls</button>
        <div class="dropdown-content">
        <a href="games_girl.php">Games</a>
        <a href="dresess_girls.php">Dresses</a>
        <a href="shose_girls.php">Shosse</a>
        </div>
    </div>

    <div class="dropdown">
        <button class="dropbtn">Boys</button>
        <div class="dropdown-content">
        <a href="games_boys.php">Games</a>
        <a href="shose_boys.php">ٍShoses</a>
        <a href="accessrioes.php">Accessories</a>
        </div>
    </div>

      </br></br></br><center>
      <img src="images/ecommerc.png" width="600" height="400">

      </br></br></br></br></br>
      <img src="images/girls1.jpg" width="260" height="165">
      <img src="images/girls2.jpg" width="260" height="165">
      <img src="images/men1.jpg" width="260" height="165">
      <img src="images/men2.jpg" width="260" height="165">
      <img src="images/men3.jpg" width="260" height="165">
      <img src="images/boys1.jpg" width="260" height="165">
      <img src="images/boys2.jpg" width="260" height="165">
      <img src="images/girls3.jpg" width="260" height="165">
      <img src="images/we1.jpg" width="260" height="165">
      <img src="images/we2.jpg" width="260" height="165">

      </center>
    </body>
</html>
<?php  include 'footer.php'; ?>
