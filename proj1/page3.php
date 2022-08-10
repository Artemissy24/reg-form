<?php
include("page2.php ");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c26d61723c.js" crossorigin="anonymous"></script>
    <title>IEEE MLAS 2.0 Registration is live!</title>
    <link rel="stylesheet" href="page.css">
    <style>
        #mlas{
            color:black;
            font-family: "Lucida Console", "Courier New", monospace;
            padding: 30px;
            font-size: 20px; 
            text-align: center;
        }
        #submit{
            margin-left:300px;
    margin-bottom:50px;
    cursor: pointer;
    border-radius: 10px;
    background: #0066A2;
    color: white;
    border-style: outset;
    border-color: #0066A2;
    height: 50px;
    width: 200px;
    font: bold15px arial,sans-serif;
    text-shadow: none;
    font-size:20px;
        }
        #submit:hover{
            transform: scale(1.3);
        }
        body{
    background: url(bg2.jpg) no-repeat center center fixed;
    background-size: cover;
}
.container{
background-color:whitesmoke;
position: absolute;
top: 20%;
left: 5%;
border-radius: 10px;
width:60%;
margin:30px;
}
.container h1{
    color:black;
    font-size: 50px;
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    margin-bottom: 30px;
    padding: 40px;
    text-align: center;
    padding:30px;
}
.box{
    text-indent: 50px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif ;
    padding: 5px;
    font-size: 25px; 
    width:60%;
}
 
.box input{
    padding: 5px;
    margin: 7px;
    font-size: 23px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif ;
    width:60%;
    outline:none;
    border-width: 0px;
    border-bottom:2px solid black;
}
.menu{
    font-size: 25px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif ;
    padding:20px;
    margin-left:43px;
}
img:hover {
    transform: scale(1.3);
    }
.marquee{
    width: 80%;
  background: violet;
  margin: 43px;
  white-space: nowrap;
  overflow:hidden;
}
.marquee div{
    font-size: 25px;
    font-family: verdana;
    animation: animate 10s linear infinite;
    padding-left: 100%;
    display: inline-block;
    animation: animate 10s linear infinite;
  }
  @keyframes animate{
    100%{
      transform: translate(-100%, 0);
    }
  }
  .marquee:hover div{
    animation-play-state: paused;
  }
  
    </style>
</head>
<body>
    <form method="POST" action="process.php"> 
    
    <img src="logo.png" alt="mlas-logo" style="width:300px;height:300px;margin:250px 0px 50px 1000px;">
    
    <img src="t-shirt.png" alt="MLAS-tshirt" style="width:300px;height:300px;margin:50px 0px 50px 1000px;">
    <div class="container">
        <h1>MLAS 2.0 REGISTRATION</h1>
        <p id="mlas">The ML Accelerator is IEEE JU SB's flagship event to sow the seeds of interest about this amazing field in the minds of future technocrats.</p>
        <div class="marquee">
            <div>Ticket Price: IEEE Member-<span>&#8377;</span>249, Non IEEE Member-<span>&#8377;</span>399</div>
        </div>
        <div class="box">
            <i class="fa-solid fa-user"></i>
            <td><input type="user" name="user" id="user"
            placeholder="Your name"></td>
        </div>
        <div class="box">
            <i class="fa-solid fa-at"></i>
            <td><input type="email" name="email" id="email"
            placeholder="Your email"></td>
        </div>
        <div class="box">
            <i class="fa-solid fa-phone"></i>
            <td><input type="cno" name="cno" id="cno"
            placeholder="Your contact number"></td>
        </div>
        <div class="box">
            
            <i class="fa-solid fa-graduation-cap"></i>
            <td><input type="yr" name="yr" id="yr"
            placeholder="Your current year"></td>
        </div>
        <div class="box">
            <i class="fa-solid fa-gear"></i>
            <td><input type="br" name="br" id="br"
            placeholder="Your branch"></td>
        </div>
        <div class="menu">
            Are you a member of IEEE?<br>
            <input type="radio" name="member" value="y"> Yes<br>
            <input type="radio" name="member" value="n"> No
        </div>
        <div class="menu">
            What is your food preference?<br>
            <input type="radio" name="food" value="n">Non-veg <br>
            <input type="radio" name="food" value="v">Veg 
        </div>
        <div class="menu">
            Select T-shirt size:<br>
            <input type="radio" name="size" value="s">S <br>
            <input type="radio" name="size" value="m"> M<br>
            <input type="radio" name="size" value="xl">XL<br>
            <input type="radio" name="size" value="xxl">XXL<br>
        </div>
        <input type="submit" name="submit" value="Let's go!" id="submit">
    </div>
    </form>
</body>
</html>