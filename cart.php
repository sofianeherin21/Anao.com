<?php
              
$username1=isset($_POST['cart1']) ? $_POST['cart1'] : "";
if($username1==="")
{ echo "Field is blank:"; } 
else { 
echo "Success"; 
}
$username2=isset($_POST['cart2']) ? $_POST['cart2'] : "";
if($username2==="")
{ echo "Field is blank:"; }
 else { echo "Success"; }
		
		    
?>