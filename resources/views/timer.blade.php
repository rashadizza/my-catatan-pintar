<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Timer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="timer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
    <link rel="stylesheet" href="assets/css/LineIcons.css">
</head>

<body>
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
                            class="relative flex items-center space-x-4 bg-gradient-to-r from-sky-600 to-cyan-400 px-4 py-3 text-white">
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
                            <a href="/password"
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


        <!--====== CONTENT PART START ======-->
        <div class="flex-1 bg-white">
            <div class="container mx-auto py-8">
                <h1 class="font-bold text-5xl text-center mb-8" style="background: none;">Timer</h1> 

                <!-- Timer Mode Selection -->
                <div class="flex justify-center mb-8" style="background-color: rgba(192, 215, 220, 0.5); padding: 10px 0;">
                    <button id="countdownModeBtn" class="btn px-4 py-2 bg-gradient-to-r from-blue-400 to-blue-800 text-white rounded mr-4">Countdown Timer</button>
                    <button id="pomodoroModeBtn" class="btn px-4 py-2 bg-gradient-to-r from-blue-400 to-blue-800 text-white rounded mr-4">Pomodoro Timer</button>
                    <button id="stopwatchModeBtn" class="btn px-4 py-2 bg-gradient-to-r from-blue-400 to-blue-800 text-white rounded">Stopwatch</button>
                </div>

                <!-- Countdown Timer Display -->
                <div id="countdownTimer" class="hidden">
                    <div class="flex justify-center flex-col items-center">
                        <h2 id="stopwatchTitle" class="font-bold text-3xl mb-4">Countdown Timer</h2>
                        <div class="countdown-wrapper countdown bg-white p-8 rounded-lg shadow-lg">
                            <div class="countdown-item">
                                <span id="cdHours" class="countdown-value text-3xl font-semibold">00</span>
                                <span class="countdown-label text-xl font-semibold">h</span>
                            </div>
                            <div class="countdown-item">
                                <span id="cdMinutes" class="countdown-value text-3xl font-semibold">00</span>
                                <span class="countdown-label text-xl font-semibold">m</span>
                            </div>
                            <div class="countdown-item">
                                <span id="cdSeconds" class="countdown-value text-3xl font-semibold">00</span>
                                <span class="countdown-label text-xl font-semibold">s</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 flex justify-center">
                        <div class="input-wrapper">
                            <label for="cdInput" class="mr-2 font-semibold">Set Countdown:</label>
                            <input type="number" id="cdInput" min="0" placeholder="Seconds" class="px-4 py-2 border border-gray-300 rounded text-sm">
                            <button id="startCdButton" class="px-4 py-2 ml-2 text-white rounded hover:bg-blue-600 transition duration-300" style="background-image: linear-gradient(to right, #4FACFE, #00F2FE);">Start Countdown</button>
                            <button id="stopCdButton" class="px-4 py-2 ml-2 text-white rounded hover:bg-red-600 transition duration-300" style="background-image: linear-gradient(to right, #FF416C, #FF5429 );">Stop Countdown</button>
                        </div>
                    </div>
                </div>

                <!-- Pomodoro Timer Display -->
                <div id="pomodoroTimer" class="hidden">
                    <div class="flex justify-center flex-col items-center">
                        <h2 id="pomodoroTitle" class="font-bold text-3xl mb-4">Focus</h2>
                        <div class="countdown-wrapper pomodoro bg-white p-8 rounded-lg shadow-lg">
                            <div class="countdown-item">
                                <span id="pomodoroMinutes" class="countdown-value text-3xl font-semibold">25</span>
                                <span class="countdown-label text-xl font-semibold">m</span>
                            </div>
                            <div class="countdown-item">
                                <span id="pomodoroSeconds" class="countdown-value text-3xl font-semibold">00</span>
                                <span class="countdown-label text-xl font-semibold">s</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 flex justify-center">
                        <div class="input-wrapper">
                            <button id="startPomodoroBtn" class="btn px-4 py-2 text-white rounded hover:bg-blue-600 transition duration-300" style="background-image: linear-gradient(to right, #FFEB21, #FFFF71);">Start</button>
                            <button id="stopPomodoroBtn" class="btn px-4 py-2 text-white rounded hover:bg-red-600 transition duration-300" style="background-image: linear-gradient(to right, #FF416C, #FF4B2B);">Stop</button>
                        </div>
                    </div>
                </div>

                <!-- Stopwatch Display -->
                <div id="stopwatch" class="hidden">
                    <div class="flex justify-center flex-col items-center">
                        <h2 id="stopwatchTitle" class="font-bold text-3xl mb-4">Stopwatch Timer</h2>
                        <div class="countdown-wrapper stopwatch bg-white p-8 rounded-lg shadow-lg">
                            <div class="countdown-item">
                                <span id="stopwatchMinutes" class="countdown-value text-3xl font-semibold">00</span>
                                <span class="countdown-label text-xl font-semibold">m</span>
                            </div>
                            <div class="countdown-item">
                                <span id="stopwatchSeconds" class="countdown-value text-3xl font-semibold">00</span>
                                <span class="countdown-label text-xl font-semibold">s</span>
                            </div>
                            <div class="countdown-item">
                                <span id="stopwatchMilliseconds" class="countdown-value text-3xl font-semibold">000</span>
                                <span class="countdown-label text-xl font-semibold">ms</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 flex justify-center">
                        <div class="input-wrapper">
                            <button id="startStopwatchBtn" class="btn px-4 py-2 text-white rounded hover:bg-blue-600 transition duration-300" style="background-image: linear-gradient(to right, #3ED76F, #23FF69);">Start</button>
                            <button id="stopStopwatchBtn" class="btn px-4 py-2 text-white rounded hover:bg-red-600 transition duration-300" style="background-image: linear-gradient(to right, #FF416C, #FF4B2B);">Stop</button>
                            <button id="resetStopwatchBtn" class="btn px-4 py-2 text-white rounded hover:bg-gray-600 transition duration-300" style="background-image: linear-gradient(to right, #626A6A, #C4CCCC );">Reset</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="timer.js"></script>
</body>
</html>
