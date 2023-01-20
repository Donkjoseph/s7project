<!DOCTYPE html>
<html>

<head>
    <title>Registration</title>
    <link rel="icon" href="https://cdn3.vectorstock.com/i/1000x1000/06/52/music-player-icon-for-logos-websites-and-apps-vector-30290652.jpg">
    <style>
        body {
            margin: 0px;
            background-image: url(https://helios-i.mashable.com/imagery/articles/04Xg9z0OpmENu16hFQ4XGcs/hero-image.fill.size_1248x702.v1652732411.png);
            color: #f9fcf5;
            font-family: Arial, Helvetica, sans-serif;
            padding: 0;
            background-size: cover;
            display: flex;
            flex-wrap: wrap;
            align-items: flex-end;
            justify-content: flex-end;
            align-content: center;
        }
        
        #main {
            width: 680px;
            height: 530px;
            overflow: hidden;
            padding-bottom: 20px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 25px;
            border-radius: 10px;
            padding-left: 50px;
            border: 2px solid;
            padding-top: 60px;
            background-color: rgb(0, 0, 0);
            box-shadow: 5px 10px #070707af;
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
            margin-top: 20px;
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
        
        .h2 {
            font-size: 23px;
            font-family: "Comic Sans MS", cursive;
            margin-left: 180px;
        }
        
       
    </style>
    
</head>
<script>
        function validateName() {
            var letters = /^[A-Za-z ]*$/;
            var fname = document.getElementById("t1").value;

            if ((!letters.test(fname) || fname.length <= 2) && fname.length > 0) {
                document.getElementById("nc").innerHTML = "Name should only contain alphanumeric and be at least 3 characters long";
                return false;
            } else {
                document.getElementById("nc").innerHTML = "";
                return true;
            }
        }

        function validateEmail() {
            var email_exp = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            var email = document.getElementById("t2").value;
            if (!email_exp.test(email) || !(email.length > 0)) {
                document.getElementById("em").innerHTML = "Invalid Email";
                return false;
            } else {
                document.getElementById("em").innerHTML = "";
                return true;
            }
        }

        function validateUname() {
            var letters = /^[A-Za-z ]*$/;
            var uname = document.getElementById("t3").value;
            if ((!letters.test(uname) || uname.length <= 2) && uname.length > 0) {
                document.getElementById("uc").innerHTML = "Username should only contain alphanumeric and be at least 3 characters long";
                return false;
            } else {
                document.getElementById("uc").innerHTML = "";
                return true;
            }
        }

        function validatePwd() {
            var pwd_exp = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
            var pwd = document.getElementById("t4").value;
            if (!pwd_exp.test(pwd) || ((pwd.lenght <= 12) && (pwd.lenght > 5))) {
                document.getElementById("pw").innerHTML = "password contains only Upper case, Lower case, Special character and Numeric letter minimum 5 and maximum 12 letters ";
                return false;
            } else {
                document.getElementById("pw").innerHTML = "";
                return true;
            }
        }


        function validateCpwd() {
            var cpwd = document.getElementById("t5").value;
            var pwd = document.getElementById("t4").value;
            if (pwd !== cpwd) {
                document.getElementById("cpw").innerHTML = "Password not Matched";
                return false;
            } else {
                document.getElementById("cpw").innerHTML = "";
                return true;
            }
        }

        function checkall() {
            if (validateUname() && validatePwd() && validatePhone() && validateName() && validateEmail() && validateCpwd())
                return true;

            return false;
        }

        function clear_fun() {
            document.getElementById("t1").value = "";
            document.getElementById("t2").value = "";
            document.getElementById("t3").value = "";
            document.getElementById("t4").value = "";
            document.getElementById("t5").value = "";
            document.getElementById("t6").value = "";
        }
</script>
<body>
    
    <div id="main">
        <div class="h2">
            <h2>Create An Account</h2>
        </div>
        
        <div class="login">
        <form name="registration" method="post" onsubmit="return checkall()">
                <table cellspacing="2" lign="center" cellpadding="8">
                    <tr>
                        <td lign="right" id="txt">Name :</td>
                        <td><input name="name" type="text" placeholder="Enter Name" onkeyup="validateName()" id="t1" class="tb" required/></td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td> <span id="nc" style="color: red;"></span></td>
                    </tr>
                    <tr>
                        <td lign="right" id="txt"> Email ID :</td>
                        <td><input type="text" name="email" onkeyup="validateEmail()" placeholder="Enter Email ID " id="t2" class="tb" required /></td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td> <span id="em" style="color: red;"></span></td>
                    </tr>
                    <tr>
                        <td lign="right" id="txt"> Username :</td>
                        <td><input type="text" name="uname" onKeyUp="validateUname()" placeholder="Enter Username " id="t3" class="tb" required /></td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td> <span id="uc" style="color: red;"></span></td>
                    </tr>
                    <tr>
                        <td lign="right" id="txt"> Password :</td>
                        <td><input type="password" name="pass" onkeyup="validatePwd()" placeholder="Enter Password " id="t4" class="tb" required /></td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td> <span id="pw" style="color: red;"></span></td>
                    </tr>
                    <tr>
                        <td lign="right" id="txt"> Confirm Password :</td>
                        <td><input type="password" name="cpassword" onkeyup="validateCpwd()" placeholder="Enter Password" id="t5" class="tb" required/></td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td> <span id="cpw" style="color: red;"></span></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="reset" value="Clear Form" onclick="clear_fun()" id="res" class="btn" />
                            <input type="submit" value="Create Account" name="log" class="btn" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
       
    </div>
    <?php
// Create connection
$conn =mysqli_connect('localhost','root','','loginsystem');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['log']))
{
$txtName = $_POST['name'];
$txtEmail = $_POST['email'];
$txtpwd= $_POST['pass'];
$txtUser = $_POST['uname'];
// Check connection
$sql= "INSERT INTO `user`(`name`, `email`, `pass`, `uname`) VALUES ('$txtName','$txtEmail','$txtpwd','$txtUser');";

if (mysqli_query($conn,$sql)) 
{
  echo "<script>window.location.href='login.php';</script>";
}
 else
{
  echo "Error: " . $sql . "<br>" .mysqli_error($conn);
}
}
mysqli_close($conn);
?>
</body>

</html>