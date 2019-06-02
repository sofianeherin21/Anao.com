<?php
include("connection.php");

            $em1=@$_POST["cart1"];
            $em2=@$_POST["cart2"];

			if($em1)
            {

                
                    $selectedProduct = $_POST["cart1"];

                echo 'Selected Product  = '.$selectedProduct;

            }
            if($em2)
            {

                    $selectedProduct = $_POST["cart2"];

                echo 'Selected Product  = '.$selectedProduct;

            }
session_start();
if(!isset($_SESSION["email"])){
	$username="";
}
else{
	$username=$_SESSION["email"];
}

echo "email:".$username;

$sql = "SELECT * FROM customer where email='$username'";
       
   	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result);
    $name=$row['username'];
    $id=$row['cust_id'];
	
echo "email:".$name;


?>
<html>
<head>
<title>Anao.com</title>
<link href='css/style.css' rel='stylesheet' type='text/css'>

</head>
<body>
      <div id='wrapper'>
	  <div id='header'>
	  <div id='subheader'>
      <div class='container'>
	        <p><marquee direction="right"> welcome <?php echo $name; ?></marquee></p>
       	   <a href='#'>About us</a>
		   <a href='#'>About traveler</a>
		   <a href='#'>About products</a>
		   
       </div>
	   </div>
	   <!--mainheader-->
	   <div id='main-header'>
	       <!--logo-->
	   <div id='logo'>
	       <span id='ist'>Anao</span><span id='iist'>.com</span>
	   </div>
	   <div id='search'>
	   <form action=''>
	       <input class='search-area' type='text' name='text' placeholder='Search here'>
            <input class='search-btn' type='submit' name='submit'	value='SEARCH'>	   
	   </form>
	   </div>
	   <div id='user-menu'>
	     <li><a href='sign_up.php'>Cart</a></li>
		  <li><a href='logout.php'>Log out</a></li>
          		 
		   </div>
		</div>
		</div>
		<div id='navigation'>
		<nav>
		
		<a href='#'>Home</a>
		<a href='#'>Electronics</a>
		<a href='#'>Watches</a>
		<a href='#'>Books</a>
		<a href='#'>Video games</a>
		<a href='#'>Cosmetics</a>
		</nav>
		
	   </div>
	   </div>
	   <div class='prod-container'>
	   	<?php     
	           $sql = "SELECT * FROM products";
       
   	                $result=mysqli_query($conn,$sql);

	                     while($row=mysqli_fetch_assoc($result)){
		                         echo "<form><div class='prod-container-part'><div class='prod-box'><img src='images/" . $row['pic']. "' alt='man suit'><div class='prod-trans'>
			                      <div class='prod-feature'><p>" . $row["product_name"] . "</p><p style=
								 'color:#fff;font-weight:bold;'>Price : $". $row["price"] . "</p><button type='submit' name='cart1' value='".$row["product_name"]."'>Add to cart</button>
						<button type='submit' name='cart2' value='".$row["product_name"]."'>Buy Now</button></div></div></div><div class='info'> <p style='color:black; padding-top:2px;padding-left:3px;'>
						Description : ". $row["description"] . "</p></div></form></div>";
		
                         }
			   ?>
			
						 
						 
						 
						 
						 
			<div id='footer'>
			  <div class='footerSub1'>
			       <img class='footer-image' src='images/anao.png'>
				   <p style='color:black; font-size:25px; padding-top:2px; font-weight:bolder;'>Hot Line: THU-FRI, 10AM - 10PM</p>
            	  <p style='color:black; font-size:25px; padding-top:-10px; '>+880 1665989562476</br>+880 1732184542135</p>
			  </div>
			  <div class='footerSub2'>
			    
				<h1>Developers</h1>
				<p style='font-size:20px;'>Sakib Ahmed</br>Shamit Ahmed</br>Sofia Neherin</br>Humayra Alam Nuha</br>Dhaka,Bangladesh-1219</br>Bangladesh</p>
				<p  style='font-size:20px;'><a href='https://www.facebook.com/sawkyieb.khan'>Or click here</a>
				
			  </div>
			  <div class='footerSub2'>
			    
				<h1>Contact us</h1>
				<p style='font-size:20px;'>Sakib019898@gmail.com</br>01989863922</br>Shamit@yahoo.com</br>0173859541256</br>Neherin@outlook.com</br>01989365742</br>RoboAlam@cloud.com</br>01875412987453</p>
				
			  </div>
			  
			</div>
			
	  
</body>
</html> 