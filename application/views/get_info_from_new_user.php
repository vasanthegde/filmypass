 <?php if($this->session->userdata('secure_login_flag') == 1){?>
 <html>

<header class="w3-container w3-grey" style="margin-bottom:20px;">
	<h1 style="text-align:center">Filmypass</h1>
</header>

<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.min.js" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/jquery.min.js" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/w3.css" media="screen">
</head>

<style type="text/css">
#form-div{
	width:30%;
	position: absolute;
	top:20%;
	left:34%;
	border: 2px solid black;
	border-radius: 10px;
	box-shadow: 2px;
}
form{
	position: relative;
	left:5%;

}
h2
{
	text-align: center;
}
input
{
	width: 90%;
}
</style>

<h2>Welcome to Filmypass</h2>
<div class="w3-container" id="form-div">

 <?php echo form_open('User_auth/set_password'); ?>
<form class="w3-container w3-card-8">
   
   
   	<div class="w3-group"> 
	 	<input class="w3-input " type ="text" name="user_name" required>
	   	<label class="w3-label" style="color:green"> user name</label>
  		</div>
 
		<div class="w3-group"> 
	 	<input class="w3-input " type ="password" name="pwd" required>
	   	<label class="w3-label" style="color:green">password</label>
  		</div>


		<div class="w3-group"> 
	 	<input class="w3-input " type ="number" name="phone" required>
	   	<label class="w3-label" style="color:green">phone number</label>
  		</div>

  			<div class="w3-group"> 
	  		<input class="w3-input " type ="text" name="location" required>
	   		<label class="w3-label" style="color:green">location</label>
  			</div>

  		<div class="w3-group"> 
		<input class="w3-btn w3-dark-grey" type ="submit" value="continue">
	 	</div>
  </div>
	</form>

 
<?php echo form_close(); ?>
</div>
</body>
</html>

<?php } else {
 	redirect('http://localhost/filmypass/');
 } ?>