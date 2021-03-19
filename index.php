<!DOCTYPE html>

<html>
    <head>
    <title>AnoNext</title>
      <meta charset="utf-8">
      <link rel="icon" href="msg.png">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
            *{
                margin: 0;
                padding: 0;
            }
            body{
                background-image: url("img.jpg");
                width: 100%;
                background-repeat: no-repeat;
                background-size: cover;
            }
            .para{
                font-family: 'Open Sans', sans-serif;
                font-size: 50px;
                color:darkblue;
                text-align: center;
                margin-top: 250px;
            }
            .footer{
                background-color: cadetblue;
                margin-top: 33vh;
                height: 37px;
            
            }
            #btn1{
                align-items: center;
                align-content: center;
                justify-content: center;
                margin-left:47%; 
                font-size:22px;
            }
            @media (max-width: 1193px){
                body{
                    
                    background-image: url("img.jpg");
                    height: auto;
                }
                #btn1{
                    margin-left:39%;
                    
                }
                .footer{
                    margin-top: 15vh;
                }
                
            }
        </style>
    </head> 
    <body>
        <p class="para">&nbsp;Join <span style="color:red; font-size:55px;">AnoNext</span> Today!</p><br><br>
        <a href="login/"><input type="submit" class="btn btn-outline-primary" id="btn1" style="" value="&nbsp;Join&nbsp;"></a><br><br>
        <footer class="footer"><center>Developed by <b>Subhratanu Saha ©</b></center>
            
        </footer>
    </body>
</html>