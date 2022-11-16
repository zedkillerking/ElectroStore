
<?php include('includes/header.php'); ?>
<!------------ Header starts --------------------->

<!------------ Header ends ----------------------->
<div class="menu_bar">
      <ul id="menu">
        <li><a href="index.php">Home</a></li>
        <li><a href="all_products.php">All Products</a></li>
        <li><a href="my_account.php">My Account</a></li>
        <li><a href="cart.php">Shopping Cart</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
<!------------ Content wrapper starts -------------->
  <div class="content_wrapper" >	  
	    
	  <?php 	  
      if(!isset($_SESSION['user_id'])){
	     include('login.php');
	  }else{
	    include('payment.php');
	  } 
	  
	  ?>  
	
	
  </div><!-- /.content_wrapper-->
  <!------------ Content wrapper ends -------------->
  
  
  
  
