
<!--confic.php Connection-->
<?php
include 'confic.php';
?>
<!--confic.php Connection End-->


<?php

include_once 'css_layout/header.php';
?>

	<!-- WRAPPER -->
	<div id="wrapper">
	
<?php

include_once 'css_layout/nav.php';
include_once 'css_layout/sliderleft.php';

?>

<?php

if(isset($_REQUEST['submit'])){

	$item = $_REQUEST['item'];
	$details = $_REQUEST['details'];
	

	$sql ="INSERT INTO  category (cat_item,cat_details) VALUES ('$item','$details')";
	
	$run =mysqli_query($connect,$sql);
	
	if($run){
		echo "<script>alert('Data Save');</script>";
	}else{
		echo "<script>alert('Data Not Save');</script>";
	}
}

?>
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid col-md-offset-3">
					<h3 class="page-title">category</h3>
					<div class="row">
						<div class="col-md-6 ">
						

							<!-- INPUTS -->
							<form method="post" acction="">
							
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Inputs</h3>
								</div>
								<div class="panel-body">
									<input type="text" name="item" class="form-control" placeholder="Item field" required>
									<br>
							
									<br>
									<textarea id='text' name="details" class="form-control" placeholder="textarea" rows="4" ></textarea>
									<br>
									
									<br>

									<input name='submit' type="submit" class="form-control" value='Submit' />
							</form>
									
								</div>
							</div>
							<!-- END INPUTS -->
							</div>
							</div>
							</div>
							</div>

							
					

						
										
									
									
								
						
									
							
						
							
		
	
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
	<script>
	tinymce.init({selector:'#text'});
	</script>
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
	
</body>

</html>
