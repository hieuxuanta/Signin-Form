<!DOCTYPE html>
<?php 
session_start();


$_SESSION['username']='nam';

?>
<html lang="en">

<head>
    <title>My Website</title>

    <meta charset="UTF-8">
    <style>
        #aaa {
            
            padding-left: 24.5%;
            display: inline;
        }
        a{
        	text-decoration: none;
            color: #ffff00;
        }
        
        body {
            //background-color: lightblue;
            background-image: url("animal-3d-wallpaper-high-resolution-cool-3d-animal-background-wallpaper-hd-7-full-size.jpg");
        }
        
        h3 {
            padding-left: 45%;
            align: center;
            color: #0d0d0d;
        }
        
        form {
            
            padding-left: 40%;
            color: #0d0d0d;
        }
        
        p {
            padding-left: 24%;
            color: #0d0d0d;
        }
        
        #total {
            text-align: left;
            border: 1px #d9d9d9 solid;
            border-right-style: solid;
            border-right-width: 8px;
            border-right-color: #d9d9d9;
            border-left-color: #d9d9d9;
            border-left-width: 8px;
            border-radius: 100px;
            //border-top-right-radius: 100px;
            //border-bottom-right-radius: 100px;
            //box-sizing:border-box;
            //margin-left: 430;
            //margin-right: 30%;
            margin-left: 430px;
            margin-right: 420px;
            margin-top:10px;
            //padding-left:-100px;
        }
    </style>
</head>

<body>
    <?php
        require_once('connectt.php');
        if(isset($_POST["name"])){
            $username = $_POST["name"];
            $password = md5($_POST["password"]);
            $repassword = $_POST["repassword"];
            $email = $_POST["email"];
            $fullname = $_POST["fullname"];
            $gender = $_POST["gender"];

            $sql="INSERT INTO user(username,password, email, fullname, gender,status) VALUES ('$username',
                '$password','$email','$fullname',$gender,1)";
            $retval =  mysqli_query($conn, $sql);
            if($retval)
            {
                echo "Đăng kí thành công. Mời bạn đăng nhập 
                <a href='index.php'>lại</a>.";
            }else
                {
                    echo "Lỗi :". $sql . "<br>" . $conn->error;
                }
}

    ?>
	<form action="signup2.php" method="POST">
        <table>
            <thread>
                <tr>
                    <th colspan="2"> Đăng kí</th>
                </tr>
            </thread>
            <tbody>
                <tr>
                    <td>
                        Tên đăng nhập
                    </td>
                    <td>
                        <input type="text" name="name" value="" placeholder="your username" style="width:4.5cm" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        Mật khẩu 
                    </td>
                    <td>
                        <input type="password" name="password" value="" placeholder="your password"style="width:4.5cm" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        Nhập lại mật khẩu 
                    </td>
                    <td>
                        <input type="password" name="repassword" value="" placeholder="your repassword"style="width:4.5cm" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        Email
                    </td>
                    <td>
                        <input type="email" name="email" value="" placeholder="your email"style="width:4.5cm" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        Họ tên
                    </td>
                    <td>
                        <input type="text" name="fullname" value="" placeholder="your name"style="width:4.5cm" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        Giới tính
                    </td>
                    <td>
                        <input type="radio" name="gender" value="1" required>Nam<br>
                        <input type="radio" name="gender" value="0" required>Nữ<br>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Sign up">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <a href="signup2.php" title="">Đăng kí
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </form> 
    
    <div id="total">
        <h3> FORM </h3>

            <!--<button> Login </button>-->
            <!--<input type="file" name="avatar">-->
            <!--<input type="range" name="points" min="0" max="100">-->
            <!--Select province:<select name="province">
                <option value="">--PROVINCE--</option>
                <option value="HN">Hanoi</option>
                <option value="HD">Haiduong</option>
            </select>-->


        <br>
        <p>Want to know more details </p>
        <div id="aaa">
            <a href="https://www.facebook.com/hieuxuta" target="_blank"><abbr title="My FB page" style="text-decoration:none">Leave message! </abbr></a>
        </div>
        <br>
        <p>Thanks </p>
    </div>
</body>
</html>