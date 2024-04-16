<!DOCTYPE html>
	<html>
	    <head>
			<title>Password Manager</title>
			<link rel="icon" type="image/x-icon" href="FavIcon.ico">
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
			<link href="{{ asset('css/style.css') }}" rel="stylesheet">
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

	    </head>
	    <body>
    <!--====== NAVBAR PART START ======-->
    <div class="flex-container min-h-screen bg-white">
    <div class="sidebar flex-item min-h-screen w-[3.35rem] overflow-hidden border-r hover:text-[#ffffff] hover:shadow-lg"
        style="background-image: linear-gradient(to bottom right, #1A1B77, #69B9DE);">
            <div class="h-screen flex-col justify-between pt-2 pb-6">
                <div>
                    <div class="w-max p-2.5">
                        <img src="logonote.png" class="w-64" alt="">
                    </div>
                    <ul class="mt-6 space-y-2 tracking-wide">
                        <li class="min-w-max">
                            <a href="/note" aria-label="dashboard"
                                class="btn flex items-center px-4 py-3 space-x-4 transition ease-out duration-1000 hover:bg-[#fd53b8] hover:bg-gradient-to-r from-sky-600 to-cyan-400 hover:text-white text-[#66fcfb]">
                                    <i class="lni lni-write" style="font-size: 25px;"></i>
                                <span class="-mr-1 ">Note</span>
                            </a>
                        </li>
                        <li class="min-w-max">
                            <a href="/todolist"
                                class="btn flex items-center px-4 py-3 space-x-4 transition ease-out duration-1000 hover:bg-[#fd53b8] hover:bg-gradient-to-r from-sky-600 to-cyan-400 hover:text-white text-[#66fcfb]">
                                    <i class="lni lni-list" style="font-size: 25px;"></i>
                                <span class="group-hover:text-white">To-Do List</span>
                            </a>
                        </li>
                        <li class="min-w-max">
                            <a href="/timer"
                            class="relative flex items-center space-x-4 bg-gradient-to-r from-sky-600 to-cyan-400 px-4 py-3 text-white">
                                    <i class="lni lni-alarm-clock" style="font-size: 25px;"></i>
                                <span class="group-hover:text-white">Timer</span>
                            </a>
                        </li>
                        <li class="min-w-max">
                            <a href="/reminder"
                                class="btn flex items-center px-4 py-3 space-x-4 transition ease-out duration-1000 hover:bg-[#fd53b8] hover:bg-gradient-to-r from-sky-600 to-cyan-400 hover:text-white text-[#66fcfb]">
                                    <i class="lni lni-alarm" style="font-size: 25px;"></i>
                                <span class="group-hover:text-white">Reminder</span>
                            </a>
                        </li>
                        <li class="min-w-max">
                            <a href="'/pass'"
                                class="btn flex items-center px-4 py-3 space-x-4 transition ease-out duration-1000 hover:bg-[#fd53b8] hover:bg-gradient-to-r from-sky-600 to-cyan-400 hover:text-white text-[#66fcfb]">
                                    <i class="lni lni-lock" style="font-size: 25px;"></i>
                                <span class="group-hover:text-white">Password Manager</span>
                            </a>
                        </li>
                        <li class="min-w-max">
                            <a href="/musicplayer"
                                class="btn flex items-center px-4 py-3 space-x-4 transition ease-out duration-1000 hover:bg-[#fd53b8] hover:bg-gradient-to-r from-sky-600 to-cyan-400 hover:text-white text-[#66fcfb]">
                                    <i class="lni lni-music" style="font-size: 25px;"></i>
                                <span class="group-hover:text-white">Music Player</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div style="height: 37%"></div>
                <div style="bottom: 0;" class=" w-max -mb-3">
                    <ul class="mt-6 space-y-2 tracking-wide">
                        <a href="#"
                            class="btn rounded-md flex items-center px-4 py-3 space-x-4 transition ease-out duration-1000 hover:bg-[#fd53b8] hover:bg-gradient-to-r from-sky-600 to-cyan-400 hover:text-white text-[#66fcfb]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 512 512">
                                <path fill="#000000" class="fill-current group-hover:text-white" fill-rule="evenodd"
                                    d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                            </svg>
                            <span class="group-hover:text-white">Account</span>
                        </a>
                    </ul>
                </div>
        <!--====== NAVBAR PART ENDS ======-->

				<div class="flex-item" style="flex:4"> 
					<header>
						<nav>
							<div><a><i class="bi bi-shield-lock-fill" ></i> Password Manager</a></div>
							<ul>
								<li><a href="">Home</a></li>
								<li><a href="">Logout</a></li>
							</ul>
						</nav>
					</header>
						
					<div>
						<br>
							
						</br>

						<div class="row justify-content-center">
							<div class="col-md-4">
								<div style="text-align:center">
									<a  href="/passwords/create" class="btn btn-success">Tambah Akun</a>
								</div>
								<!--<div class="table-responsive"> --> <!-- Add this div here -->
									<table class="table table-hover">
										<tr>
											<th>No</th>
											<th>Akun</th>
											<th>Username/Email</th>
											<th>Password</th>
											<th>Actions</th>
										</tr>
										@foreach ($passwords as $index => $password)
										<tr>
											<td>{{ $loop->iteration }}</td>
											<td>{{ $password->account }}</td>
											<td>{{ decrypt($password->email_encrypted) }}</td>
											<td>{{ decrypt($password->password_encrypted) }}</td>
											<td>
												<a class="btn btn-warning" href="{{ route('passwords.edit', $password->id) }}">Edit</a>
												<form action="{{ route('passwords.destroy', $password->id) }}" method="POST">
													@csrf
													@method('DELETE')
													<button class="btn btn-danger" type="submit">Delete</button>
												</form>
											</td>
										</tr>
										@endforeach
									</table>
								<!-- </div> -->
								@if(session('success'))
									<div class="alert alert-success">
										{{ session('success') }}
									</div>
								@endif
							</div>
						</div>
					</div>	
				</div>
			</div>
			

			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
			<script>
				var simplemde = new SimpleMDE({
					element: document.getElementById("MDE")
				});
			</script>
		</body>
	</html>


