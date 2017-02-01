<html>
<header class="w3-container w3-grey" style="margin-bottom:20px;">
	<h1 style="text-align:center">Admin panel</h1><a href="<?php echo base_url();?>index.php/Admin/" class="w3-btn w3-white" style="float:right">back to admin panel</a>
</header>
<head>

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.min.js" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/jquery.min.js" media="screen">

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/w3.css" media="screen">
</head>
 
<style type="text/css">
 #edit
{
    border-radius: 3px;
    border: 1px solid black;
	width:30%;
	height: 40%;
	position: absolute;
	left:35%;
	top:30%;
	padding:30px;
}
	h1
	{
		text-align: center;

	}
		</style>
<body>
<div class="container" id="cont" >
<h1><?php echo $movie_name; ?></h1>
<?php echo form_open('Admin/add_to_theater'); ?>
<div id="edit">
 <form role="form">
    <div class="form-group">
      <p>Theater id:</p>
      <input type="text" class="form-control" name="theater_id" placeholder="Theater id">
    </div>
    <div class="form-group">
      <p>No of Shows:</p>
      <input type="number" class="form-control" name="no_shows" placeholder="shows">
    </div>
    <input type="hidden" name="movie_id" value="<?php echo $movie_id; ?>"/>
<input type="hidden" name="movie_name" value="<?php echo $movie_name; ?>"/>

    <button type="submit" class="btn btn-success" style="margin-left:35%">Submit</button>
  </form>
<?php echo form_close(); ?>
</div>
</div>
</body>
</html>