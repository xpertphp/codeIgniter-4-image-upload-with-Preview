<!DOCTYPE html>
<html>
<head>
  <title>CodeIgniter 4 Image Upload With Preview Example - XpertPhp</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
<style>
.hideImage{
	display:none;
}
#preview-image{
	margin-top:10px;
	width:200px;
	height:200px;
}
</style>
</head>
<body>
 <div class="container">
	<div class="row">
		<div class="col-md-9">
			<h2>Add Student</h2>
		</div>
	</div>
    <div class="row">
      <div class="col-md-9">
		<?= \Config\Services::validation()->listErrors(); ?>
        <form method="post" name="frmAddStudent" id="frmAddStudent" action="<?php echo site_url('student/store');?>" enctype="multipart/form-data">
          <div class="form-group">
            <label for="txtFname">First Name</label>
			<input type="text" name="txtFname" class="form-control" id="txtFname" placeholder="Please enter first name" />
          </div> 
		   <div class="form-group">
            <label for="txtLname">Last Name</label>
			<input type="text" name="txtLname" class="form-control" id="txtLname" placeholder="Please enter last name" />
          </div> 
          <div class="form-group">
            <label for="txtEmail">Email</label>
			<input type="text" name="txtEmail" class="form-control" id="txtEmail" placeholder="Please enter email" />
          </div>
		<div class="form-group">
            <label for="txtMobile">Mobile</label>
			<input type="text" name="txtMobile" class="form-control" id="txtMobile" placeholder="Please enter mobile number." />
          </div>		  
          <div class="form-group">
            <label for="txtAddress">Address</label>
			<textarea name="txtAddress" class="form-control"></textarea>
          </div>
		  <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control" id="image" onchange="previewImageFile(this);" accept=".png, .jpg, .jpeg" />
			<img src="" alt="Image preview" id="preview-image" class="hideImage">
          </div>
          <div class="form-group">
		   <input type="submit" value="Add" name="btnadd" id="btnadd" class="btn btn-success" />
          </div>
        </form>
      </div>
    </div>
	<span class="d-none alert alert-success mb-3" id="res_message"></span>
</div>
<script>
  function previewImageFile(input, id) {
    var output = document.getElementById('preview-image');
        output.removeAttribute("class");
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src)
        }
 }
</script>
</body>
</html>