 <?php if($this->session->userdata('secure_login_flag') == 1 ){?>

<html>

<head>

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.min.js" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/jquery.min.js" media="screen">

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/w3.css" media="screen">

</head> 
<style>
h3
{
	color: black;
	font-size: 50px;
	text-align: center;
}
 </style>
 <?php include 'header.php'; ?>
	<body>
		<div class="container responsive" >
			<h2 style="text-align:center">Book tickets for</h2>
			<h3><?php echo $name;?></h3><br><br>
			<img src="<?php echo base_url()?>css/images/seats.png" style="margin-left:20%;" />
	</div>
	</body>
	</html>



<?php }  else

//redirect(echo Base_url(););
?>