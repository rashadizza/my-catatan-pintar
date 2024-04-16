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
</head>

<body>
    <!--Navbar-->
    <div class="flex-container min-h-screen bg-white">
        <div
            class="sidebar flex-item min-h-screen w-[3.35rem] bg-[#99a4b6] overflow-hidden border-r hover:text-[#ffffff] hover:bg-[#1a1b77] hover:shadow-lg">
            <div class="h-screen flex-col justify-between pt-2 pb-6">
                <div>
                    <div class="w-max p-2.5">
                        <img src="logo4.png" class="w-64" alt="">
                    </div>
                    <ul class="mt-6 space-y-2 tracking-wide">
                        <li class="min-w-max">
                            <a href="/note"
                                class="btn flex items-center px-4 py-3 space-x-4 transition ease-out duration-1000 hover:bg-[#fd53b8] hover:bg-gradient-to-r from-sky-600 to-cyan-400 hover:text-white text-[#66fcfb]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 448 512">
                                    <path fill="#000000" class="fill-current group-hover:text-white" fill-rule="evenodd"
                                        d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                                </svg>
                                <span class="-mr-1 ">Note</span>
                            </a>
                        </li>
                        <li class="min-w-max">
                            <a href="/todolist"
                                class="btn flex items-center px-4 py-3 space-x-4 transition ease-out duration-1000 hover:bg-[#fd53b8] hover:bg-gradient-to-r from-sky-600 to-cyan-400 hover:text-white text-[#66fcfb]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 512 512">
                                    <path fill="#000000" class="fill-current group-hover:text-white" fill-rule="evenodd"
                                        d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                                </svg>
                                <span class="group-hover:text-white">To-Do List</span>
                            </a>
                        </li>
                        <li class="min-w-max">
                            <a href="/timer"
                                class="btn flex items-center px-4 py-3 space-x-4 transition ease-out duration-1000 hover:bg-[#fd53b8] hover:bg-gradient-to-r from-sky-600 to-cyan-400 hover:text-white text-[#66fcfb]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 512 512">
                                    <path fill="#000000" class="fill-current" fill-rule="evenodd"
                                        d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                                </svg>
                                <span class="group-hover:text-white"> Timer</span>
                            </a>
                        </li>
                        <li class="min-w-max">
                            <a href="/reminder" aria-label="dashboard"
                                class="btn flex items-center px-4 py-3 space-x-4 transition ease-out duration-1000 hover:bg-[#fd53b8] hover:bg-gradient-to-r from-sky-600 to-cyan-400 hover:text-white text-[#66fcfb]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 512 512">
                                    <path fill="#000000" class="fill-current group-hover:text-white" fill-rule="evenodd"
                                        d="M224 0c-17.7 0-32 14.3-32 32V51.2C119 66 64 130.6 64 208v18.8c0 47-17.3 92.4-48.5 127.6l-7.4 8.3c-8.4 9.4-10.4 22.9-5.3 34.4S19.4 416 32 416H416c12.6 0 24-7.4 29.2-18.9s3.1-25-5.3-34.4l-7.4-8.3C401.3 319.2 384 273.9 384 226.8V208c0-77.4-55-142-128-156.8V32c0-17.7-14.3-32-32-32zm45.3 493.3c12-12 18.7-28.3 18.7-45.3H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7z" />
                                </svg>
                                <span class="group-hover:text-white">Reminder</span>
                            </a>
                        </li>
                        <li class="min-w-max">
                            <a href="/pass"
                                class="btn flex items-center px-4 py-3 space-x-4 transition ease-out duration-1000 hover:bg-[#fd53b8] hover:bg-gradient-to-r from-sky-600 to-cyan-400 hover:text-white text-[#66fcfb]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 512 512">
                                    <path fill="#000000" class="fill-current group-hover:text-white" fill-rule="evenodd"
                                        d="M64 0C28.7 0 0 28.7 0 64V416c0 35.3 28.7 64 64 64H80l16 32h64l16-32H400l16 32h64l16-32h16c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H64zM224 320a80 80 0 1 0 0-160 80 80 0 1 0 0 160zm0-240a160 160 0 1 1 0 320 160 160 0 1 1 0-320zM480 221.3V336c0 8.8-7.2 16-16 16s-16-7.2-16-16V221.3c-18.6-6.6-32-24.4-32-45.3c0-26.5 21.5-48 48-48s48 21.5 48 48c0 20.9-13.4 38.7-32 45.3z" />
                                </svg>
                                <span class="group-hover:text-white">Password Manager</span>
                            </a>
                        </li>
                        <li class="min-w-max">
                            <a href="#"
                                class="relative flex items-center space-x-4 bg-gradient-to-r from-sky-600 to-cyan-400 px-4 py-3 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 512 512">
                                    <path fill="#000000" class="fill-current group-hover:text-white" fill-rule="evenodd"
                                        d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256 32a32 32 0 1 1 0-64 32 32 0 1 1 0 64zm-96-32a96 96 0 1 0 192 0 96 96 0 1 0 -192 0zM96 240c0-35 17.5-71.1 45.2-98.8S205 96 240 96c8.8 0 16-7.2 16-16s-7.2-16-16-16c-45.4 0-89.2 22.3-121.5 54.5S64 194.6 64 240c0 8.8 7.2 16 16 16s16-7.2 16-16z" />
                                </svg>
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
        <!--sampai sini-->
        <div style="flex:4" class="flex-item py-3 px-4">
            <div class="flex-container">
                <p style="flex:1" class="flex-item text-4xl">Music Player</p>
            </div>

            <br>            
            <!--button import-->
            <div class="relative flex h-10 w-full min-w-[200px] max-w-[24rem]">
                <button
                    class="!absolute right-1 top-1 z-10 select-none rounded bg-sky-600 py-2 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-sky-600/20 transition-all hover:shadow-lg hover:shadow-sky-600/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none peer-placeholder-shown:pointer-events-none peer-placeholder-shown:bg-blue-gray-500 peer-placeholder-shown:opacity-50 peer-placeholder-shown:shadow-none"
                    type="button"
                    data-ripple-light="true"
                >
                    Import
                </button>
                <input
                    class="peer h-full w-full rounded-[7px] border border-blue-gray-200 bg-transparent px-3 py-2.5 pr-20 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-sky-200 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                    placeholder=" "
                    required
                />
                <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-sky-200 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:!border-sky-200 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:!border-sky-200 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                    Youtube Playlist
                </label>
            </div>
            <!---->

            <br>
            <!--player card-->
            <div class="w-full">
                <div class='flex w-8/12 bg-white shadow-md rounded-lg overflow-hidden'>
                    <div class="flex flex-col w-full">
                        <div class="flex p-5 border-b">
                            <img class='w-20 h-20 object-cover' alt='User avatar' src='https://images.unsplash.com/photo-1530690832494-6a583de50007?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxfDB8MXxyYW5kb218MHx8fHx8fHx8MTcxMjA5ODEzNg&ixlib=rb-4.0.3&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=1080'>
                            <div class="flex flex-col px-2 w-full">
                                <span class="text-xs text-gray-700 uppercase font-medium ">
                                    now playing
                                </span>
                                <span class="text-sm text-sky-600 capitalize font-semibold pt-1">
                                Get You (feat. Kali Uchis)
                                </span>
                                <span class="text-xs text-gray-500 uppercase font-medium ">
                                    - Daniel Caesar, Kali Uchis
                                </span>
                                <div class="flex justify-end">
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col sm:flex-row items-center p-5">
                            <div class="flex items-center">
                                <div class="flex space-x-3 p-2">
                                    <button class="focus:outline-none">
                                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="19 20 9 12 19 4 19 20"></polygon><line x1="5" y1="19" x2="5" y2="5"></line></svg>
                                    </button>
                                    <button class="rounded-full w-10 h-10 flex items-center justify-center pl-0.5 ring-1 ring-sky-600 focus:outline-none">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg>
                                    </button>
                                    <button class="focus:outline-none">
                                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="#0284c7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="5 4 15 12 5 20 5 4"></polygon><line x1="19" y1="5" x2="19" y2="19"></line></svg>
                                    </button>
                                </div>
                            </div>
                            <div class="relative w-full sm:w-1/2 md:w-7/12 lg:w-4/6 ml-2">
                                <div class="bg-sky-200 h-2 w-full rounded-lg"></div>
                                <div class="bg-sky-600 h-2 w-1/2 rounded-lg absolute top-0"></div>
                    
                            </div>
                            <div class="flex justify-end w-full sm:w-auto pt-1 sm:pt-0">
                            <span class="text-xs text-gray-700 uppercase font-medium pl-2">
                                02:00/04:00                   
                            </span>
                            </div>
                            
                        </div>
                        
                        <div class="flex flex-col p-5">
                            <div class="border-b pb-1 flex justify-between items-center mb-2">
                                <span class=" text-base font-semibold uppercase text-gray-700"> play list</span>
                                <!-- <img class="w-4 cursor-pointer" src="https://p.kindpng.com/picc/s/152-1529312_filter-ios-filter-icon-png-transparent-png.png" /> -->
                            </div>

                            <div class="flex border-b py-3 cursor-pointer hover:shadow-md px-2 ">
                                <img class='w-10 h-10 object-cover rounded-lg' alt='User avatar' src='https://images.unsplash.com/photo-1601036559620-3a83dfdead09?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxfDB8MXxyYW5kb218MHx8fHx8fHx8MTcxMjA5ODI1NA&ixlib=rb-4.0.3&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=1080'>
                                <div class="flex flex-col px-2 w-full">
                                    
                                    <span class="text-sm text-sky-600 capitalize font-semibold pt-1">
                                    Meet Me in Amsterdam    
                                    </span>
                                    <span class="text-xs text-gray-500 uppercase font-medium ">
                                        - RINI
                                    </span>
                                </div>
                            </div>
                            <div class="flex border-b py-3 cursor-pointer hover:shadow-md px-2 ">
                                <img class='w-10 h-10 object-cover rounded-lg' alt='User avatar' src='https://images.unsplash.com/photo-1525461721056-2e15c36181fa?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxfDB8MXxyYW5kb218MHx8fHx8fHx8MTcxMjA5ODM0NA&ixlib=rb-4.0.3&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=1080'>
                                <div class="flex flex-col px-2 w-full">
                                    
                                    <span class="text-sm text-sky-600 capitalize font-semibold pt-1">
                                    Embody Me
                                    </span>
                                    <span class="text-xs text-gray-500 uppercase font-medium ">
                                        - Novo Amor
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    </script>
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script>
</body>

</html>
