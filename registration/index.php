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
            <center><p class="head">Registration For Anon</p>
                <hr></center><br><br>
            <div class="container1">
                <form action="<?php $_SERVER['PHP_SELF']?>" method ="POST">
                    <div class="form-group">
                    <label for="exampleInputPassword1">Username</label>
                    <input type="text" class="form-control" id="exampleInput" placeholder="Username" name="uname" required>
                  </div>
                    <br>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
                  </div>
                    <br>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass" required>
                  </div>
                  <br>
                  <input type="submit" class="btn btn-primary" value="Register" name="save">
                </form>
                
<br>
<br>
Already have an account?&nbsp;&nbsp;&nbsp;&nbsp;<a href="../login/"><input type="submit" class="btn btn-danger" value="Login"></a>
</div>
<?php
    
    if(isset($_POST['save'])){
    include "config.php";
    $uname=mysqli_real_escape_string($conn,$_POST['uname']);//for encoding purpose(security)
    $mail=$_POST['email'];
    $password=mysqli_real_escape_string($conn,md5($_POST['pass']));//for encryption the password
        
    $sql="SELECT email FROM user WHERE email='{$mail}'";
    $result=mysqli_query($conn, $sql) or die("Query failed");
    
    
        
    if(mysqli_num_rows($result)>0){
        echo '<script>alert("Username Already exists")</script>';
    }
    else{
        $sql1="INSERT INTO user (uname,email,password) VALUES('{$uname}','{$mail}','{$password}')";
        if(mysqli_query($conn,$sql1)){
            

                header("Location: ../login/");
        }
    }
}
    ?>
    </body>
</html>