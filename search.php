<?php

// Create connection
$conn = mysqli_connect("localhost", "root", "", "assignment");
$sql = "SELECT * FROM register WHERE city LIKE '%".$_POST['name']."%'";
// echo "hello";
// exit();
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
		echo "	<tr>
		          <td>".$row['name']."</td>
		          <td>".$row['age']."</td>
				  <td>".$row['user_type']."</td>
				  <td>".$row['mobile']."</td>
				  <td>".$row['gender']."</td>
		          <td>".$row['city']."</td>
		          
		        </tr>";
		
	}
}
else{
	echo "<tr><td>0 result's found</td></tr>";
}

?>


		
	