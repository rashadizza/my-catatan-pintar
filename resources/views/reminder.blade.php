<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MY CP | Reminder</title>
    <link rel="icon" type="image/x-icon" href="FavIcon.ico">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="note.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

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
                                class="btn flex items-center px-4 py-3 space-x-4 transition ease-out duration-1000 hover:bg-[#fd53b8] hover:bg-gradient-to-r from-sky-600 to-cyan-400 hover:text-white text-[#66fcfb]">
                                    <i class="lni lni-alarm-clock" style="font-size: 25px;"></i>
                                <span class="group-hover:text-white">Timer</span>
                            </a>
                        </li>
                        <li class="min-w-max">
                            <a href="/reminders"
                                class="relative flex items-center space-x-4 bg-gradient-to-r from-sky-600 to-cyan-400 px-4 py-3 text-white">
                                    <i class="lni lni-alarm" style="font-size: 25px;"></i>
                                <span class="group-hover:text-white">Reminder</span>
                            </a>
                        </li>
                        <li class="min-w-max">
                            <a href="'/password'"
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
                        <a href="{{ route('profile.edit') }}"
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
        <div style="flex:4" class="flex-item py-3 px-4">
            <div class="flex-container">
                <p style="flex:1" class="flex-item text-4xl mb-6">Reminder</p>
            </div>
            <button type="button" onclick="window.location='{{ url('add-reminder') }}'"
                class="mb-2 text-white bg-sky-600 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Add
                New Reminder</button>
            {{-- Table Reminder --}}
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-6">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Reminder Title
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Date & Time
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Priority
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Completed
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd:bg-white even:bg-gray-50 border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                Tubes ABP Frontend
                            </th>
                            <td class="px-6 py-4">
                                2024-4-1 10:00 PM
                            </td>
                            <td class="px-6 py-4 text-red-500">
                                High
                            </td>
                            <td class="px-6 py-4">
                                <input type="checkbox">
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                                <a href="#" class="font-medium text-red-600 hover:underline">Delete</a>
                            </td>
                        </tr>
                        <tr class="odd:bg-white even:bg-gray-50 border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                Belanja
                            </th>
                            <td class="px-6 py-4">
                                2024-4-2 2:00 PM
                            </td>
                            <td class="px-6 py-4 text-yellow-500">
                                Medium
                            </td>
                            <td class="px-6 py-4">
                                <input type="checkbox">
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                                <a href="#" class="font-medium text-red-600 hover:underline">Delete</a>
                            </td>
                        </tr>
                        <tr class="odd:bg-white even:bg-gray-50 border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                Nonton Bioskop
                            </th>
                            <td class="px-6 py-4">
                                2024-4-4 11:00 AM
                            </td>
                            <td class="px-6 py-4 text-green-500">
                                Low
                            </td>
                            <td class="px-6 py-4">
                                <input type="checkbox">
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                                <a href="#" class="font-medium text-red-600 hover:underline">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            {{-- End of Table Reminder --}}
            {{-- Modal Reminder --}}
            <button id="testButton"
            class="mb-2 text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Test Reminder</button>
            <div id="reminderPopup"
                class="hidden fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-50 bg-red-500 shadow-lg border border-gray-300 rounded-lg p-4 grid justify-items-stretch">
                <h3 class="text-xl text-center font-bold text-white mb-2">Tubes ABP Frontend</h3>
                <p class="text-xl text-center text-white mb-4">2024-4-1 10:00 AM</p>
                <p class="text-xl text-center text-white mb-4">Priority: High</p>
                <p class="font-bold text-xl text-center text-white mb-4">You have 7 minutes left !</p>
                <button id="closeButton"
                    class="bg-sky-600 hover:bg-sky-800 text-white font-bold py-2 px-4 rounded justify-self-center ">Close</button>
            </div>
            {{-- End of Modal Reminder --}}
        </div>
        <!--====== CONTENT PART END ======-->
    </div>
    <script>
        const testButton = document.getElementById('testButton');
        const reminderPopup = document.getElementById('reminderPopup');

        testButton.addEventListener('click', () => {
            reminderPopup.classList.remove('hidden');
        });

        const closeButton = document.getElementById('closeButton');
        closeButton.addEventListener('click', () => {
            reminderPopup.classList.add('hidden');
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
