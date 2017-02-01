 <?php if($this->session->userdata('secure_login_flag') == 1 ){?>

<html>

<head>

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.min.js" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/jquery.min.js" media="screen">

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/w3.css" media="screen">

</head> 
 </style>
	<body>
<?php include 'header.php'; ?>

<?php $name =  $movie_details[0]['name'];
$plot =  $movie_details[0]['plot'];
$rating =  $movie_details[0]['rating'];
$poster =   $movie_details[0]['poster'];
$dir = $movie_details[0]['director'];
$year =  $movie_details[0]['year'];
$lang = $movie_details[0]['language'];
$actors = $movie_details[0]['Actors'];
 ?>
<?php   
 //print_r($movie_details);	
?>
<div class="container" >
<div class="row">
<div class="col-md-8">
<h2 style="color:red">Rating: <?php echo $rating; ?></h2>
<h4>Synopsys: <br><?php echo $plot; ?> . . . and so on..!</h4>
<p>
	<br><br></b><h1 style="color:blue">Availaible Theaters:</h1>

<table class="table  table-bordered">
	<tr><th>Theater Name</th><th>No of Shows</th> </tr>
 


<?php foreach ($available_theater as  $value) {
	?>

	<tr><td><?php echo $value['name'];?></td><td><?php echo $value['no_shows'];?></td> 
<?php } ?>
</p>

</table>
<a href="<?php echo Base_url();?>index.php/Individual_movie/Booknow/?name=<?php echo $name; ?>" 
	class="w3-btn w3-green">Book now</a><br><br>
</div>

<div class="col-md-4" style="padding:0px 10px 30px 10px;">
	<h2><?php echo $name; ?></h2>
<img src="<?php echo $poster;?>" >
<div>


<h3>Director : <?php echo $dir; ?></h3>
<h3>Cast : <?php echo $actors; ?></h3>

<h3>Release : <?php echo $year; ?></h3>
<h3>Language : <?php echo $lang; ?></h3>

</div>


</div>
</div>
</div>



	</body>

</html>
 <?php } else {
 	redirect('http://localhost/filmypass/');
 } ?>