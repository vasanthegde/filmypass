<html>
<header class="w3-container w3-grey" style="margin-bottom:20px;">
	
	<h1 style="text-align:center">Admin panel</h1><a href="<?php echo base_url();?>index.php/Admin/" class="w3-btn w3-white" style="float:right">back to admin panel</a>
<a href="<?php echo base_url();?>index.php/Admin/view_theater_id" class="w3-btn w3-green" id="view_theater_id">View Theater Id</a>
<a href="<?php echo base_url();?>index.php/Admin/show_movies" class="w3-btn w3-green" id="list_movie">View movies</a>


</header>
<head>

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.min.js" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/jquery.min.js" media="screen">

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/w3.css" media="screen">
</head>
 
<style type="text/css">
  #cont{
 	width:50%;
 }
table,th{
	text-align: center;
}

	</style>
<body>
<div class="container" id="cont" >

<table class="table  table-bordered">
	<tr><th>Theater Id</th><th>Theater Name</th><th>Edit</th></tr>
	<?php foreach ($movies_list as $value ) {


?>

<tr><td><?php echo $value['movie_id'];?></td><td><?php echo $value['name'];?></td><td><a href="<?php echo base_url();?>index.php/Individual_movie/add_to_theater/?name=<?php echo $value['name']?>&movie_id=<?php echo $value['movie_id']?>" class="w3-btn w3-green">add to the theater</a></td></tr>
 <?php } ?>
 </table>
</div>
</body>
</html>