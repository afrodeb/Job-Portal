<?php
include("header.php");
$jid=$_REQUEST['jid'];
$id=$_REQUEST['id'];
$applicant=$model->getApplicant($id);

?>
<h1>View Applicant : <?php echo $applicant[0]['name']; ?></h1>
<?php /*$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'name',
		'id_number',
		'surname',
		'phone',
		'email',
		'gender',
		'age',
		'address',
		'marital_status',
		'nationality',
		'religion',
		'languages',
		'drivers_licence',
		//'files',
		//'university',
	),
));*/ ?>
<table class="table table-stripped">
<tr>
<td>Name</td>
<td><?php echo $applicant[0]['name'] ?></td>
</tr>
<tr>
<td>Surname</td>
<td><?php echo $applicant[0]['surname'] ?></td>
</tr>
<tr>
<td>ID number</td>
<td><?php echo $applicant[0]['id_number'] ?></td>
</tr>
<tr>
<td>Phone</td>
<td><?php echo $applicant[0]['phone'] ?></td>
</tr>
<tr>
<td>Email</td>
<td><?php echo $applicant[0]['email'] ?></td>
</tr>
<tr>
<td>Gender</td>
<td><?php echo $applicant[0]['gender'] ?></td>
</tr>
<tr>
<td>Age</td>
<td><?php echo $applicant[0]['age'] ?></td>
</tr>
<tr>
<td>Nationality</td>
<td><?php echo $applicant[0]['nationality'] ?></td>
</tr>
<tr>
<td>Religion</td>
<td><?php echo $applicant[0]['religion'] ?></td>
</tr>
<tr>
<td>Languages</td>
<td><?php echo $applicant[0]['languages'] ?></td>
</tr>
</table>
<?php
$data=$model->getApplicantQualifications($id);
$count=count($data);
?>
<h2>Qualifications & CV</h2>
<table class="table">
<thead>
<tr>
<td>Name</td>
<td>Brief Description</td>
<td>Completed</td>
<td>Action</td>
</tr>
<?php
for($x=0;$x<$count;$x++) {
	$link=$data[$x]['file'];
	$link=str_replace("admin/","",$link);
	$interview="interview.php?id=".$id."&jid=".$jid;
	?>
	<tr>
	<td><?php echo $data[$x]['name']; ?></td>
	<td><?php echo $data[$x]['description']; ?></td>
	<td><?php echo $data[$x]['year']; ?></td>
	<td><a target="_blank" href="<?php echo $link; ?>" class="btn btn-primary">Download</a></td>
	</tr>	
	<?php	
}
?>
</thead>
</table>
<a href="<?php echo $interview; ?>" class="btn btn-primary">Email for Interview</a>
<?php
include("footer.php");
?>