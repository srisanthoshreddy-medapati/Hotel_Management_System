<html>
<?php
	$conn = new mysqli("localhost","root","", "iwp");
	if($conn->connect_error)
	{
		die("Connection failed: ".$conn->connect_error);
	}
	$num = $_POST["noofrooms"];
	$r = $_POST["rooms"];
	$sql = "UPDATE rooms_count SET AvailableRooms = AvailableRooms+$num WHERE RoomType='$r'";
	if(mysqli_query($conn,$sql))
	{
		header("Location: admin_room_added1.php");
	}
?>
</html>