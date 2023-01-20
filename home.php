<?php
session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Home Page
    </title>
    <link rel="icon" href="https://cdn3.vectorstock.com/i/1000x1000/06/52/music-player-icon-for-logos-websites-and-apps-vector-30290652.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fredoka+One&family=Ubuntu:ital,wght@0,300;0,400;0,500;1,300;1,500&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Ubuntu", sans-serif;
        }
        
        .main {
            position: relative;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            background: url(https://1.bp.blogspot.com/-Sc9JYIT99wQ/YSjS6LDwSZI/AAAAAAAAUow/XCpsJGLaFAwjtFGXmXyBvvwV0cbq9s_KQCLcBGAsYHQ/s1920/IMAGE%2B3.jpeg)no-repeat;
            background-size: cover;
            background-position: center;
        }
        
        header {
            position: relative;
            top: 0;
            width: 100%;
            padding: 30px 100px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        header .logo {
            
            color: rgb(0, 255, 21);
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            font-size: 60px;
            text-decoration: none;
            text-transform: uppercase;
            font-weight: 800;
            letter-spacing: 0px;
        }
        
        header .N a {
            color: rgb(255, 255, 255);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-decoration: double;
            font-size: 19px;
            font-weight: 500;
            letter-spacing: 1px;
            padding: 4px 14px;
            border-radius: 50px;
            transition: 0.3s;
            transition-property: background;
        }
        
        header .N a:not(:last-child) {
            margin-right: 30px;
        }
        
        header .N a:hover {
            background: rgb(0, 255, 34);
        }
        
        .content {
            max-width: 650px;
            margin: 60px 100px;
        }
        
        .content .info h2 {
            color: #fffb00;
            font-size: 55px;
            text-transform: uppercase;
            letter-spacing: 2px;
            line-height: 60px;
            margin-bottom: 30px;
        }
        
        .content .info h2 span {
            color: #fff;
            font-size: 50px;
            font-weight: 600px;
        }
        
        .content .info p {
            font-size: 16px;
            font-weight: 500;
            margin-bottom: 40px;
        }
        
        .content .info-btn {
            width: 180px;
            height: 32px;
            outline: none;
            color: black;
            font-weight: bold;
            border: 0px solid #ffffff;
            font-weight: 600;
            color: solid #ffffff;
            letter-spacing: 1px;
            font-size: 14px;
            background-color: rgb(0, 255, 34);
            -webkit-transition: 1s;
            -moz-transition: 1s;
            transition: 1s;
        }
        
        .content .info-btn:hover {
            background: linear-gradient(to right, rgb(0, 255, 34), rgb(0, 255, 34));
            outline: none;
            color: #ffffff;
            border: 1px solid #ffffff;
            -webkit-transition: 1s;
            -moz-transition: 1s;
            transition: 1s;
        }
        
        .media-icon {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: auto;
        }
        
        .media-icon a {
            position: relative;
            color: rgb(255, 255, 255);
            font-size: 25px;
        }
        
        .media-icon a:not(:last-child) {
            margin-right: 60px;
        }
        
        .media-icon a:hover {
            transform: scale(1.5);
        }
        
        label {
            display: none;
        }
        
        #check {
            z-index: 3;
            display: none;
        }
        
        @media (max-width:960px) {
            header .N {
                display: none;
            }
            label {
                display: block;
                font-size: 25px;
                cursor: pointer;
            }
            label:hover {
                color: #fff;
            }
            label .close-btn {
                display: none;
            }
            #check:checked~header .N {
                z-index: 2;
                position: fixed;
                background: rgba(114, 223, 255, 0.9);
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            #check:checked~header .N a {
                font-weight: 700;
                margin-right: 0;
                margin-bottom: 50px;
                letter-spacing: 2px;
            }
            #check:checked~header label .media-icon {
                display: none;
            }
            #check:checked~header label .close-btn {
                z-index: 2;
                display: block;
                position: fixed;
            }
            label .media-icon {
                position: absolute;
            }
            header .logo {
                position: absolute;
                bottom: -6px;
            }
            .content .info h2 {
                font-size: 45px;
                line-height: 50px;
            }
            .content .info h2 span {
                font-size: 40px;
                font-weight: 600;
            }
            .content .info p {
                font-size: 14px;
            }
        }
        
        @media (max-mark:560px) {
            .content .info h2 {
                font-size: 35px;
                line-height: 40px;
            }
            .content .info h2 span {
                font-size: 30px;
                font-weight: 600;
            }
            .content .info p {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>
    <div class="main">
        <input type="checkbox" id="check">
        <header>
            <h2><a href="#" class="logo"> MUSIC SURVEY</a></h2>
            <div class="N">
                <a href="mlist.html">TOP 10 CHARTS</a>
                <a href="about.html">ABOUT</a>
                <?php if(isset($_SESSION['email'])): ?>
                    <a href=""><?= $_SESSION['email'] ?></a>
                    <a href="logout.php">logout</a>
                <?php endif; ?>
            </div>

            <label for="check">
              <i class="fas fa-bars menu-btn"> </i>
              <i class="fas fa-times close-btn"> </i>
          </label>
        </header>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="content">
            <div class="info">
                <h2>YOUR VOICE <br>
                    <span>MATTERS</span></h2>
                <p>
                </p>
                <a href="main.html">
                    <input type="submit" VALUE="ATTEND SURVEY" class="info-btn" />
                </a>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="media-icon">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>

        </div>
    </div>

</body>

</html>