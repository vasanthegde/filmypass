 <?php if($this->session->userdata('secure_login_flag') == 1 ){?>

<html>

<head>

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.min.js" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/jquery.min.js" media="screen">

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/w3.css" media="screen">
</head> 
<?php include 'header.php'; ?>
<body>

	<style type="text/css">
	img.poster
	{  
		box-shadow: 5px 5px 5px #888888;
		width: 200px;
		height: 300px;
		}
 

		</style>
 <div class="container">
	<p>
		 

		<?php //print_r($movie_info);
foreach ($movie_info as $val) {
  ?>
  <?php $id =  $val['movie_id'];?>
  <a href="<?php echo base_url();?>index.php/Individual_movie?name=<?php echo $id;?>">
<img src="<?php echo $val['poster'];?>" class="poster"/>

</a>


  <?php
}
		 ?>
	</p>
	</div>

	</body>

</html>
 <?php } else {
 	redirect('http://localhost/filmypass/');
 } ?>