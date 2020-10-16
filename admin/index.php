<?php
include("header.php");
$data=$model->getJobs();
?>
<h1>Jobs Snapshot</h1>
<table class="table">
<tr>
<td>Title</td>
<td>Category</td>
<td>Added</td>
<td>Applicants</td>
<td>Action</td>
</tr>
<?php
$count=count($data);
for($x=0;$x<$count;$x++) {
	$view="viewjob.php?id=".$data[$x]['id'];
	$delete="deletejob.php?id=".$data[$x]['id'];
	$update="updatejob.php?id=".$data[$x]['id'];
	$app="applicant.php?id=".$data[$x]['id'];
	$appL=count($model->getApplicantsByJob($data[$x]['id']));
?>
<tr>
<td><?php echo $data[$x]['title']; ?></td>
<td><?php echo $data[$x]['type']; ?></td>
<td><?php echo $data[$x]['created']; ?></td>
<td><?php echo $appL; ?></td>
<td>
<a href="<?php echo $view; ?>" class="btn btn-primary">View</a>
<!--<a href="<?php echo $update; ?>" class="btn btn-primary">Update</a>
<a href="<?php echo $app; ?>" class="btn btn-warning">Applicants</a>
<a href="<?php echo $delete; ?>" class="btn btn-danger">Delete</a>-->
</td>
</tr>	
<?php
}
?>
</table>
<?php
include("footer.php");
?>
