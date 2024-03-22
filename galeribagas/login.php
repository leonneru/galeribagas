<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">	
	<title>Website Galeri Foto</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/login.css">
</head>
<style type="text/css">
	.card{
		background-color: rgba(0, 0, 0, 0.4);
	}
	.jform{
		color: white;
	}
	label{
		color: white;
	}
	.sa{
		color: white
	}
	.sa a{
		text-decoration: none;
		color: white;
	}
	.row {
    display: grid;
    place-items: center;
    height: 70vh; /* Ensure full viewport height */
}

</style>
<body>
	<div class="background-image"><img src="bg.jpg"></div>
<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Website Galeri Foto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-2" id="navbarNavAltMarkup">
      <div class="navbar-nav me-auto">
        
      </div>
      <a href="register.php" class="btn btn-outline-primary m-1">Daftar</a>
      <a href="login.php" class="btn btn-outline-success m-1">Masuk</a>
    </div>
  </div>
</nav>

<div class="container mt-5 py-5">
	<div class="row ">
		<div class="col-md-4">
			<div class="card ">
				<div class="card-body ">
					<div class="jform text-center">
						<h5>Login Aplikasi</h5>
					</div>
					<form action="config/aksi_login.php" method="POST">
						<label class="form-label mb-3">Username</label><div class="ikon me-5 mt-1"><i class="fa-regular fa-user "></i></div>
						<div class="box">
						<input type="text" name="username" required>
						<label class="form-label">Password</label><div class="ikon me-5 mt-1"><i class="fa-solid fa-lock"></i></div>
						<input type="password" name="password" required>
						<div class="d-grid mt-2">
							<button class="btn btn-primary mt-3" type="submit" name="kirim">MASUK</button>
						</div>
					</form>
					
					<p class="sa text-center mt-3">Belum punya akun? <a href="register.php">Daftar disini!</a></p>
				</div>
			</div>
		</div>
	</div>
</div>

<footer class="d-flex justify-content-center border-top mt-3 fixed-bottom">
	<p>&copy; UKK RPL 2024 | Bagas Ananda</p>
</footer>


<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>