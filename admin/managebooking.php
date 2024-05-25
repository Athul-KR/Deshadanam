<table class='table'>
	<thead>
		<tr>
			<th>Package id</th>
			<th> user</th>

		</tr>
	</thead>
	<tbody>
<?php
$con=mysqli_connect("localhost","root","","tms");
if(!$con){echo"<script>alert('db error');</script>";}
$sql="select * from booking";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){



echo"
        <tr>
			<td> ".$row['P_ID']."</td>
			<td>".$row['EMAIL']."</td>
			
<td>
</td>
</tr>
	";} ?>
	</tbody>
</table>