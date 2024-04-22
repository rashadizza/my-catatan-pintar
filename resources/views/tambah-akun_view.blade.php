<!DOCTYPE html>
	<html>
	    <head>
			<title>Tambah Akun</title>
			<script src="main.js"></script>
			<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

			<link rel="icon" type="image/x-icon" href="/images/favicon.ico">
			<script src="https://cdn.tailwindcss.com"></script>
			<link rel="preconnect" href="https://fonts.googleapis.com">
			<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
			<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap"
				rel="stylesheet">
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
			<script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
			<link rel="stylesheet" href="assets/css/LineIcons.css">
			<link href="{{ asset('css/style.css') }}" rel="stylesheet">
			<script src="main.js"></script>
			<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
	    </head>
	    <body>
			<div style="background-image: url('{{ asset('bg_pass.png') }}');" class="h-screen bg-cover">
				<header>
					<nav>
						<div><a><i class="bi bi-shield-lock-fill" ></i> Password Manager</a></div>
						<ul>
						</ul>
					</nav>
				</header>

				<div class="flex justify-center mt-10" >
					<div class="w-full max-w-md">
						<form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="{{ empty($password->id) ? route($action) : route($action, $password->id) }}">
							<div class="mb-4 text-center">
								<h2 class="font-bold text-xl">Password Manager</h2>
							</div>
							@csrf
							@if (!empty($password->id))
								@method($method) <!-- This directive spoofs a PUT request -->
							@endif

							<div class="mb-4">
								<label for="exampleInputAccount1" class="block text-gray-700 text-sm font-bold mb-2">Akun</label>
								<input type="text" name="account" id="exampleInputAccount1" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ $password->account }}" />
							</div>

							<div class="mb-4">
								<label for="exampleInputEmail1" class="block text-gray-700 text-sm font-bold mb-2">Username/Email</label>
								<input type="text" name="email" id="exampleInputEmail1" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ $password->email }}" />
							</div>

							<div class="mb-6 relative">
								<label for="exampleInputPassword1" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
								<div class="flex items-center border rounded shadow appearance-none">
									<input type="password" name="password" id="exampleInputPassword1" class="w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ $password->password }}" />
									<input type="button" onclick="togglePasswordVisibility()" value="Show" class="py-2 px-4 bg-blue-500 hover:bg-blue-700 text-white font-bold rounded-r cursor-pointer text-xs" /></input>
								</div>
							</div>

							<div class="flex items-center justify-center">
								<button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
									{{ empty($password->id) ? 'Create' : 'Save' }}
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<script>
				function togglePasswordVisibility() {
					var passwordInput = document.getElementById('exampleInputPassword1');
					var toggleButton = passwordInput.nextElementSibling;
					if (passwordInput.type === 'password') {
						passwordInput.type = 'text';
						toggleButton.value = 'Hide';
					} else {
						passwordInput.type = 'password';
						toggleButton.value = 'Show';
					}
				}
			</script>
	    </body>
	</html>


