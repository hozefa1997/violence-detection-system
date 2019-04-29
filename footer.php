</div>
<div id="fh5co-footer">
	<div class="container">
		<div class="row row-padded">
			<div class="col-md-12 text-center">
				<p class="text-center to-animate"><a href="#" class="js-gotop">Go To Top</a></p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4 text-center">
				<ul class="fh5co-social">
					<li class="to-animate-2"><a href="#"><i class="icon-facebook"></i></a></li>
					<li class="to-animate-2"><a href="#"><i class="icon-twitter"></i></a></li>
					<li class="to-animate-2"><a href="#"><i class="icon-instagram"></i></a></li>
				</ul>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
</div>
<script type="text/javascript" src="submit.js" ></script>

<!-- jQuery -->	
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Bootstrap DateTimePicker -->
	<script src="js/moment.js"></script>
	<script src="js/bootstrap-datetimepicker.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<script>
		$(function () {
	       $('#date').datetimepicker();
	   });
	</script>
	<!-- Main JS -->
	<script src="js/main.js"></script>
	<script type="text/javascript">
		function makeVisible(c) {
			var a = document.getElementById('fh5co-login');
			var b = document.getElementById('fh5co-contact');
			if ( c == 1 ) {
				a.style.display="none";
				b.style.display="block";
			}
			else if ( c == 0 ) {
				b.style.display="none";
				a.style.display="block";
			}
			else {
				a.style.display="none";
				b.style.display="none";
			}
		}
		function loginError() {
			alert("Login to add items into cart");
		}
	</script>

	</body>
</html>
