<?php session_start(); ?>
<html>
    <head>
       <style>
        body{
            background-image: url("system.jpeg");
            background-repeat: no-repeat;
            background-size: 100% 100%;
           
        }
        h1{
            padding-top: 20%;
            text-align: center;
            color: white;
        }
        
       </style>
    </head>
    <body>
       <div class="content">
        <h1>welcome! <?php echo $_SESSION["username"]; ?></h1>

       </div>
       
    </body>
</html>