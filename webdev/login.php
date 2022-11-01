<html>
    <head>
        <link rel="stylesheet" href="style.scss">
        <style>
            body{
             background-image: url("login1.jpg");
            background-repeat: no-repeat;
            background-size: 100% 50%;
            }
            
        </style>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    </head>
        <body>
            <div class="login-container">
                <h4>LOGIN</h4>
                <form action ="select.php" method="post">
                    <label>User name</label>
                    <input type="text" name="username" placeholder="username">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="password">
                    <button>Login</button>
                    <div class="adiv">
                        <h5>CREATE ACCOUNT IF YOU DON'T HAVE</h5>
                    <a href="register.php">REGISTER</a>
                    </div>
                </form>
            </div>
        </body>
        
    
</html>