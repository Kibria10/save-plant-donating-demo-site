<?php 
    include_once 'includes/userHeader.php';
	include_once '../helpers/session_helper.php';
?>
<br>
<!DOCTYPE html>
<html lang="en">


<div class="container">




	<aside class="col-sm-12">
	<p align = center ><img src="images/TK1.png" height = 100%,  width = 50% ></p>


<article class="card">
<div class="card-body p-5">

<ul class="nav bg-light nav-pills rounded nav-fill mb-3" role="tablist">
	<li class="nav-item">
		<a class="btn btn-info nav-info" data-toggle="pill" href="donate.php">
		<i class="fa fa-credit-card"></i> Credit Card</a></li>
	<li class="nav-item">
		<a class="btn btn-success nav-success" data-toggle="pill" href="paypal.php">
		<i class="fab fa-paypal nav-info"></i>  Paypal</a></li>
	<li class="nav-item">
		<a class="btn btn-info nav-info" data-toggle="pill" >
		<img width = "50" height = "30" src="images/bkash.svg" alt="..." />    Bkash</a></li>
</ul>

<div class="tab-content">
<div class="tab-pane fade show active" id="nav-tab-card">




<?php flash('payment') ?>
   
    <form method="post" class="form-inline" action="../controllers/paymentControler.php">
        <input type="hidden" name="type" value="payment">
<label for="cardNumber">Enter your Phone Number</label>
<div class="input-group">
	<div class="input-group-prepend">
		<span class="input-group-text"><i class="fa fa-credit-card"></i></span>
	</div>
	<input type="text" class="form-control" name="BphoneNum" placeholder="phone number">
</div> 
</div> 

<div class="row">
    <div class="col-sm-8">
        <div class="form-group">
     
				</select>
        	</div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
        
           
        </div> 
    </div>
</div> 
</div>

<button type="submit" name="submit">Submit</button>
</div>
<!-- <button class="subscribe btn btn-primary btn-block" type="button"> Confirm  </button> -->
</form>
</div> 
</article> 