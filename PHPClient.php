
<?php
// Connection to the server and datbase
$dbc = mysqli_connect ("localhost","root","","elexieshall");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: ".mysqli_connect_error();
}
$sql = "select * from client";
$result = mysqli_query($dbc, $sql);
while($row = mysqli_fetch_assoc($result))
{
Print '<tr>
<td><font color="#0000FF">'.$row['CLIENT_ID'].'</font></td>
<td><font color="#0000FF">'.$row['CLIENT_NAME'].'</font></td>
<td>
<td><font color="#0000FF">'.$row['CLIENT_PHONE'].'</font></td>
<td>
<td><font color="#0000FF">'.$row['CLIENT_EMAIL'].'</font></td>
<td>
<td><font color="#0000FF">'.$row['CLIENT_PASS'].'</font></td>
<td>
</td>
</tr>';
}
?>

