
<!DOCTYPE HTML>

<html>
	<head>
		<title>會員登入</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="NUKIM_php_homework">
    	<meta name="author" content="weny">
    	<link rel="icon" href="/php_homework/web.login.register/images/login.png" type="image/x-icon"/>
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header">
					<div class="container">

						<!-- Nav -->
						<h1 id="logo">會員登入</h1>
					</div>
				</section>



				<section id="features">
					<div class="container">
						<div class="row aln-center">
							<div class="col-6 col-8-medium col-12-small">

								<!-- Feature -->
								<header>
																
								</header>
								<form action="" method="post" style="width: 60%; margin: 0px auto;" enctype="multipart/form-data">
									<table>
										<tr>
											<img src="/php_homework/web.login&register/images/user.png" width="150px" height="150px">
										</tr>
										<tr>
											<td><input type="text" name="uaccount" style="text-align: center;" onkeyup="value=value.replace(/[^\w\.\/]/ig,'')" maxlength="20" pattern="[a-zA-Z0-9]{4}" placeholder="您的帳號" required="required"></td>
										</tr>
										<tr>
											<td><input type="password" name="upsw" style="text-align: center;" onkeyup="value=value.replace(/[^\w\.\/]/ig,'')" maxlength="20" pattern="[a-zA-Z0-9]{4}" placeholder="您的密碼" required="required"></td>
										</tr>
										<tr>
											<td>
												<input type="submit" name="" value="登入" style="width: 100%;">
											</td>
										</tr>
										<tr>
											<td><a href="">忘記帳號與密碼</a></td>
										</tr>
										<tr>
											<td><a href="register.php">註冊去！</a></td>
										</tr>
									</table>
								</form>		
								</section>
							</div>
						</div>
					</div>


			<!-- Footer -->

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
