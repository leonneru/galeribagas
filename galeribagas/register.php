<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Website Galeri Foto</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<style type="text/css">

.background-image {
    background-size: cover;
    background-position: center;
    width: 100%;
    height: 50%;
    position: fixed;
    top: 0;
    left: 0;
    z-index: -1; /* Pastikan latar belakang berada di belakang konten */
}
nav {
background-color: rgba(0, 0, 0, 0.5);
background-filter:blur(3rem); 
	}
.navbar-brand{
	color: white;
}
.jform{
	font-weight: 700;
	color: white;
}
.btn{
	width: 100px;
	border-radius: 20px;
	
	margin:0 auto;
}
.card{
	border-radius: 20px; 
	width: 430px;
	display: flex;
	justify-content: center;
	align-items: center;
}
.ikon{
	right: 20px;
	margin-left: 20px;
	position: absolute;
}
.card input{
	border-radius: 20px;
	color: black;
	background-color: white;
	width: 350px;
	border:none;
	outline: none;
	margin:0 auto;
	height: 35px;
	display: flex;
	justify-content: center;
	align-items: center;
	margin-bottom: 10px;
}
footer{
background-color: rgba(0, 0, 0, 0.5);
background-filter:blur(3rem); 
}
footer p{
	color: white;
	margin-top: 10px;
} 
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
		color: white;
		margin-top: -30px;
	}
	.sa a{
		text-decoration: none;
		color: white;
		margin-top: -10px;
	}
	.background-image {
    background-size: cover;
    background-position: center;
    width: 100%;
    height: 50%;
    position: fixed;
    top: 0;
    left: 0;
    z-index: -1; /* Pastikan latar belakang berada di belakang konten */
}
</style>
<body>
	<div class="background-image"><img src="bg.jpg"></div>
<nav class="navbar navbar-expand-lg">
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

<div class="container py-5">
	<div class="row  align-item-center justify-content-center">
		<div class="col-md-4">
			<div class="card mb-5">
				<div class="card-body">
					<div class="jform text-center">
						<h5>Daftar Akun Baru</h5>
					</div>
					<form action="config/aksi_register.php" method="POST">
						<label class="form-label">Username</label>
						<input type="text" name="username" class="form-control" required>
						<label class="form-label">Password</label>
						<input type="password" name="password" class="form-control" required>
						<label class="form-label">Email</label>
						<input type="email" name="email" class="form-control" required>
						<label class="form-label">Nama Lengkap</label>
						<input type="text" name="namalengkap" class="form-control" required>
						<label class="form-label">Alamat</label>
						<input type="text" name="alamat" class="form-control mb-5" required>
						<div class="d-grid mt-2">
							<button class="btn btn-primary" type="submit" name="kirim">DAFTAR</button>
						</div>
					</form>
					<hr>
					<div class="sa text-center">
					<p>Sudah punya akun? <a href="login.php">Login disini!</a></p>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>

<footer class="d-flex justify-content-center border-top mt-5  fixed-bottom">
	<p>&copy; UKK RPL 2024 | Bagas Ananda</p>
</footer>


<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>