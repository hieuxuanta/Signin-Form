<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User_management</title>
</head>
<body>
	
<?php
	session_start();
	if(!isset($_SESSION["Username"]))
	{
		echo "Bạn cần đăng nhập để <a href='index.php'>tiếp tục.</a>";
	}else{
	require_once('connectt.php');

	$sql = "select * from user";
	//$query = mysqli_query($conn,$sql);
	$result = $conn->query($sql);
	//$num_rows = mysqli_num_rows($query);
	if($result -> num_rows == 0)
	{
		echo "Không có bản ghi nào ";
	}else
	{
		
?>
			<table border="1">
				<caption>Quản lý user</caption>
				<thead>
					<tr>
						<th>ID</th>
						<th>Username</th>
						<th>Email</th>
						<th>Họ và tên</th>
						<th>Giới tính</th>
					</tr>
				</thead>
				<tbody>
					<?php while ($row = $result -> fetch_assoc())
					{
		 ?>
					<tr>
						<td><?php echo $row['ID']?></td>
						<td><?php echo $row['username']?></td>
						<td><?php echo $row['email']?></td>
						<td><?php echo $row['fullname']?></td>
						<td><?php echo (  $row['gender'] == 0) ? "Nữ" : "Nam";
						?></td>
						<td><a href="edit_user.php?id=
								<?php echo $row['ID'] ?>"
							>Sửa</a></td>
						<td><a href="">Xóa</a></td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		<?php 
			}
			} 
		?>

</body>
</html>