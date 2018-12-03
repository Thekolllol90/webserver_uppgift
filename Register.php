<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>register</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        
        body{
            background-color: darkgrey;
        }
        #container{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #box{
            width: 500px;
            height: 500px;
            background-color:rgba(139,0,0,0.5);
            margin-top: 100px;
            text-align: center;
        }
        #pic{
            margin-top: 60px;
        }
        .text{
            margin: 20px;
        }
        .text > div{
            background-color: black;
        }
        form{
            background-color:rgba(139,0,0,0.6); 
            width: 200px;
            height: 340px;
            margin-left: 150px;
            border: solid black 5px;
        }
        
        
    </style>
</head>
<body>
   <div id="container">
    <div id="box">
        <img src="pic.jpg" height="80px" id="pic">
        <form method="post" action="">
        <div class="text" id="box1">
           <p>Username: </p>
            <input type="text" name="uname">
        </div>
        <div class="text" id="box2">
            <p>Fullname: </p>
            <input type="text" name="name">
        </div>
        <div class="text" id="box3" >
            <p>Age: </p>
            <input type="number" min="0" max="120" name="age">
        </div>
        <div class="text" id="box4">
            <p>Password: </p>
            <input type="password" name="pas">     
        </div>
        <div class="text" id="box5">
            <p>Email: </p>
            <input type="email" name="mail">
        </div>
        <div class="text" id="box6">
            <input type="submit" name="sub" value="Submit">
        </div>
        </form>
        <?php
        if(isset($_POST['uname']) && isset($_POST['name']) && isset($_POST['age']) && isset($_POST['pas']) && isset($_POST['mail'])){
            $dbc_form = mysqli_connect("localhost","root","","web");
            
            $uname = $_POST['uname'];
            $name = $_POST['name'];
            $age = $_POST['age'];
            $pas = $_POST['pas'];
            $mail = $_POST['mail'];
            
            $query = "INSERT INTO user (username,fullname,age,password,email) VALUES ('$uname','$name','$age','$pas','$mail')";
            
            mysqli_query($dbc_form,$query);
            
            header("location: Home.php");
        }
        ?>
       </div>
    </div>
</body>
</html>