<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <style>
            body{
                background-image: url("signup.png");
            background-repeat: no-repeat;
            background-size: 100% 40%;
           
            }
            h4{
                color: green;
                font-size: 20px;
            }
            label{
                font-size: 15px;
            }
        </style>
        <script>
            function register(){
                let x=document.forms["myforms"].value;
                if(x==" ")
                {
                   alert("user name must be");
                   return false;
                }
                
                
            }
        </script>
    </head>
        <body>
            <div class="login-container">
                <h4>REGISTER</h4>
                <form action ="insert.php" name="myform" method="post">
                    <label>Username</label>
                    <input type="text" name="username" placeholder="username">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="email">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="password">
                    <button onclick="register()">SUBMIT</button>
                    </form>
            </div>
        </body>
        
    
</html>