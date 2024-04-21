<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-center text-xl font-bold welcome-message">Selamat datang kembali! Bersiaplah untuk menaklukkan hari ini dengan semangat yang baru dan tekad yang lebih kuat.</h3>
                    <br> <br>
                    
                    <h4 class="text-center text-5xl font-bold">Menu</h4>
                    
                    <a href="/note" class="mt-3 mb-2 text-black bg-white hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xl w-full sm:w-auto px-5 py-2.5 text-center flex items-center icon">
                        <i class="lni lni-write"></i> Note
                    </a>
                    <a href="/todolist" class="mt-3 mb-2 text-black bg-white hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xl w-full sm:w-auto px-5 py-2.5 text-center flex items-center icon">
                        <i class="lni lni-list"></i> To-Do List
                    </a>
                    <a href="/timer" class="mt-3 mb-2 text-black bg-white hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xl w-full sm:w-auto px-5 py-2.5 text-center flex items-center icon">
                        <i class="lni lni-alarm-clock"></i> Timer
                    </a>
                    <a href="/reminder" class="mt-3 mb-2 text-black bg-white hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xl w-full sm:w-auto px-5 py-2.5 text-center flex items-center icon">
                        <i class="lni lni-alarm"></i> Reminder
                    </a>
                    <a href="/password" class="mt-3 mb-2 text-black bg-white hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xl w-full sm:w-auto px-5 py-2.5 text-center flex items-center icon">
                        <i class="lni lni-lock"></i> Password Manager
                    </a>
                    <a href="/musicplayer" class="mt-3 mb-2 text-black bg-white hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xl w-full sm:w-auto px-5 py-2.5 text-center flex items-center icon">
                        <i class="lni lni-music"></i> Music Player
                    </a>
                </div>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="assets/css/LineIcons.css">

    <style>
        .icon i {
            font-size: 5rem; 
            margin-right: 15px;
            color: #4EB8D5 
        }

        .welcome-message {
            font-family: 'Comic Sans MS', cursive;
            color: #2BA3C3;
            border-bottom: 2px solid #1C2033; 
            padding-bottom: 50px
        }
    </style>
</x-app-layout>
