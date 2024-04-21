    // Button Elements
    const countdownModeBtn = document.getElementById('countdownModeBtn');
    const pomodoroModeBtn = document.getElementById('pomodoroModeBtn');
    const stopwatchModeBtn = document.getElementById('stopwatchModeBtn');
    const contentContainer = document.querySelector('.flex-1');

    // Timer Elements
    const countdownTimer = document.getElementById('countdownTimer');
    const pomodoroTimer = document.getElementById('pomodoroTimer');
    const stopwatch = document.getElementById('stopwatch');
    const cdInput = document.getElementById('cdInput');
    let cdInterval;

    // Penggantian Mode Timer
    countdownModeBtn.addEventListener('click', () => {
        contentContainer.style.backgroundImage = "url('bg_timerCountdown.jpg')";
        showElement(countdownTimer);
        hideElement(pomodoroTimer);
        hideElement(stopwatch);
    });

    pomodoroModeBtn.addEventListener('click', () => {
        contentContainer.style.backgroundImage = "url('bg_timerPomodoro.jpg')";
        showElement(pomodoroTimer);
        hideElement(countdownTimer);
        hideElement(stopwatch);
    });

    stopwatchModeBtn.addEventListener('click', () => {
        contentContainer.style.backgroundImage = "url('bg_timerStopwatch.jpg')";
        showElement(stopwatch);
        hideElement(countdownTimer);
        hideElement(pomodoroTimer);
    });

    // Countdown Timer 
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

    function stopCountdown() {
        clearInterval(cdInterval);
    }

    // Pomodoro Timer 
    let pomodoroInterval;
    let pomodoroMinutes = 25; 
    let breakMinutes = 5; 
    let isPomodoroMode = true;
    
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
                    // Perubahan ke mode break
                    isPomodoroMode = false;
                    totalSeconds = breakMinutes * 60;
                    document.getElementById('pomodoroTitle').textContent = 'Break';
                    playNotificationSound();
                    showNotification("Pomodoro Timer", "Focus Time is Over, Have a Good Rest");
                } else {
                    // Perubahan ke mode focus 
                    isPomodoroMode = true;
                    totalSeconds = pomodoroMinutes * 60;
                    document.getElementById('pomodoroTitle').textContent = 'Focus';
                    playNotificationSound();
                    showNotification("Pomodoro Timer", "Break Time is Over, Welcome back to your activities, Keep your spirits up...!!");
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
        totalMilliseconds = 0; 
        document.getElementById('startStopwatchBtn').textContent = 'Start';
        document.getElementById('stopwatchMinutes').textContent = '00';
        document.getElementById('stopwatchSeconds').textContent = '00';
        document.getElementById('stopwatchMilliseconds').textContent = '000';
    }

    // Fungsi Bantuan / Tambahan 
    function playNotificationSound() {
        const audio = new Audio('/timerNotif.mp3');
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

    function formatMilliseconds(milliseconds) {
        return milliseconds < 10 ? `00${milliseconds}` : milliseconds < 100 ? `0${milliseconds}` : milliseconds;
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

    // Pomodoro Timer event listeners
    document.getElementById('startPomodoroBtn').addEventListener('click', startPomodoroTimer);
    document.getElementById('stopPomodoroBtn').addEventListener('click', stopPomodoroTimer);

    // Stopwatch event listeners
    document.getElementById('startStopwatchBtn').addEventListener('click', startStopwatch);
    document.getElementById('stopStopwatchBtn').addEventListener('click', stopStopwatch);
    document.getElementById('resetStopwatchBtn').addEventListener('click', resetStopwatch);
