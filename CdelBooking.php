<html>
<head>
</head>
<body>
<?php

$dbc = mysqli_connect("localhost","root","","elexieshall");
if(mysqli_connect_errno()){
	echo "failed to connect to MySQL : ".mysqli_connect_error();
}
$bookid = $_GET['bkid'];
$sql= "select * from hall_booking where BOOK_ID = '$bookid'";
$result = mysqli_query($dbc,$sql);
	
if(false === $result){
	echo mysqli_error();
}

$row = mysqli_fetch_assoc($result)
	
?>
<ul id = "menu" style="position: relative;top: 50px;">
		<li><a href = "myHistory.php">BACK</a></li> |
	</ul>

<style>body{
  			background: url("img/hall.jpg") no-repeat fixed center;
			height: 125vh;
			background-size: cover;
    		background-position: center;
		}
	
	#menu{
	list-style-type:none;
	font-size:18px;
}

	#menu li{
		display:inline;
	}
	</style>

<form action="CdelBookprocess.php? bkid=<?php echo $bookid;?>" method="post" style="position: relative;top: 80px;">
<h2 align="center">DELETE HALL BOOKING RECORD</h2>
<table width="809" height="313" border="1" align="center">
<tr>
<h3><td>BOOKING ID</td>
<td><input type="textarea" name="bkid" value='<?=$row['BOOK_ID'];?>' disabled></td>
</h3>
</tr>
<tr>
<h3><td>CLIENT ID</td>
<td><input type="textarea" name="cliId" value='<?=$row['CLIENT_ID'];?>' disabled></td>
</h3>
</tr>
<tr>
<td>HALL ID</td>
<td><input type="textarea" name="hallId" value='<?=$row['HALL_ID'];?>' disabled></td>
</tr>
<tr>
<td>START BOOK DATE</td>
<td><input type="date" name="book_start" value='<?=$row['BOOK_START'];?>' disabled></td>
</tr>
<tr>
<td>END BOOK DATE</td>
<td><input type="date" name="book_end" value='<?=$row['BOOK_END'];?>' disabled></td>
</tr>
<tr>
<td>EVENT CATEGORY</td>
<td><input type="textarea" name="cat" value='<?=$row['BOOK_EVENT'];?>' disabled></td>
</tr>
<tr>
<td>EVENT NAME</td>
<td><input type="textarea" name="nme" value='<?=$row['BOOK_NAME'];?>' disabled></td>
</tr>
<tr>
<td>TOTAL PRICE</td>
<td><input type="textarea" name="price" value='<?=$row['BOOK_PRICE'];?>' disabled></td>
</tr>
<tr>
<td>BOOKING STATUS</td>
<td><input type="textarea" name="stat" value='<?=$row['BOOK_STATUS'];?>' disabled></td>
</tr>

<tr>
<td colspan="2"><center><input type="submit" value="DELETE" onClick="return confirm('Are you sure?')"></center></td>
</tr>
</table>
</form>
</body>
</html>