<?php
$_POST = array_map('strip_tags', $_POST);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="images/favicon.png" type="image/png">

  <title>TAILORING MANAGEMENT SYSTEM</title>

  <link href="css/style.default.css" rel="stylesheet"> 
  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>

<body>

<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>
<?php   
		$pdo->exec("set names utf8");
		$dd = $pdo->query("SELECT currency, sitename FROM general_setting WHERE id='1'");
		$dd = $dd->fetch(PDO::FETCH_ASSOC);
		$currency = $dd['currency'];
 ?>
<section>

  <div class="leftpanel">

    <div class="logopanel">
        <h1>TAILOR MANAGEMENT SYSTEM</h1>
    </div>

    <div class="leftpanelinner">
       
      
      <h5 class="sidebartitle">Navigation</h5>
      <ul class="nav nav-pills nav-stacked nav-bracket">
	
        <li><a href="home.php"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
      	<li><a href="orderadd.php"><i class="fa fa-shopping-cart"></i><span>Add Order</span></a></li>
        <li><a href="orderlist.php"><i class="fa fa-shopping-cart"></i><span>View/Edit Orders</span></a></li>
        <li><a href="customeradd.php"><i class="fa fa-user"></i><span>Add Customer</span></a></li>
        <li><a href="customerview.php"><i class="fa fa-user"></i><span>View/Edit Customer</span></a></li>

            <li><a href="expadd.php"><i class="fa fa-caret-right"></i>Add Expenses</a></li>
            <li><a href="expview.php"><i class="fa fa-caret-right"></i>View/Edit Expenses</a></li>
            <li><a href="expcatadd.php"><i class="fa fa-caret-right"></i>Add Expense Category</a></li>
            <li><a href="expcatview.php"><i class="fa fa-caret-right"></i>View/Edit Expense Category</a></li>
             
        <li><a href="changepass.php"><i class="fa fa-cog"></i> <span>Account Settings</span></a></li>
        <li><a href="signout.php"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
      </ul>
      
        
    </div>
  </div>

  <div class="mainpanel">
    <div class="headerbar">
      <!-- <a class="menutoggle"><i class="fa fa-bars"></i></a> -->
      <div class="header-right">
        <ul class="headermenu">
          <li>
            <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">

              <?php
              echo "<img src='images/user.png' alt='' />";
              echo " $user";
              ?>
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
              <li><a href="changepass.php"><i class="fa fa-cog"></i> <span>Account Settings</span></a></li>
              <li><a href="signout.php"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
              </ul>
            </div>
          </li>

        </ul>
      </div>
    </div>


    <div class="contentpanel">