<?php
include("header.php");
$data=$model->getJobs();
?>
<table class="table">
<tr>
<td>Title</td>
<td>Category</td>
<td>Added</td>
<td>Action</td>
</tr>
<?php
$count=count($data);
for($x=0;$x<$count;$x++) {
	$view="jobview.php?id=".$data[$x]['id'];
	$delete="jobd.php?id=".$data[$x]['id'];
	$update="jobupdate.php?id=".$data[$x]['id'];
	$app="applicants.php?id=".$data[$x]['id'];
?>
<tr>
<td><?php echo $data[$x]['title']; ?></td>
<td><?php echo $data[$x]['type']; ?></td>
<td><?php echo $model->dateFormater($data[$x]['created']); ?></td>
<td>
<!--<a href="<?php echo $view; ?>" class="btn btn-primary">View</a>
<a href="<?php echo $update; ?>" class="btn btn-primary">Update</a>
<a href="<?php echo $delete; ?>" class="btn btn-danger">Delete</a>
-->
<a href="<?php echo $app; ?>" class="btn btn-warning">Applicants</a>
</td>
</tr>	
<?php
}
?>
</table>
<?php
include("footer.php");
?>