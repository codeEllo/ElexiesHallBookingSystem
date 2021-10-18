<?php
// Connection to the server and datbase
$dbc = mysqli_connect ("localhost","root","","elexieshall");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: ".mysqli_connect_error();
}
$sql = "select * from hall_booking";
$result = mysqli_query($dbc, $sql);
while($row = mysqli_fetch_assoc($result))
{
Print '<tr>
<td><font color="#0000FF">'.$row['BOOK_ID'].'</font></td>
<td><font color="#0000FF">'.$row['BOOK_START'].'</font></td>
<td>
<td><font color="#0000FF">'.$row['BOOK_END'].'</font></td>
<td>
<td><font color="#0000FF">'.$row['BOOK_EVENT'].'</font></td>
<td>
<td><font color="#0000FF">'.$row['BOOK_PRICE'].'</font></td>
<td><font color="#0000FF">'.$row['BOOK_STATUS'].'</font></td>
<td><font color="#0000FF">'.$row['CLIENT_ID'].'</font></td>
<td><font color="#0000FF">'.$row['HALL_ID'].'</font></td>
<td>
</td>
</tr>';
}
?>