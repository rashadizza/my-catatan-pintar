<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MY CP | Reminder</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="todolist.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
    <link rel="stylesheet" href="assets/css/LineIcons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>

<body style="background-image: url('bg_music.jpg'); background-size: cover; background-position: center center;">
    <!--====== SIDE PART START ======-->
    <div class="flex-container min-h-screen bg-white">
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
        <div style="flex:4" class="flex-item py-3 px-4">
            <div class="flex-container">
                <p style="flex:1" class="flex-item text-4xl">Music Player</p>
            </div>

            <br>
            <!--button import-->
            <script src="https://cdn.commoninja.com/sdk/latest/commonninja.js" defer></script>
            <div class="commonninja_component pid-52354f58-2d58-46bf-9481-5d6584b5b01f"></div>
            <script></script>
            <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script>
</body>

</html>
