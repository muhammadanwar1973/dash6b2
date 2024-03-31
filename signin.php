<!--Head Section Start-->
<?php
  include('layout/head.php');
?>
<!--Head Section End-->
<!-- [ signin-img ] start -->
<div class="auth-wrapper align-items-stretch aut-bg-img">
	<div class="flex-grow-1">
		<div class="h-100 d-md-flex align-items-center auth-side-img">
			<div class="col-sm-10 auth-content w-auto">
				<img src="assets/images/auth/signin22.png" alt="" class="img-fluid">
				<h1 class="text-white my-4">Welcome Back!</h1>
				<h4 class="text-white font-weight-normal">Signin to your account and get explore the IFMP Management System.<br/>Do not forget to Select Your Permission Role</h4>
			</div>
		</div>
		<div class="auth-side-form">
			<div class=" auth-content">
				<img src="assets/images/auth/signin22.png" alt="" class="img-fluid mb-4 d-block d-xl-none d-lg-none">
				<h3 class="mb-4 f-w-400">Signin</h3>
				<form action="php_script/signin_process.php" method="POST">
            <div class="form-group fill">
                <label for="exampleInputCNIC">CNIC Number</label>
                <input name="cnic" type="number" class="form-control" id="exampleInputCNIC" aria-describedby="CNIC" placeholder="CNIC Number" pattern="[0-9]{13}">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group fill">
                <label for="exampleInputPassword1">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Save credentials.</label>
            </div>
            <button type="submit" class="btn btn-block btn-primary mb-4 has-ripple">SignIn</button>
        </form>

				<div class="text-center">
					<div class="saprator my-4"><span>OR</span></div>
					<button class="btn text-white bg-facebook mb-2 mr-2  wid-40 px-0 hei-40 rounded-circle"><i class="fab fa-facebook-f"></i></button>
					<button class="btn text-white bg-googleplus mb-2 mr-2 wid-40 px-0 hei-40 rounded-circle"><i class="fab fa-google-plus-g"></i></button>
					<button class="btn text-white bg-twitter mb-2  wid-40 px-0 hei-40 rounded-circle"><i class="fab fa-twitter"></i></button>
					<p class="mb-2 mt-4 text-muted">Forgot password? <a href="resetpassword.php" class="f-w-400">Reset</a></p>
					<p class="mb-0 text-muted">Don’t have an account? <a href="signup.php" class="f-w-400">Signup</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ signin-img ] end -->
</body>

</html>
