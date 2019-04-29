
<?php
include "header.php";
include "nav.php";
?>

<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<img src="logo2.png" alt="Logo" class="logo">
		</div>
		<div class="col-md-3"></div>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<form method="post" id="myForm">
				<div class="input-group">
					<input type="text" class="form-control" id="path" placeholder="Enter the path to video" aria-label="Recipient's username" aria-describedby="basic-addon2">
					<div class="input-group-append">
						<button class="btn btn-outline-secondary  active" type="button" onclick="SubmitFormData();" >Verify it!!!</button>
					</div>
				</div>
			</form>
		</div>
		<div class="col-md-2"></div>
	</div>
	<div id="results" class="text-center"></div>
</div>

<?php
include "footer.php";
?>