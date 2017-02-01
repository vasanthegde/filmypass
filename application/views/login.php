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

#login {
	margin-top:2%;
    border-radius: 5px;
    border: 2px solid black;
    padding: 20px; 
    width: 400px;
    height: 33%; 
    margin-left:35%;   
}



</style>
<body>
<?php //if(isset($_GET($fail)))
{
//echo $fail;
}?>
<?php 

if (isset($authUrl)){  ?>
 
 <div align="center"> 
 	<h3>Continue with Google</h3> 

  	 <a class="login" href="<?php echo $authUrl;?>"> 
	 	<img src="<?php echo base_url().'images/google+.png'?>" />
	 </a>

 </div> 
 <?php }?>



<h2 style="text-align:center">OR</h2>

<?php echo form_open('User_auth/check_password'); ?>
 <div class="container" id="login">
  
  <form role="form">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="pwd" placeholder="Enter password">
    </div>
   
    <button type="submit" class="btn btn-warning" style="margin-left:35%">Submit</button>
  </form>
</div>
<?php echo form_close(); ?>


</body> 