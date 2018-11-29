<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>menu</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            background-color: darkgray;
        }
        #top{
            background-color: gray;
            height: 105px;
            padding: 10px;
        }
        #menu{
            width: 75%;
            height: 100px;
            background-color: red;
            margin: auto;
            display: flex;
            justify-content: space-around;
        }
        #menu > a{
            background-color: red;
            text-decoration: none;
            color: darkgray;
            font-size: 40px;
            float: left;
            margin-top: 20px;
        }
    </style>
</head>
<body>
   <div id="top">
    <div id="menu">
        <a href="sida1.php">Home</a>
        <a href="sida2.php">Info</a>
        <a href="sida3.php">Planets</a>
        <a href="sida4.php">Profile</a>
       </div>
    </div>
</body>
</html>