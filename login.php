<!DOCTYPE html>
<html lang="en">
<title>My Website</title>

<head>
    <meta charset="UTF-8">
    <style>
    body{
        background-color:lightblue;
        padding-top:290px;
        padding-left:580px;
    }
    </style>
</head>

<body>
<?php
	session_start();
	require_once('connectt.php');
	echo '<br/>';
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
            if(strlen ($Username) < 4)
            {
                echo "Your Username must at least 6 characters <br>";
                $ck_dang_nhap = false;
            }
            if($ck_dang_nhap)
            {
                //echo "Sign in successfully<br>";
                $password = md5($password);
                $sql = "select * from user where username=
                '$Username' and password='$password'";
                echo $sql;
                $query = mysqli_query($conn,$sql);
                $num_rows = mysqli_num_rows($query);
                if($num_rows == 0)
                {
                    echo 'Username khong ton tai';
                }else
                    {
                        $_SESSION['Username'] = $Username;
                        header('Location: user_management.php');
                    }
                
                //echo '<a href = "https://www.facebook.com/gtechvntraining/" >This is our class !</a>';
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
