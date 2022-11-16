<?php 
include("includes/db.php");
include("function/functions.php")
 ?>

<!DOCTYPE html>
<html>
<head>

	<title>Online shopping for electronics</title>
	<link rel="stylesheet" media="all" href="style/style1.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<script src="js/jquery-3.4.1.js"></script>
</head>
<!-------------main container start here   ------------->
<body>
	<div class="main_wrapper">

		<div class="header_wrapper">
		
		<div id="form">
			<form method="get" action="results.php" enctype="multipart/form-data">
				<input type="text" name="user_query" placeholder="Search a product">
				<input type="submit" name="search" value="Search">
			</form>
		</div>
		<div class="cart">
			<ul>
				<li class="dropdown_header_cart">
					<div id="notification_total_cart" class="shopping_cart">
						<a href="cart.php"><i class="material-icons" id="cart_icon">shopping_cart</i></a>
						<div class="noti_cart_number">
							<?php total_items();?>
						</div>
					</div>
				</li>
			</ul>
		</div>

			<?php if(!isset($_SESSION['user_id'])){ ?>
  
  <div class="register_login">
  <div class="login"><a href="index.php?action=login">Login</a></div>
 
  <div class="register"><a href="register.php">Register</a></div>
  </div><!-- /.register_login --> 
  
  <?php }else{ ?>
  
  <?php 
  $select_user = mysqli_query($con,"select * from users where id='$_SESSION[user_id] '");
  $data_user = mysqli_fetch_array($select_user);
  ?>
  
  <div id="profile">
    
	<ul>
	  <li class="dropdown_header">
	   <a>
	   
	   <?php if($data_user['image'] !=''){ ?>
	   
	    <span><img src="upload-files/<?php echo $data_user['image']; ?>"></span> 
		 
	   <?php }else{ ?>
	   
	   <span><img src="images/profile-icon.png"></span>
	   
	   <?php } ?>
	   
	   </a>
	   
	   <ul class="dropdown_menu_header">
	     <li><a href="my_account.php?action=edit_account">Account Setting</a></li>
		 <li><a href="logout.php">Logout</a></li>
	   </ul>
	   
	  </li>
	</ul>
  </div>
  
  <?php } ?>
  
  </div><!-- /.header_wrapper --> 
	<?php include('js/drop_down_menu.php') ?>
</body>
</html>