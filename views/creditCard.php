<?php include('./includes/userHeader.php');
    include ('../controllers/paymentController.php');
?>

<br>
<div class="container">



	</aside> <!-- col.// -->
	<aside class="col-sm-12">
	<p align = center ><img src="./images/TK1.png" height = 200%,  width = 50% ></p>


<article class="card">
<div class="card-body p-5">

<ul class="nav bg-light nav-pills rounded nav-fill mb-3" role="tablist">
	<li class="nav-item">
		<a class="btn btn-info nav-info" data-toggle="pill" href="#nav-tab-card">
		<i class="fa fa-credit-card"></i> Credit Card</a></li>
	<li class="nav-item">
		<a class="btn btn-success nav-success" data-toggle="pill" href="paypal.php">
		<i class="fab fa-paypal nav-info"></i>  Paypal</a></li>
	<li class="nav-item">
		<a class="btn btn-info nav-info" data-toggle="pill" href="bkash.php">
		<img width = "50" height = "30" src="../images/bkash.svg" alt="..." />Bkash</a></li>
</ul>

<div class="tab-content">
<div class="tab-pane fade show active" id="nav-tab-card">

<div class="container">
    <h1>Contact Us Here</h1>


    <form action="" method="POST" class="main-form">
      <div class="form-group">
        <label for=""></label>
        <input type="text" name="cardID" id="cardID" class="gt-input" placeholder = "Card Number"
          value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $cardID ?>">
      </div>

      <div class="form-group">
        <label for=""></label>
        <input type="text" name="expMonth" id="expMonth" class="gt-input" placeholder = "Expiry Month"
          value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $expMonth ?>">
      </div>

      <div class="form-group">
        <label for=""></label>
        <textarea name="expYear" id="expYear" placeholder = "Expiry Year"
          class="gt-input gt-text"><?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $expYear ?></textarea>
      </div>

	  <div class="form-group">
        <label for=""></label>
        <textarea name="cvv" id="cvv" placeholder = "CVV"
          class="gt-input gt-text"><?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $cvv ?></textarea>
      </div>

      <input type="submit" class="gt-button" value="Submit">

      <div class="form-status">
        <?php echo $status ?>
      </div>
    </form>



  </div>

</div> 
</article> 