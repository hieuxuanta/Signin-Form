<!DOCTYPE html>
<html lang="en">
<title>My Website</title>

<head>
    <meta charset="UTF-8">
    <style>
    body{
        background-color:lightblue;
        padding-top:400px;
        padding-left:850px;
    }
    </style>
</head>

<body>
<?php
    if(isset($_POST["name"]))
    {
        if(isset($_POST["password"]))
        {
            $Username = $_POST["name"];
            $password = $_POST["password"];
            $ck_dang_nhap = true;
            if($Username == "")
            {
                echo "You must fill name <br>";
                $ck_dang_nhap = false;
            }
            if($password =="")
            {
                echo "You must fill password <br>";
                $ck_dang_nhap = false;
            }
            if(strlen ($Username) < 6)
            {
                echo "Your Username must at least 6 characters <br>";
                $ck_dang_nhap = false;
            }
            if($ck_dang_nhap)
            {
                echo "Sign in successfully<br>";
                
                echo '<a href = "https://www.facebook.com/gtechvntraining/" >This is our class !</a>';
            }
            else 
            {
                echo "You must sign in again <br>";
                echo '<a href = "index.php"><br> RETRY??? </a>';
            }
        }
    }
    
?>
</body>

</html>