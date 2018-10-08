<!DOCTYPE html>
<html lang="en">
<title>My Website</title>

<head>
    <meta charset="UTF-8">
    <style>
    body{
        background-color:lightblue;
        padding-top:360px;
        padding-left:780px;
    }
    input{
        height:20px;
    }
    /*#signup
    {
        height:20px;
    }*/
    a{
        text-decoration:none;
    }
    </style>
</head>

<body>
<form method="POST">
First name:
    <input type="text" name="name" value="" size="10"> 
Last name: 
    <input type="text" name="name" value="" size="10">
<br>Email :
    <input type="email" name="email" value="" style="width:8.8cm;">
<br> Password  :
    <input type="password" name="password" value="" style="width:8.05cm;" >
<br>
    <input type="submit" id="signup" value="Sign up" style="height:20px;">
    <input type="reset" value="Try again">
<br>    
    Already has account? Sign in 
    <a href = "index.php"> here </a>
</form>
<?php
    if(isset($_POST["name"]))
    {
        if(isset($_POST["password"]))
        {
            $Lastname = $_POST["name"];
            $Firstname = $_POST["name"];
            $password = $_POST["password"];
            $ck_dang_ki = true;
            if($Firstname == "")
            {
                echo "You must fill first name <br>";
                $ck_dang_ki = false;
            }
            if($Lastname == "")
            {
                echo "You must fill last name <br>";
                $ck_dang_ki = false;
            }
            if($password =="")
            {
                echo "You must fill password <br>";
                $ck_dang_ki = false;
            }
            if(strlen($Firstname) < 4)
            {
                echo "Your First name must at least 4 characters <br>";
                $ck_dang_ki = false;
            }
            if(strlen($Lastname) < 4)
            {
                echo "Your Last name must at least 4 characters <br>";
                $ck_dang_ki = false;
            }
            if($ck_dang_ki)
            {
                echo "Sign up successfully<br>";
                echo 'Please sign in <a href="index.php">here</a>';
                //echo '<a href = "https://www.facebook.com/gtechvntraining/" >This is our class !</a>';
            }
            else 
            {
                echo "You must fill again <br>";
                
            }
        }
    }
    
?>
</body>

</html>