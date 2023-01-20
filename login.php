<?php
$conn =mysqli_connect('localhost','root','','loginsystem');
session_start();
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['logbtn'])){
  $email = $_POST['email'];
  $pass = $_POST['pass'];

  $sql = "select * from user where email = '$email' and pass = '$pass'";
  $result = mysqli_query($conn, $sql);
  $count = mysqli_num_rows($result);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  mysqli_select_db($conn, 'loginsystem');
  

  if($count == 1 )
  {
    echo $row['email'];
    $_SESSION['email']=$row['email'];

    echo "<script type='text/javascript'>alert('Login Successful !!!!')</script>";
     header("Location:home.php");
    }
  else {
    echo "<script type='text/javascript'>alert('User not Found!!!!')</script>";
  }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="icon" href="https://cdn3.vectorstock.com/i/1000x1000/06/52/music-player-icon-for-logos-websites-and-apps-vector-30290652.jpg">
    <style>
        body {
            margin: 0px;
            background-image: url(https://helios-i.mashable.com/imagery/articles/04Xg9z0OpmENu16hFQ4XGcs/hero-image.fill.size_1248x702.v1652732411.png);
            margin: 0;
            padding: 0;
            background-size: cover;
            display: flex;
            flex-wrap: wrap;
            align-items: flex-end;
            justify-content: flex-end;
            align-content: center;
            flex-direction: row;
        }
        
        #main {
            color: #ffffff;
            font-family: Arial, Helvetica, sans-serif;
            width: 570px;
            height: 400px;
            margin-right: auto;
            padding-left: 10px;
            padding-top: 100px;
            padding-left: 60px;
            padding-bottom: 20px;
            margin-left: auto;
            margin-top: 60px;
            border-radius: 20px;
            border: 2px solid;
            box-shadow: 5px 10px #070707af;
        }
        
        #main {
            background-color: rgb(0, 0, 0);
        }
        
        #main table {
            font-family: "sans-serif";
        }
        
        #main .tb {
            height: 30px;
            width: 330px;
            border: 1px solid rgb(0, 255, 34);
            color: rgb(0, 0, 0);
            font-weight: bold;
            border-left: 5px solid #f7f7f7;
            opacity: 0.9;
        }
        
        #main .tb:focus {
            height: 30px;
            border: 1px solid #630606;
            outline: none;
            border-left: 5px solid #f7f7f7;
        }
        
        #main .btn {
            width: 180px;
            height: 32px;
            outline: none;
            color: black;
            font-weight: bold;
            border: 0px solid #ffffff;
            border-radius: 20px;
            font-weight: 600;
            color: solid #ffffff;
            letter-spacing: 1px;
            font-size: 14px;
            background-color: rgb(0, 255, 34);
            -webkit-transition: 1s;
            -moz-transition: 1s;
            transition: 1s;
        }
        
        #main .btn:hover {
            background: linear-gradient(to right, rgb(0, 255, 34), rgb(0, 255, 34));
            outline: none;
            border-radius: 20px;
            color: #ffffff;
            border: 1px solid #ffffff;
            -webkit-transition: 1s;
            -moz-transition: 1s;
            transition: 1s;
        }
        
        .btn1 {
            padding-left: 180px;
        }
        
        .back-home {
            padding-left: 170px;
        }
        
        .h2 {
            font-size: 20px;
            margin-left: 200px;
            font-family: "Comic Sans MS", cursive;
        }
    </style>
</head>

<body>

    <div id="main">
        <div class="h2">
            <h2>LOGIN</h2>
        </div>
        <div class="login">
            <form method="post">
            <table cellspacing="2" lign="center" cellpadding="8">
                <tr>
                    <td lign="right">Email ID :</td>
                    <td><input type="text" name="email" placeholder="Enter Email ID " id="t2" class="tb" required /></td>
                </tr>
                <tr>
                    <td lign="right">Password :</td>
                    <td><input type="password" name="pass" placeholder="Enter Password " id="t4" class="tb" required/></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                    </td>
                </tr>
            </table>
            <div class="btn1">
                <button type="submit" class="btn" name="logbtn">Login</button>
            </div>
            </form>

            <div class="back-home">
                <P style="color: rgb(224, 216, 213);">DON'T HAVE AN ACCOUNT</P>
                <a href="register.php"><button class="btn" style="margin-left: 10px;">SIGN UP</button></a>
            </div>

        </div>
    </div>
</body>

</html>