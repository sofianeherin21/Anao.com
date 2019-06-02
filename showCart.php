<?php
include("travelerProfile.php");
?>
<div id='data'>
<table>
 <tr>
  <th>Customer Id</th>
  <th>Product Id</th>
  <th>Product Name</th>  
  <th>Amount</th> 
  
 </tr>
<?php     
	$sql = "select cart.id,cart.product_id,products.product_name,cart.amount from cart inner join products on cart.product_id=products.product_id";
       
   	$result=mysqli_query($conn,$sql);

	while($row=mysqli_fetch_assoc($result)){
		echo "<tr><td>" . $row['id']. "</td><td>" . $row["product_id"] . "</td><td>". $row["product_name"] . "</td><td>". $row["amount"] . "</td></tr>";
		
	}
	echo "</table>";
?>
	</div>
	</body>
</html>