<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit User</title>
</head>
<body>
	<form action="edit_user.php" method="POST">
        <table>
        	<?php 
        		session_start();
        		if(!isset($_SESSION["Username"]))
        		{
        			echo "Bạn cần đăng nhập lại để tiếp <a href='index.php'>tục</a>";
        		}else
        		{
        			require_once('connectt.php');
        			$user_ID=$_REQUEST["id"];
        			$sql = "select * from user where ID=".$user_ID;
        			$result=$conn->query($sql);
        			if($result -> num_rows == 0)
        			{
        				echo "Không có bản ghi nào";
        			}else{
        				$username="";
        				$email="";
        				$fullname="";
        				$gender=0;
        				while ($row = $result -> fetch_assoc())
        				{
        					$username = $row['username'];
        					$email = $row['email'];
        					$fullname = $row['fullname'];
        					$gender = $row['gender'];
        				}
        			}
        		}
        	 ?>
            <thread>
                <tr>
                    <th colspan="2"> Sửa thông tin</th>
                </tr>
            </thread>
            <tbody>
                <tr>
                    <td>
                        Tên đăng nhập
                    </td>
                    <td>
                        <input type="text" name="name" value="<?php echo $username ?>" placeholder="your username" style="width:4.5cm" required>
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
                        <input type="email" name="email" value="<?php echo $email ?>" placeholder="your email"style="width:4.5cm" required>
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
                        <input type="radio" name="gender" value="1" <?php echo ($gender == 1)?"checked":"" ?>> Nam <br>
                        <input type="radio" name="gender" value="0" <?php echo ($gender == 0)?"checked":"" ?>> Nữ
                        <br>
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
</body>
</html>