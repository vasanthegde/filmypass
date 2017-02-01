<html>
<header class="w3-container w3-grey" style="margin-bottom:20px;">
	<h1 style="text-align:center">Admin panel</h1>
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
#add_movie
{
    border-radius: 3px;
    border: 1px solid black;
  width:30%;
  height: 38%;
position: absolute;
left:5%;
top:25%;
padding:30px;
}
#add_theater
{
    border-radius: 3px;
    border: 1px solid black;
  width:33%;
  height: 48%;
position: absolute;
left:45%;
top:25%; 
padding:30px;
background-color: #
}
h2
{
  color: green;

}
  h4
  {
    color: red;
    font-size: 30px;
  }
</style>
<body>
  <?php if(isset($no_movie))
    { ?>  <h4> <?php echo $no_movie; ?></h4>
   <?php }?>

  <div class="container" style="color:red;font-size:18px;">
  <?php if(isset($success)) { echo $success;} 
  else if(isset($added_theater)) {
    echo $added_theater; } ?>
</div>

<?php echo form_open('Admin/insert_movie'); ?>
 <div class="container" id="add_movie">
  <h2>Add Movie to the website</h2><br>
  <form role="form">
    <div class="form-group">
      <p>Movie Name:</p>
      <input type="text" class="form-control" name="movie_name" placeholder="Movie name">
    </div>
    
  
    <button type="submit" class="btn btn-success" style="margin-left:35%">Submit</button>
  </form>
</div>
<?php echo form_close(); ?>

<?php echo form_open('Admin/add_theater'); ?>

<div class="container" id="add_theater">
  <h2>Add Theater to the website</h2><br>
  <form role="form">
    <div class="form-group">
      <p>Theater Name:</p>
      <input type="text" class="form-control" name="theater_name" placeholder="Theater name">
    </div>
    <div class="form-group">
      <p>Location:</p>
      <input type="text" class="form-control" name="location" placeholder="Location">
    </div>
   
    <button type="submit" class="btn btn-success" style="margin-left:35%">Submit</button>
  </form>
</div>
<?php echo form_close(); ?>



</body>
</html>