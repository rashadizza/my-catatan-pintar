<!DOCTYPE html>
	<html>
	    <head>
			<title>Tambah Akun</title>
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
			<link href="{{ asset('css/style.css') }}" rel="stylesheet">
			<script src="main.js"></script>
			<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
	    </head>
	    <body>
			
			<header>
				<nav>
					<div><a><i class="bi bi-shield-lock-fill" ></i> Password Manager</a></div>
					<ul>
					</ul>
				</nav>
			</header>

			<div class="row justify-content-center">
				<div class="col-md-4">
					<div class="form-group margin">
					<form class="border" method="POST" action="{{ empty($password->id) ? route($action) : route($action, $password->id) }}">
						<center><label><h2>Password Manager</h2></label></center>
						@csrf
						@if (!empty($password->id))
							@method($method) <!-- This directive spoofs a PUT request -->
						@endif

						<div class="form-group">
							<label for="exampleInputAccount1">Akun</label>
							<input type="text" class="form-control" name="account" id="exampleInputAccount1" value="{{ $password->account }}" /><br>
						</div>

						<div class="form-group">
							<label for="exampleInputEmail1">Username/Email</label>
							<input type="text" class="form-control" name="email" id="exampleInputEmail1" value="{{ $password->email }}" /><br>
						</div>

						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" class="form-control" name="password" id="exampleInputPassword1" value="{{ $password->password }}" /><br>
						</div>

						<div style="text-align:center">
							<button type="submit" class="btn btn-primary" name="login-submit">{{ empty($password->id) ? 'Create' : 'Save' }}</button>
						</div>
					</form>
					</div>
				</div>
			</div>
			


			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	    </body>
	</html>


