<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Icon & Title -->
    <title>MY CP | Note</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">

    <!-- SimpleMDE -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/LineIcons.css">
    <link rel="stylesheet" href="/note2.css">

</head>

<body>
    <div class="container">
        <div class="row justify-content-center bg-white">
            <div class="col-md-10">
                <form action="{{ route('notes.save') }}" method="POST">
                    @csrf
                    @if (isset($note))
                        <input type="hidden" name="id" value="{{ $note->id }}" />
                    @endif
                    <div class="form-group">
                        <label style="font-family: Helvetica; font-size:34px; padding-top:8px"
                            for="title">Judul</label>
                        <input type="text" class="form-control" name="title" id="title"
                            placeholder="Masukkan judul" value="{{ isset($note) ? $note->title : '' }}">
                    </div>
                    <br>
                    <div class="form-group">
                        <label style="font-family: Helvetica; font-size:34px" for="text">Isi</label>
                        <textarea id="text" name="text" cols="30" rows="50">{{ isset($note) ? $note->text : '' }}</textarea>
                    </div>
                    <div class="flex">
                        <a type="button" href="{{ route('notes.index') }}"
                            class="faust button text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4" />
                            </svg>
                            Kembali
                        </a>
                        <a class="js-toggle-fullscreen-btn toggle-fullscreen-btn faust button text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            aria-label="Enter fullscreen mode" hidden>
                            <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <g class="icon-fullscreen-enter">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M8 4H4m0 0v4m0-4 5 5m7-5h4m0 0v4m0-4-5 5M8 20H4m0 0v-4m0 4 5-5m7 5h4m0 0v-4m0 4-5-5" />
                                </g>
                            </svg>
                            Fullscreen
                        </a>
                        <button type="submit"
                            class="faust button text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                    d="M11 16h2m6.707-9.293-2.414-2.414A1 1 0 0 0 16.586 4H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V7.414a1 1 0 0 0-.293-.707ZM16 20v-6a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v6h8ZM9 4h6v3a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V4Z" />
                            </svg>
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="header">
        <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave"
                        d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(102,252,251,0.6)" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(102,252,251,0.4)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(102,252,251,0.2)" />
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="rgba(102,252,251,1.0)" />
                </g>
            </svg>
        </div>
    </div>

    <!-- Easy MDE -->
    <script>
        var simplemde = new SimpleMDE({
            element: document.getElementById("text")
        });
    </script>

    <!-- Fullscreen -->
    <script>
        if (document.fullscreenEnabled || document.webkitFullscreenEnabled) {
            const toggleBtn = document.querySelector('.js-toggle-fullscreen-btn');

            const styleEl = document.createElement('link');
            styleEl.setAttribute('rel', 'stylesheet');
            styleEl.setAttribute('href', 'https://codepen.io/tiggr/pen/poJoLyW.css');
            styleEl.addEventListener('load', function() {
                toggleBtn.hidden = false;
            });
            document.head.appendChild(styleEl);

            toggleBtn.addEventListener('click', function() {
                if (document.fullscreen) {
                    document.exitFullscreen();
                } else if (document.webkitFullscreenElement) {
                    document.webkitCancelFullScreen()
                } else if (document.documentElement.requestFullscreen) {
                    document.documentElement.requestFullscreen();
                } else {
                    document.documentElement.webkitRequestFullScreen();
                }
            });

            document.addEventListener('fullscreenchange', handleFullscreen);
            document.addEventListener('webkitfullscreenchange', handleFullscreen);

            function handleFullscreen() {
                if (document.fullscreen || document.webkitFullscreenElement) {
                    toggleBtn.classList.add('on');
                    toggleBtn.setAttribute('aria-label', 'Exit fullscreen mode');
                } else {
                    toggleBtn.classList.remove('on');
                    toggleBtn.setAttribute('aria-label', 'Enter fullscreen mode');
                }
            }
        }
    </script>
</body>

</html>
