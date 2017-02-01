
<style type="text/css">

#pic{
 width:30%;
 position: relative;
 margin-left: 250px;
}
figcaption
{
 position: relative;
 margin-left: 275px;
 color: white;
 font-weight: bolder;		
}
#heder
{
	padding: 0px;
	background-color: #9999ff;
}
h1
{
	color: white;
	font-weight: 600;
	font-size: 50px;
}
a.w3-btn {
	position: relative;
	top:35px;
	left:10px;
	border-radius: 5px;
	margin-right: 20px;
}
img.poster
{
	width:300px;
	height:400px;
	border-radius: 3px;
	border: 2px solid black;
	 padding: 1px;
	 margin-bottom: 15px;
	 margin-left: 15px;
}
body{
	overflow-x:hidden; 
}
</style>

		<div  style="margin-bottom:20px;" id="heder">
		<div class="row">

		<div class="col-md-8">
			<h1 style="text-align:center">Filmypass</h1>
			<a href="http://localhost/filmypass/index.php/User_auth/logout" class="w3-btn w3-indigo">logout</a>

			<a href="<?php echo Base_url();?>index.php/User_auth/Inside_home/" class="w3-btn 
				w3-orange">Gallery</a>

				<a href="<?php echo Base_url();?>index.php/Individual_movie/subscription/" class="w3-btn 
				w3-red">My subscription</a>

				<a href="<?php echo Base_url();?>index.php/Admin" class="w3-btn 
				w3-green">Admin</a>
		</div>
	<div class="col-md-4">
		<figure>
			<img src="<?php echo $this->session->userdata('profile_pic'); ?>" 
			alt="pic"class="w3-circle" id="pic" ><figcaption>
			<?php echo$this->session->userdata('user_name'); ?></figcaption>
		</figure>

	</div>

</div>
</div>