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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/yourcode.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <style>
          #col1, #col2{
              background-color: burlywood;
          }
          body{
              width: 100%;
              background-color: aliceblue;
          }
          .footer{
                background-color: cadetblue;
                margin-top: 51vh;
                height: 37px;
                width: 100%;
            }
          @media (max-width: 1193px){
              .footer{
                  margin-top: 19vh;
                  width: 100%;
              }
              #col2{
              }
                  
          }
          }
      </style> 
    </head>
    
    <body>
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8" id="col1">
                <span style="font-size:30px;">&nbsp;&nbsp;Hi, <?php echo $_SESSION['name'];?></span>
                </div>
                <div class="col-sm-4" id="col2"><span style="font-size:30px;"><a href="logout.php" style="text-decoration:none;">&nbsp;&nbsp;<i class="fas fa-sign-out-alt"></i>Logout</a></span></div>
            </div>
            <br>
            <span style="color:blue; font-size:30px;">Dashboard</span>
            <center>
                <?php
                  include "config.php";
                  $sql="SELECT * FROM message WHERE uid={$_SESSION["user_id"]}";
                  $result=mysqli_query($conn,$sql) or die("Query failed");
                  if(mysqli_num_rows($result)>0){
                     $id=1; 
                  ?>
            <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Sl. No</th>
                <th>Message</th>
                <th>View</th>
              </tr>
            </thead>
            <tbody>
                <?php
                    while($row=mysqli_fetch_assoc($result)){     
                ?>
              <tr>
                <td style="width:10%;"><?php $vid=$id; echo $id++; ?></td>
                <td style="width:40%;"><?php echo substr($row['msg'],0,10)."..."; ?></td>
                <td><a href="view.php?vid=<?php  echo $row['mid']; ?>"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
                <?php
                    
                  }
                include "config.php";
                
                ?>
            </center>
        <div class="alert alert-secondary" role="alert">
        Copy the link and share to your friends :&nbsp;<a href="http://localhost/anonext/message.php?uid=<?php echo $_SESSION['user_id']; ?>"><u>http://localhost/anonext/message.php?uid=<?php echo $_SESSION['user_id']; ?></u></a>
            
        
        </div>
 
        </div>
        <footer class="footer" style="position:fixed;"><center>Developed by <b>Subhratanu Saha ©</b></center></footer>
    </body>
</html>