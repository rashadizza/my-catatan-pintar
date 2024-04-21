<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Note | Timer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="timer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">
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
                            <a href="/reminders"
                                class="btn flex items-center px-4 py-3 space-x-4 transition ease-out duration-1000 hover:bg-[#fd53b8] hover:bg-gradient-to-r from-sky-600 to-cyan-400 hover:text-white text-[#66fcfb]">
                                    <i class="lni lni-alarm" style="font-size: 25px;"></i>
                                <span class="group-hover:text-white">Reminder</span>
                            </a>
                        </li>
                        <li class="min-w-max">
                            <a href="/passwords"
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
            </div>
        </div>
        <!--====== NAVBAR PART ENDS ======-->


        <!--====== CONTENT PART START ======-->
        <div class="flex-1 min-h-screen bg-gray-100">
            <div class="container mx-auto py-8">
                <h1 class="font-bold text-5xl text-center mb-8">Timer</h1>

                <!-- Timer Mode Selection -->
                <div class="flex justify-center mb-8">
                    <button id="countdownModeBtn" class="btn px-4 py-2 bg-gradient-to-r from-blue-400 to-blue-800 text-white rounded mr-4">Countdown Timer</button>
                    <button id="pomodoroModeBtn" class="btn px-4 py-2 bg-gradient-to-r from-blue-400 to-blue-800 text-white rounded mr-4">Pomodoro Timer</button>
                    <button id="stopwatchModeBtn" class="btn px-4 py-2 bg-gradient-to-r from-blue-400 to-blue-800 text-white rounded">Stopwatch</button>
                </div>

                <!-- Countdown Timer Display -->
                <div id="countdownTimer" class="hidden">
                    <div class="flex justify-center">
                        <div class="countdown-wrapper bg-white p-8 rounded-lg shadow-lg">
                            <div class="countdown-item">
                                <span id="cdHours" class="countdown-value text-3xl font-semibold">00</span>
                                <span class="countdown-label text-xl font-semibold">Hours</span>
                            </div>
                            <div class="countdown-item">
                                <span id="cdMinutes" class="countdown-value text-3xl font-semibold">00</span>
                                <span class="countdown-label text-xl font-semibold">Minutes</span>
                            </div>
                            <div class="countdown-item">
                                <span id="cdSeconds" class="countdown-value text-3xl font-semibold">00</span>
                                <span class="countdown-label text-xl font-semibold">Seconds</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 flex justify-center">
                        <div class="input-wrapper">
                            <label for="cdInput" class="mr-2 font-semibold">Set Countdown:</label>
                            <input type="number" id="cdInput" min="0" placeholder="Seconds" class="px-4 py-2 border border-gray-300 rounded text-sm">
                            <button id="startCdButton" class="px-4 py-2 ml-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition duration-300">Start Countdown</button>
                            <button id="stopCdButton" class="px-4 py-2 ml-2 bg-red-500 text-white rounded hover:bg-red-600 transition duration-300">Stop Countdown</button>
                        </div>
                    </div>
                </div>

                <!-- Pomodoro Timer Display -->
                <div id="pomodoroTimer" class="hidden">
                    <div class="flex justify-center flex-col items-center">
                        <h2 id="pomodoroTitle" class="font-bold text-3xl mb-4">Focus</h2>
                        <div class="countdown-wrapper bg-white p-8 rounded-lg shadow-lg">
                            <div class="countdown-item">
                                <span id="pomodoroMinutes" class="countdown-value text-3xl font-semibold">25</span>
                                <span class="countdown-label text-xl font-semibold">Minutes</span>
                            </div>
                            <div class="countdown-item">
                                <span id="pomodoroSeconds" class="countdown-value text-3xl font-semibold">00</span>
                                <span class="countdown-label text-xl font-semibold">Seconds</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 flex justify-center">
                        <div class="input-wrapper">
                            <!-- Start Button -->
                            <button id="startPomodoroBtn" class="btn px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition duration-300">Start</button>
                            <!-- Stop Button -->
                            <button id="stopPomodoroBtn" class="btn px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 transition duration-300">Stop</button>
                        </div>
                    </div>
                </div>

                <!-- Stopwatch Display -->
                <div id="stopwatch" class="hidden">
                    <div class="flex justify-center flex-col items-center">
                        <h2 id="stopwatchTitle" class="font-bold text-3xl mb-4">Stopwatch</h2>
                        <div class="countdown-wrapper bg-white p-8 rounded-lg shadow-lg">
                            <div class="countdown-item">
                                <span id="stopwatchMinutes" class="countdown-value text-3xl font-semibold">00</span>
                                <span class="countdown-label text-xl font-semibold">Minutes</span>
                            </div>
                            <div class="countdown-item">
                                <span id="stopwatchSeconds" class="countdown-value text-3xl font-semibold">00</span>
                                <span class="countdown-label text-xl font-semibold">Seconds</span>
                            </div>
                            <div class="countdown-item">
                                <span id="stopwatchMilliseconds" class="countdown-value text-3xl font-semibold">000</span>
                                <span class="countdown-label text-xl font-semibold">Milliseconds</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 flex justify-center">
                        <div class="input-wrapper">
                            <!-- Start Button -->
                            <button id="startStopwatchBtn" class="btn px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition duration-300">Start</button>
                            <!-- Stop Button -->
                            <button id="stopStopwatchBtn" class="btn px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 transition duration-300">Stop</button>
                            <!-- Reset Button -->
                            <button id="resetStopwatchBtn" class="btn px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 transition duration-300">Reset</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script>
        // Countdown Timer
        const countdownModeBtn = document.getElementById('countdownModeBtn');
        const pomodoroModeBtn = document.getElementById('pomodoroModeBtn');
        const stopwatchModeBtn = document.getElementById('stopwatchModeBtn');
        const countdownTimer = document.getElementById('countdownTimer');
        const pomodoroTimer = document.getElementById('pomodoroTimer');
        const stopwatch = document.getElementById('stopwatch');
        const cdInput = document.getElementById('cdInput');
        let cdInterval;
        
        let pomodoroInterval;
        let pomodoroMinutes = 25; // Default Pomodoro Timer duration in minutes
        let breakMinutes = 5; // Default break duration in minutes
        let isPomodoroMode = true; // Flag to indicate if it's Pomodoro or break mode


        countdownModeBtn.addEventListener('click', () => {
            showElement(countdownTimer);
            hideElement(pomodoroTimer);
            hideElement(stopwatch);
        });

        pomodoroModeBtn.addEventListener('click', () => {
            showElement(pomodoroTimer);
            hideElement(countdownTimer);
            hideElement(stopwatch);
        });

        stopwatchModeBtn.addEventListener('click', () => {
            showElement(stopwatch);
            hideElement(countdownTimer);
            hideElement(pomodoroTimer);
        });

        function startCountdown() {
            const seconds = parseInt(cdInput.value);
            if (isNaN(seconds) || seconds <= 0) {
                alert('Please enter a valid positive number.');
                return;
            }
            let remainingSeconds = seconds;
            cdInterval = setInterval(() => {
                if (remainingSeconds <= 0) {
                    clearInterval(cdInterval);
                    document.getElementById('cdHours').textContent = '00';
                    document.getElementById('cdMinutes').textContent = '00';
                    document.getElementById('cdSeconds').textContent = '00';
                    playNotificationSound();
                    showNotification("Countdown Timer", "Time's up!");
                    return;
                }
                const hours = Math.floor(remainingSeconds / 3600);
                const minutes = Math.floor((remainingSeconds % 3600) / 60);
                const secs = remainingSeconds % 60;
                document.getElementById('cdHours').textContent = formatTime(hours);
                document.getElementById('cdMinutes').textContent = formatTime(minutes);
                document.getElementById('cdSeconds').textContent = formatTime(secs);
                remainingSeconds--;
            }, 1000);
        }

        function playNotificationSound() {
            const audio = new Audio('notification_sound.mp3');
            audio.play();
        }

        function showNotification(title, body) {
            if (!("Notification" in window)) {
                alert("This browser does not support desktop notification");
            } else if (Notification.permission === "granted") {
                new Notification(title, { body: body });
            } else if (Notification.permission !== "denied") {
                Notification.requestPermission().then(function (permission) {
                    if (permission === "granted") {
                        new Notification(title, { body: body });
                    }
                });
            }
        }

        function stopCountdown() {
            clearInterval(cdInterval);
        }

        function formatTime(time) {
            return time < 10 ? `0${time}` : time;
        }

        function showElement(element) {
            element.classList.remove('hidden');
        }

        function hideElement(element) {
            element.classList.add('hidden');
        }

        // Countdown Timer event listeners
        document.getElementById('startCdButton').addEventListener('click', startCountdown);
        document.getElementById('stopCdButton').addEventListener('click', stopCountdown);


        function startPomodoroTimer() {
            let totalSeconds;
            if (isPomodoroMode) {
                totalSeconds = pomodoroMinutes * 60;
            } else {
                totalSeconds = breakMinutes * 60;
            }

            pomodoroInterval = setInterval(() => {
                if (totalSeconds <= 0) {
                    clearInterval(pomodoroInterval);
                    if (isPomodoroMode) {
                        // Switch to break mode
                        isPomodoroMode = false;
                        totalSeconds = breakMinutes * 60;
                        document.getElementById('pomodoroTitle').textContent = 'Break';
                    } else {
                        // Switch back to Pomodoro mode
                        isPomodoroMode = true;
                        totalSeconds = pomodoroMinutes * 60;
                        document.getElementById('pomodoroTitle').textContent = 'Focus';
                    }
                } else {
                    let remainingSeconds = totalSeconds % 60;
                    let remainingMinutes = Math.floor(totalSeconds / 60);
                    
                    // Update UI
                    document.getElementById('pomodoroMinutes').textContent = formatTime(remainingMinutes);
                    document.getElementById('pomodoroSeconds').textContent = formatTime(remainingSeconds);
                    
                    // Kurangi totalSeconds setiap detik
                    totalSeconds--;
                }
            }, 1000);
        }

        function stopPomodoroTimer() {
            clearInterval(pomodoroInterval);
        }

        // Start Button click event listener
        document.getElementById('startPomodoroBtn').addEventListener('click', startPomodoroTimer);

        // Stop Button click event listener
        document.getElementById('stopPomodoroBtn').addEventListener('click', stopPomodoroTimer);


        // Stopwatch
        let stopwatchInterval;
        let totalMilliseconds = 0;
        let isRunning = false;
        let isPaused = false;

        function startStopwatch() {
            if (!isRunning) {
                isRunning = true;
                document.getElementById('startStopwatchBtn').textContent = 'Pause';
                stopwatchInterval = setInterval(() => {
                    if (!isPaused) {
                        let remainingMilliseconds = totalMilliseconds % 1000;
                        let remainingSeconds = Math.floor(totalMilliseconds / 1000) % 60;
                        let remainingMinutes = Math.floor(totalMilliseconds / (1000 * 60));
                        
                        // Update UI
                        document.getElementById('stopwatchMinutes').textContent = formatTime(remainingMinutes);
                        document.getElementById('stopwatchSeconds').textContent = formatTime(remainingSeconds);
                        document.getElementById('stopwatchMilliseconds').textContent = formatMilliseconds(remainingMilliseconds);
                        
                        // Tambah totalMilliseconds setiap milidetik
                        totalMilliseconds += 10;
                    }
                }, 10);
            } else {
                if (!isPaused) {
                    isPaused = true;
                    clearInterval(stopwatchInterval);
                    document.getElementById('startStopwatchBtn').textContent = 'Resume';
                } else {
                    isPaused = false;
                    document.getElementById('startStopwatchBtn').textContent = 'Pause';
                    stopwatchInterval = setInterval(() => {
                        let remainingMilliseconds = totalMilliseconds % 1000;
                        let remainingSeconds = Math.floor(totalMilliseconds / 1000) % 60;
                        let remainingMinutes = Math.floor(totalMilliseconds / (1000 * 60));
                        
                        // Update UI
                        document.getElementById('stopwatchMinutes').textContent = formatTime(remainingMinutes);
                        document.getElementById('stopwatchSeconds').textContent = formatTime(remainingSeconds);
                        document.getElementById('stopwatchMilliseconds').textContent = formatMilliseconds(remainingMilliseconds);
                        
                        // Tambah totalMilliseconds setiap milidetik
                        totalMilliseconds += 10;
                    }, 10);
                }
            }
        }

        function stopStopwatch() {
            isRunning = false;
            isPaused = false;
            clearInterval(stopwatchInterval);
            document.getElementById('startStopwatchBtn').textContent = 'Start';
        }

        function resetStopwatch() {
            isRunning = false;
            isPaused = false;
            clearInterval(stopwatchInterval);
            totalMilliseconds = 0; // Set totalMilliseconds kembali ke 0
            document.getElementById('startStopwatchBtn').textContent = 'Start';
            document.getElementById('stopwatchMinutes').textContent = '00';
            document.getElementById('stopwatchSeconds').textContent = '00';
            document.getElementById('stopwatchMilliseconds').textContent = '000';
        }

        // Start Button click event listener
        document.getElementById('startStopwatchBtn').addEventListener('click', startStopwatch);

        // Stop Button click event listener
        document.getElementById('stopStopwatchBtn').addEventListener('click', stopStopwatch);

        // Reset Button click event listener
        document.getElementById('resetStopwatchBtn').addEventListener('click', resetStopwatch);

        function formatMilliseconds(milliseconds) {
            return milliseconds < 10 ? `00${milliseconds}` : milliseconds < 100 ? `0${milliseconds}` : milliseconds;
        }

        function formatTime(time) {
            return time < 10 ? `0${time}` : time;
        }
    </script>


</body>
</html>
