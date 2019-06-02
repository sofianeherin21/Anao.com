<?php
include("travelerProfile.php");
$flight=@$_POST['flight'];
$sent=@$_POST['sent'];
$place=@$_POST['place'];

echo $id;
if(isset($_POST['submit']) && $flight && $sent && $place  ){
		          $sql = "UPDATE traveler_advance
                          SET flight = '$flight', sent_time= '$sent', place='$place' 
                          WHERE trav_id = $id ";

				$result=mysqli_query($conn,$sql);
				header("Location: travelerProfile.php");
		}
		else{
		   echo"Fill up all the form first !";
		}

?>

<form method='post' >
			   
			   
			   </br> <label>flight</label>
			   <input type='text' name='flight' id='flight' class='txtfield' placeholder='FLIGHT' tabindex='1' autocomplete='off'>
               
			   </br><label>Sent Time</label>
               <input type='text' name='sent' id='amount' class='txtfield' placeholder='SENT_TIME' tabindex='2' autocomplete='off'>
               
			   </br><label>Place</label>
			   <input type='text' name='place' id='price' class='txtfield' placeholder='Place' tabindex='3' autocomplete='off'>
              
			 <input type='submit' name='submit' id='submitlogin' class='btn' tabindex='5'>
			 
</form>
<div id='data'>
<table>
 <tr>
  <th>flight</th>
  <th>Sent time</th>
  <th>place</th>  
 
 </tr>
<?php     
	$sql = "SELECT * FROM traveler_advance where trav_id=$id";
       
   	$result=mysqli_query($conn,$sql);

	while($row=mysqli_fetch_assoc($result)){
		echo "<tr><td>" . $row['flight']. "</td><td>" . $row["sent_time"] . "</td><td>". $row["place"] . "</td></tr>";
		
	}
	echo "</table>";
?>
	</div>
	</body>
</html>
