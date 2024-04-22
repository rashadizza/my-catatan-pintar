<!DOCTYPE html>
	<html>
	    <head>
			<title>MY CP | Password Manager</title>
			<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
			<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
			<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
			<link rel="manifest" href="/site.webmanifest">
			<link href="{{ asset('css/style.css') }}" rel="stylesheet">
			<script src="main.js"></script>
			<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

			<script src="https://cdn.tailwindcss.com"></script>
			<link rel="preconnect" href="https://fonts.googleapis.com">
			<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
			<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap"
				rel="stylesheet">
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
			<script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
			<link rel="stylesheet" href="assets/css/LineIcons.css">
	    </head>
	    <body>
				<!--====== SIDE PART START ======-->
				<div class="flex-container min-h-screen bg-white" style="background-image: url('{{ asset('bg_pass.png') }}');" class="h-screen bg-cover">
				<div class="sidebar flex-item min-h-screen w-[3.35rem] overflow-hidden border-r hover:text-[#ffffff] hover:shadow-lg"
					style="background-image: linear-gradient(to bottom right, #1A1B77, #69B9DE);">
						<div class="h-screen flex-col justify-between pt-2 pb-6">
							<div>
								<div class="w-max p-2.5">
									<a href="/dashboard">
										<img src="logonote.png" class="w-64" alt="">
									</a>
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
											class="btn flex items-center px-4 py-3 space-x-4 transition ease-out duration-1000 hover:bg-[#fd53b8] hover:bg-gradient-to-r from-sky-600 to-cyan-400 hover:text-white text-[#66fcfb]">
												<i class="lni lni-alarm-clock" style="font-size: 25px;"></i>
											<span class="group-hover:text-white">Timer</span>
										</a>
									</li>
									<li class="min-w-max">
										<a href="/reminders"
											class="btn flex items-center px-4 py-3 space-x-4 transition ease-out duration-1000 hover:bg-[#fd53b8] hover:bg-gradient-to-r from-sky-600 to-cyan-400 hover:text-white text-[#66fcfb]">
												<i class="lni lni-alarm" style="font-size: 25px;"></i>
											<span class="group-hover:text-white">Reminder</span>
										</a>
									</li>
									<li class="min-w-max">
										<a href="/passwords"
											class="relative flex items-center space-x-4 bg-gradient-to-r from-sky-600 to-cyan-400 px-4 py-3 text-white">
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
									<a href="/profile"
										class="btn rounded-md flex items-center px-4 py-3 space-x-4 transition ease-out duration-1000 hover:bg-[#fd53b8] hover:bg-gradient-to-r from-sky-600 to-cyan-400 hover:text-white text-[#66fcfb]">
										<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 512 512">
											<path fill="#000000" class="fill-current group-hover:text-white" fill-rule="evenodd"
												d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
										</svg>
										<span class="group-hover:text-white">Account</span>
									</a>
								</ul>
							</div>
						</div>
					</div>
					<!--====== SIDE PART ENDS ======-->
				
					<!--sampai sini-->
					<div class="flex-item" style="flex:4"> 
						<header>
							<nav>
								<div><a href="/dashboard" ><i class="bi bi-shield-lock-fill" ></i> Password Manager</a></div>
							</nav>
						</header>
						
						<div>
							<br>
							
							</br>

							<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
								<div class="p-4 flex justify-between items-center bg-blue-100">
									<div class="flex-grow text-center">
										<h1 class="text-lg font-semibold text-blue-800">Daftar Akun</h1>
									</div>
									<a href="/passwords/create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition ease-in-out duration-300">Tambah Akun</a>
								</div>
								<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
									<thead class="text-xs text-gray-700 uppercase bg-blue-200 dark:bg-blue-800 dark:text-white">
										<tr>
											<th scope="col" class="font-bold py-3 px-5">No</th>
											<th scope="col" class="font-bold py-3 px-5">Akun</th>
											<th scope="col" class="font-bold py-3 px-5">Username/Email</th>
											<th scope="col" class="font-bold py-3 px-5">Password</th>
											<th scope="col" class="font-bold py-3 px-5">Actions</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($passwords as $index => $password)
										<tr class="bg-blue-50 border-b dark:bg-blue-900 dark:border-blue-800 hover:bg-blue-100 dark:hover:bg-blue-700">
											<td class="py-4 px-5">{{ $loop->iteration }}</td>
											<td class="py-4 px-5">{{ $password->account }}</td>
											<td class="py-4 px-5">{{ decrypt($password->email_encrypted) }}</td>
											<td class="py-4 px-5">{{ decrypt($password->password_encrypted) }}</td>
											<td class="py-4 px-5 flex space-x-2">
												<a href="{{ route('passwords.edit', $password->id) }}" class="bg-blue-500 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-white inline-flex items-center transition ease-in-out duration-300">
													Edit
												</a>
												<form action="{{ route('passwords.destroy', $password->id) }}" method="POST" class="inline">
													@csrf
													@method('DELETE')
													<button type="submit" class="bg-red-500 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 text-white inline-flex items-center transition ease-in-out duration-300">
														Delete
													</button>
												</form>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
								@if(session('success'))
									<div class="p-4 mt-4 rounded-md bg-green-100 border border-green-200 text-green-800">
										{{ session('success') }}
									</div>
								@endif
							</div>
						</div>

						
					</div>
				</div>
				</div>
			

				<script>
					var simplemde = new SimpleMDE({
						element: document.getElementById("MDE")
					});
				</script>
		</body>
	</html>


