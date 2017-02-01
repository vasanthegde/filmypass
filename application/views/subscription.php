<html>

<head>

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.min.js" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/jquery.min.js" media="screen">

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/w3.css" media="screen">
<?php include 'header.php';?>
</head> 
<style type="text/css">
#monthly
{	 
	text-align: center;
	position: relative;
	left:10%;
	width: 80%;
	height: 20%;
	background-color: lavender;
	 
	border: 1px solid black;
}
#weekly
{ 
	text-align: center;
	 position: relative;
	 left:9%;
	width: 82%;
	height: 20%;
	background-color: lavenderblush;
	border: 1px solid black;
	margin-bottom: 3%;
}
 p{
 	font-size: 25px;
 }
 h2
 {
 	color: red;
 	font-size: 35px;
 }
 #for_weekly
 {
 	position: absolute;
 	top: 43%;
 	left:82%;
 }
  #for_monthly
 {
 	position: absolute;
 	top: 63%;
 	left:90%;
 }
</style>
 
	<body>
		
		<div class="w3-container">
<div>

<div id="weekly">

<h2>
Weekly Pass</h2><p>Get 5 tickets for Rs.475 valid for 7 days. </p>

		</div>

<a href="<?php echo Base_url();?>index.php/Individual_movie/payment/" class="w3-btn w3-blue" id="for_weekly">subscribe</a>
			
		<div id="monthly">
	<a href="<?php echo Base_url();?>index.php/Individual_movie/payment/" class="w3-btn w3-green" id="for_monthly">subscribe</a>

<h2>Monthly pass</h2><p>Get 10 Tickets for Rs.975 valid for 30 days.

</p>
		</div>


		</div>
	
	</div>
	</body>
	</html>