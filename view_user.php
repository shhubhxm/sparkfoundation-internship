<!DOCTYPE html>
<html lang="en">
<head>
  <title>View User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="table.css">
  <link rel="stylesheet" type="text/css" href="navbar.css">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@1,300&family=Ubuntu:ital@1&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  body{
    background-color: #bbbbbb;
    /* background-image: url('https://www.knoxalliance.store/wp-content/uploads/2017/05/light-color-background-images-for-website-top-hd-images-for-free-background-for-website-in-light-color-1-1024x640.jpg'); */
  }
  </style>
</head>
<body>
  <?php
   include 'navbar.php';
   ?>
<br><br>
<div class="container">
  <h2 style="text-align:center;">View Customers</h2>
  <?php
  $conn = mysqli_connect('localhost','root','','website');
  if(isset($_GET['del'])){
  $del_Id = $_GET['del'];
  $delete = "DELETE FROM user WHERE Id='$del_Id'";
  $run_delete = mysqli_query($conn , $delete);
  if($run_delete === true){
        echo "Record has been deleted successfully";
      }else {
        echo "Failed Try Again";
      }
  }
   ?>
  <br>
  <br>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Current Balance</th>
        <th>Delete</th>
        <th>View</th>
      </tr>
    </thead>
    <tbody >
      <?php
      $conn = mysqli_connect('localhost','root','','website');
        $select = "SELECT * FROM users";
        $run = mysqli_query($conn, $select);
      while($row_user = mysqli_fetch_array($run)){
        $user_id = $row_user['id'];
        $user_name = $row_user['name'];
        $user_email = $row_user['email'];
        $user_currentbalance = $row_user['balance'];
       ?>
      <tr>
        <td><font color="#393e46"><?php echo $user_id;?></font></td>
        <td><font color="#393e46"><?php echo $user_name;?></font></td>
        <td><font color="#393e46"><?php echo $user_email;?></font></td>
        <td><font color="#393e46"><?php echo $user_currentbalance;?></font></td>
        <td><button class="del" href="view_user.php?del=<?php echo $user_id;?>">Delete</button></td>
        <td><button class="view" href="details.php?id=<?php echo $user_id;?>">View</button></td>
         </tr>
      </tr>
    <?php } ?>
    </tbody>
  </table>

</div>
<div id="Contact" class="offset">
  <footer>
		<div class="row justify-content-center">
			<div class="col-md-5 text-center">
        <font color="white">
				<p textstyle="text-align:center">JPMorgan Chase</p>
				<p>We provide 24/7 service</p>
				<strong>Contact Info</strong>
				<p>+91-7984573622
					<br>
					</p>
        </font>
					<a href="https://www.facebook.com/thesparksfoundation.info"><i class="fab fa-facebook-square"></i></a>
					<a href="https://twitter.com/tsfsingapore"><i class="fab fa-twitter-square"></i></a>
					<a href="https://www.instagram.com/thesparksfoundation.info"><i class="fab fa-instagram"></i></a>
			</div>
			<hr class="socket">
			&copy; JPMorgan Chase & Co
		</div>
	</footer>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.6.1/js/all.js"></script>
</body>
</html>
