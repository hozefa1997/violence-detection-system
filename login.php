<div id="fh5co-login" data-section="login" style="background-image: url(images/3.png);  opacity: 0.9;" data-stellar-background-ratio="0.5">
	<div class="fh5co-overlay"></div>
	<div class="container">
		<form action="dbcontroller.php" method="POST">
			<div class="row text-center fh5co-heading row-padded">
				<div class="col-md-8 col-md-offset-2 to-animate">
					<h2 class="heading">Login</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 align-center">
					<div class="form-group " style="margin-left: 30%;">
						<label for="uname" class="sr-only">User Id</label>
						<input id="uname" name="uid" class="form-control" placeholder="User Id" type="text" required />
					</div>
					<div class="form-group " style="margin-left: 30%;">
						<label for="pwd" class="sr-only">Password</label>
						<input id="pwd" name="pwd" class="form-control" placeholder="Password" type="password" required />
					</div>
		            <div class="form-group " style="margin-left: 30%;margin-right: 30%;">
						<input class="btn btn-primary" name="login" value="Login" type="submit">
						<input class="btn btn-primary" value="Register Now!!!" type="button" onclick="makeVisible(1)">
					</div>
				</div>
			</div>
		</form>
	</div>
</div>