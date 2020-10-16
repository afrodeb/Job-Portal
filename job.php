<?php
$id=$_REQUEST['id'];
include("model.php");
$model=new model;
$jobs=$model->getJob($id);
$count=count($jobs);
$x=$count-1;
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $jobs[$x]['title']."-".$jobs[$x]['location']; ?></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2><?php echo $jobs[$x]['title']."-".$jobs[$x]['location']; ?></h2>
	</div>
	<div class="content">
		<div class="row">
		<div class="col-md-8 col-md-offset-2">
		<img src="logo.jpg" alt="">		
		<p>
		<?php 
		echo "<b>Type:</b> ".$jobs[$x]['level']."<br>"; 
      echo "<b>Added:<b/> ". $model->dateFormater($jobs[$x]['created'])."<br>";
      echo "<b>Location:<b/> ". $jobs[$x]['location']."<br>";	
      echo "<b>Type:<b/> ". $jobs[$x]['type']."<br>";	
      echo "Description: ". $jobs[$x]['description']."<br>";
      echo "Requirements: ". $jobs[$x]['experience'];		
      $apply="apply.php?id=".$jobs[$x]['id'];
		?>		
		</p>
		<?php
	//	if($_SESSION['name'] != "") {
			echo "<a class='btn btn-primary' href='".$apply."'>Apply Now</a>";
		/*	}else {
				$return=urldecode("job.php?id=".$id);
				echo "<a class='btn btn-primary' href='login.php?page=job&id={$id}'>Login</a>";
				echo "<a class='btn btn-warning' href='register.php?page=job&id={$id}'>Register</a>";
				}*/
		?>
		</div>
		</div>
	</div>
		
</body>
</html>