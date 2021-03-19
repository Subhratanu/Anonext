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
            background-image: url("img2.jfif");
            background-repeat: no-repeat;
            background-position:center;
            background-size: cover;
        
        }
        .container1
        {
            width:40%;
            height:540px;
            margin-left:30%;
            background-color: rgba(0,20,0,0.2);
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
            <center><p class="head">Message to your friend Anonymously</p>
                <hr></center><br><br>
            <div class="container1">
                <br>
                
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method ="POST">
                  <div class = "form-group">
            <label for = "name">Type your message</label>
            <textarea class = "form-control" rows = "12" placeholder = "type message..." name="text"></textarea>
         </div>
                  
                  <br>
                  <input type="submit" class="btn btn-primary" value="Send" name="save">
                </form>
                <?php
                        $uid=$_GET['uid'];
                        if(isset($_POST['save'])){
                            include "config.php";
                            $txt=$_POST['text'];
                            $sql="INSERT INTO message (msg,uid) VALUES('{$txt}','{$uid}')";
                            $result=mysqli_query($conn,$sql) or die("Query failed");
                            }
                            
                        
                        ?>
<br>

Already have an account?&nbsp;&nbsp;&nbsp;&nbsp;<a href="login/"><input type="submit" class="btn btn-danger" value="Login"></a>
            </div>
        
    </body>
</html>