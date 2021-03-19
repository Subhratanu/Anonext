<!DOCTYPE html>

<html>
    <head>
    <title>AnoNext</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        
    </head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');
        *
        {
            margin:0;
            padding:0;
            font-family: 'Montserrat', sans-serif;
        }
        .head
        {
            font-size:24px;
            font-family: 'Montserrat', sans-serif;
            margin-top:9px;
        }
        hr
        {
            width:10%;
            border:1px solid rgba(0,0,0,1);
        }
        body
        {
            background-image: url("img4.jpg");
            background-repeat: no-repeat;
            background-position:left;
            
        
        }
        .container1
        {
            width:40%;
            height:540px;
            margin-left:30%;
            background-color: rgba(255,255,255,0.2);
            padding: 20px 20px 20px;
            border-radius: 20px; 
        }
        @media (max-width: 1193px){
            .container1{
                width: 70%;
                margin-left:15%;
            }
            body{
                background-size: cover;
                height: 100vh;
            }
        }
</style>
    <body>
            <center><p class="head">Login For Anon</p>
                <hr></center><br><br>
            <div class="container1">
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method ="POST">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
                    <br>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass" required>
                  </div>
                  <br>
                  <input type="submit" class="btn btn-primary" value="Login" name="login">
                </form>
                <?php
                        if(isset($_POST['login'])){
                            include "config.php";
                            $mail=$_POST['email'];
                            $password= md5($_POST['pass']);
                            $sql="SELECT * FROM user WHERE email='{$mail}' AND password='{$password}'";
                            $result=mysqli_query($conn,$sql) or die("Query failed");
                            if(mysqli_num_rows($result)>0){
                                while($row= mysqli_fetch_assoc($result)){
                                    session_start();
                                    $_SESSION["email"]=$row['email'];
                                    $_SESSION["user_id"]=$row['id'];
                                    $_SESSION["name"]=$row['uname'];
                                    
                                    header("Location: {$hostname}/dashboard.php");
                                }
                            }else{
                                echo '<script>alert("Username & Password does not match!")</script>';
                            }
                            
                        }
                        ?>
                
<br>
<br>
Don't have an account!&nbsp;&nbsp;&nbsp;&nbsp;<a href="../registration/"><input type="submit" class="btn btn-danger" value="Signup"></a>
</div>
        
    </body>
</html>