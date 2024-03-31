<!--Head Start-->
<?php
		include('layout/head.php');
 ?>
<!--Head End-->

<!-- [ signin-img ] start -->
<div class="auth-wrapper align-items-stretch aut-bg-img">
	<div class="flex-grow-1">
		<div class="h-100 d-md-flex align-items-center auth-side-img">
			<div class="col-sm-10 auth-content w-auto">
				<img src="assets/images/auth/signin22.png" alt="" class="img-fluid">
				<h1 class="text-white my-4">Welcome you!</h1>
				<h4 class="text-white font-weight-normal">Signup to your account and made member of the IFMP Members Management System.</h4>
			</div>
		</div>
		<div class="auth-side-form">
			<div class=" auth-content">
				<img src="assets/images/auth/signin22.png" alt="" class="img-fluid mb-4 d-block d-xl-none d-lg-none">
				<h4 class="mb-3 f-w-400">Sign up</h4>
				<!--<form id="validation-form-signup" action="php_script/signup_process.php" method="post">-->
				<form action="php_script/signup_process.php" method="post">
						<div class="form-group">
								<label class="form-label">CNIC Number</label>
								<input name="cnic" type="text" class="form-control" id="validation-signup-cnic" placeholder="XXXXX-XXXXXXX-X" required>
						</div>
						<div class="form-group">
								<label class="form-label">Mobile Number</label>
								<input name="mobile" type="number" class="form-control" id="validation-signup-mobile" placeholder="Enter Mobile" required>
						</div>
						<div class="form-group">
                <label class="form-label">Email address</label>
                <input name="email" type="text" class="form-control" id="validation-signup-email" placeholder="Enter email" required>
            </div>
            <div class="form-group">
                <label class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="validation-signup-password" placeholder="Password" required>
            </div>
						<div class="form-group">
								<label class="form-label">Retype Password</label>
								<input name="retype_pass" type="password" class="form-control" id="validation-signup-retypepassword" placeholder="Retype Password" required>
						</div>
						<div class="custom-control custom-checkbox  text-left mb-4 mt-2">
							<input type="checkbox" class="custom-control-input" id="customCheck1">
							<label class="custom-control-label" for="customCheck1">Send me the <a href="#!"> Newsletter</a> weekly.</label>
						</div>
						<button name="submit" type="submit" class="btn  btn-primary">Submit</button>
        </form>



				<div class="text-center">
					<div class="saprator my-4"><span>OR</span></div>
					<button class="btn text-white bg-facebook mb-2 mr-2  wid-40 px-0 hei-40 rounded-circle"><i class="fab fa-facebook-f"></i></button>
					<button class="btn text-white bg-googleplus mb-2 mr-2 wid-40 px-0 hei-40 rounded-circle"><i class="fab fa-google-plus-g"></i></button>
					<button class="btn text-white bg-twitter mb-2  wid-40 px-0 hei-40 rounded-circle"><i class="fab fa-twitter"></i></button>
					<p class="mt-4">Already have an account? <a href="signin.php" class="f-w-400">Signin</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ signin-img ] end -->
</body>

</html>
