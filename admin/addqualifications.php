<?php
include("header.php");
?>
<div class="signup-page-main">
     <div class="signup-main">  	
    	 <div class="signup-head">
				<h1>Add New Qualification</h1>
			</div>


			<div class="signup-block">				
	<p class="note">Fields with <span class="required">*</span> are required.</p>
<form action="doqualifications.php" method="post">
	<div class="row">
		Name
		<input type="text" name="name" class="form-control" required="">
	</div>
	<div class="row">
		Description
      <textarea required="" class="form-control" name="description"></textarea>
	</div>
					<div class="row">
<input type="submit" class="btn btn-primary" value="Save">
</div>
</form>									
			</div>
    

</div>
</div>
<?php
include("footer.php");
?>