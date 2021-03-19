<!DOCTYPE html>
<?php
session_start();
include "config.php";
if(!isset($_SESSION["name"])){
    header("Location: {$hostname}/login/");
}
?>
<html>
    <head>
    <title>AnoNext</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <style>
          @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');
          *{
              margin: 0px;
              padding: 0px;
          }
          hr
        {
            width:10%;
            border:1px solid rgba(0,0,0,1);
        }
          .head
        {
            font-size:24px;
            font-family: 'Montserrat', sans-serif;
            margin-top:9px;
        }
          body{
              background-image: url("17.jpg");
              background-size: cover;
              background-position: top;
              background-repeat: no-repeat;
          }
          @media (max-width: 1193px){
              *{
              margin: 0px;
              padding: 0px;
                }
              body{
                  height: 100vh;
              }
          }
      </style>
    </head>
    <body>
        <center><p class="head">Anon messages for You!</p>
                <hr></center><br>
        <div class="container-fluid">
        
            <div class="row">
                
                <?php
                    include "config.php";
                    
                    $pid=$_GET['vid'];
                    $sql="SELECT msg,uid FROM message WHERE mid={$pid}";
                    $result=mysqli_query($conn,$sql) or die("Query Failed");
                    $row=mysqli_fetch_assoc($result);
                    if($row['uid']!=$_SESSION['user_id']){
                        header("Location: {$hostname}/dashboard.php");
                    }
                    
                
                ?>
                <div class="col-sm-1"></div>
                <div class="col-sm-1"></div>
                <div class="col-sm-1"></div>
                <div class="col-sm-6">
                    <div class="container">
                        <div class="alert alert-primary" style="height:500px; border-radius:30px;"><?php echo $row['msg']; ?> <br><br><br><br><span style="float:right;">-by AnoNext</span></div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>