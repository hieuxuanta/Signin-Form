<!DOCTYPE html>
<?php 
session_start();


$_SESSION['username']='nam';

?>
<html lang="en">
<title>My Website</title>

<head>
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
	<form action="login.php" method="POST">
		<table>
			<thread>
				<tr>
					<th colspan="2"> Đăng nhập</th>
				</tr>
			</thread>
			<tbody>
				<tr>
					<td>
						Tên đăng nhập
					</td>
					<td>
						<input type="text" name="name" value="" placeholder="your username" style="width:4.5cm">
					</td>
				</tr>
				<tr>
					<td>
						Mật khẩu 
					</td>
					<td>
						<input type="password" name="password" value="" placeholder="your password"style="width:4.5cm">
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" value="Login">
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
