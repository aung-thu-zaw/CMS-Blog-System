<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tailwind Cli Stater</title>
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/18c274e5f3.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="bg-[#fdfdfd]">
        <!-- Navbar -->
        <nav class="bg-gray-50 border-gray-200  border-b shadow-sm py-1">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="https://flowbite.com/" class="flex items-center">
                    <span class="self-center text-2xl font-semibold whitespace-nowrap text-stone-700">CMS
                        Blog</span>
                </a>
                <div class="flex items-center md:order-2">
                    <div>
                        <input type="text"
                            class="hidden md:block w-full p-3 pl-5 text-sm text-gray-900 border-4 border-gray-300 rounded-lg bg-gray-50 focus:ring-0 outline-none focus:border-gray-300"
                            placeholder="Search...">
                    </div>
                    <button type="button"
                        class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 ml-10"
                        id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                        data-dropdown-placement="bottom">
                        <span class="sr-only">Open user menu</span>
                        <img class="w-10 h-10 rounded-full object-cover"
                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8dXNlcnxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=400&q=60"
                            alt="user photo">
                    </button>
                    <!-- Dropdown menu -->
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow "
                        id="user-dropdown">
                        <div class="px-4 py-3">
                            <span class="block text-sm text-gray-900">Bonnie Green</span>
                            <span class="block text-sm  text-gray-500 truncate">name@flowbite.com</span>
                        </div>
                        <ul class="py-2" aria-labelledby="user-menu-button">
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 ">Dashboard</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 ">Settings</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 ">Earnings</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 ">Sign
                                    out</a>
                            </li>
                        </ul>


                    </div>
                    <button data-collapse-toggle="mobile-menu-2" type="button"
                        class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 "
                        aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
                    <ul
                        class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-gray-50 md:mr-10">
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:hover:bg-gray-700  md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:hover:bg-gray-700  md:dark:hover:bg-transparent dark:border-gray-700">Blog</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:hover:bg-gray-700  md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                        </li>
                    </ul>

                    <input type="text"
                        class="block w-full p-3 md:hidden pl-5 text-sm text-gray-900 border-4 border-gray-300 rounded-lg bg-gray-50 focus:ring-0 outline-none focus:border-gray-300"
                        placeholder=" Search...">
                </div>
            </div>
        </nav>

        <section class="my-5 container mx-auto">
            <div class="mx-auto w-[500px] md:w-[800px] ">
                <img src="https://i.pinimg.com/originals/d3/46/4a/d3464a4351fdf340ccb6bb37c281381a.gif" alt="">
            </div>
        </section>



        <!-- Header Mani Seciton -->
        <section class=" container mx-auto my-10">

            <h1 class="text-center font-bold text-slate-700 text-4xl mb-5 pb-5 border-b-4 border-b-slate-400">Our CMS
                Blogs</h1>


            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">

                <!-- Card -->
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow sm:mx-auto">
                    <a href="#">
                        <img class="rounded-t-lg" src="https://neilpatel.com/wp-content/uploads/2017/08/blog.jpg"
                            alt="" />
                    </a>
                    <div class="p-5">

                        <div class="flex items-center text-slate-500 text-sm font-bold my-2 justify-between">
                            <span>
                                <i class="fa-solid fa-user"></i>
                                Admin
                            </span>
                            <span>
                                <i class="fa-solid fa-calendar"></i>
                                23-July-2023
                            </span>
                        </div>

                        <a href="#">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-700 ">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-600 text-sm dark:text-gray-400 lime-clamp-3">Here are the
                            biggest
                            enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>

                        <div class="flex items-center justify-between text-sm text-slate-700">
                            <span>
                                <i class="fa-solid fa-thumbs-up"></i> 0 Likes
                            </span>
                            <span>
                                <i class="fa-solid fa-comment"></i> 0 Comments
                            </span>
                            <span>
                                <i class="fa-solid fa-share"></i> 0 Shares
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Card -->
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow sm:mx-auto">
                    <a href="#">
                        <img class="rounded-t-lg" src="https://neilpatel.com/wp-content/uploads/2017/08/blog.jpg"
                            alt="" />
                    </a>
                    <div class="p-5">

                        <div class="flex items-center text-slate-500 text-sm font-bold my-2 justify-between">
                            <span>
                                <i class="fa-solid fa-user"></i>
                                Admin
                            </span>
                            <span>
                                <i class="fa-solid fa-calendar"></i>
                                23-July-2023
                            </span>
                        </div>

                        <a href="#">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-700 ">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-600 text-sm dark:text-gray-400 lime-clamp-3">Here are the
                            biggest
                            enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>

                        <div class="flex items-center justify-between text-sm text-slate-700">
                            <span>
                                <i class="fa-solid fa-thumbs-up"></i> 0 Likes
                            </span>
                            <span>
                                <i class="fa-solid fa-comment"></i> 0 Comments
                            </span>
                            <span>
                                <i class="fa-solid fa-share"></i> 0 Shares
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Card -->
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow sm:mx-auto">
                    <a href="#">
                        <img class="rounded-t-lg" src="https://neilpatel.com/wp-content/uploads/2017/08/blog.jpg"
                            alt="" />
                    </a>
                    <div class="p-5">

                        <div class="flex items-center text-slate-500 text-sm font-bold my-2 justify-between">
                            <span>
                                <i class="fa-solid fa-user"></i>
                                Admin
                            </span>
                            <span>
                                <i class="fa-solid fa-calendar"></i>
                                23-July-2023
                            </span>
                        </div>

                        <a href="#">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-700 ">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-600 text-sm dark:text-gray-400 lime-clamp-3">Here are the
                            biggest
                            enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>

                        <div class="flex items-center justify-between text-sm text-slate-700">
                            <span>
                                <i class="fa-solid fa-thumbs-up"></i> 0 Likes
                            </span>
                            <span>
                                <i class="fa-solid fa-comment"></i> 0 Comments
                            </span>
                            <span>
                                <i class="fa-solid fa-share"></i> 0 Shares
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Card -->
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow sm:mx-auto">
                    <a href="#">
                        <img class="rounded-t-lg" src="https://neilpatel.com/wp-content/uploads/2017/08/blog.jpg"
                            alt="" />
                    </a>
                    <div class="p-5">

                        <div class="flex items-center text-slate-500 text-sm font-bold my-2 justify-between">
                            <span>
                                <i class="fa-solid fa-user"></i>
                                Admin
                            </span>
                            <span>
                                <i class="fa-solid fa-calendar"></i>
                                23-July-2023
                            </span>
                        </div>

                        <a href="#">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-700 ">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-600 text-sm dark:text-gray-400 lime-clamp-3">Here are the
                            biggest
                            enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>

                        <div class="flex items-center justify-between text-sm text-slate-700">
                            <span>
                                <i class="fa-solid fa-thumbs-up"></i> 0 Likes
                            </span>
                            <span>
                                <i class="fa-solid fa-comment"></i> 0 Comments
                            </span>
                            <span>
                                <i class="fa-solid fa-share"></i> 0 Shares
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Card -->
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow sm:mx-auto">
                    <a href="#">
                        <img class="rounded-t-lg" src="https://neilpatel.com/wp-content/uploads/2017/08/blog.jpg"
                            alt="" />
                    </a>
                    <div class="p-5">

                        <div class="flex items-center text-slate-500 text-sm font-bold my-2 justify-between">
                            <span>
                                <i class="fa-solid fa-user"></i>
                                Admin
                            </span>
                            <span>
                                <i class="fa-solid fa-calendar"></i>
                                23-July-2023
                            </span>
                        </div>

                        <a href="#">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-700 ">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-600 text-sm dark:text-gray-400 lime-clamp-3">Here are the
                            biggest
                            enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>

                        <div class="flex items-center justify-between text-sm text-slate-700">
                            <span>
                                <i class="fa-solid fa-thumbs-up"></i> 0 Likes
                            </span>
                            <span>
                                <i class="fa-solid fa-comment"></i> 0 Comments
                            </span>
                            <span>
                                <i class="fa-solid fa-share"></i> 0 Shares
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Card -->
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow sm:mx-auto">
                    <a href="#">
                        <img class="rounded-t-lg" src="https://neilpatel.com/wp-content/uploads/2017/08/blog.jpg"
                            alt="" />
                    </a>
                    <div class="p-5">

                        <div class="flex items-center text-slate-500 text-sm font-bold my-2 justify-between">
                            <span>
                                <i class="fa-solid fa-user"></i>
                                Admin
                            </span>
                            <span>
                                <i class="fa-solid fa-calendar"></i>
                                23-July-2023
                            </span>
                        </div>

                        <a href="#">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-700 ">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-600 text-sm dark:text-gray-400 lime-clamp-3">Here are the
                            biggest
                            enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>

                        <div class="flex items-center justify-between text-sm text-slate-700">
                            <span>
                                <i class="fa-solid fa-thumbs-up"></i> 0 Likes
                            </span>
                            <span>
                                <i class="fa-solid fa-comment"></i> 0 Comments
                            </span>
                            <span>
                                <i class="fa-solid fa-share"></i> 0 Shares
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Card -->
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow sm:mx-auto">
                    <a href="#">
                        <img class="rounded-t-lg" src="https://neilpatel.com/wp-content/uploads/2017/08/blog.jpg"
                            alt="" />
                    </a>
                    <div class="p-5">

                        <div class="flex items-center text-slate-500 text-sm font-bold my-2 justify-between">
                            <span>
                                <i class="fa-solid fa-user"></i>
                                Admin
                            </span>
                            <span>
                                <i class="fa-solid fa-calendar"></i>
                                23-July-2023
                            </span>
                        </div>

                        <a href="#">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-700 ">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-600 text-sm dark:text-gray-400 lime-clamp-3">Here are the
                            biggest
                            enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>

                        <div class="flex items-center justify-between text-sm text-slate-700">
                            <span>
                                <i class="fa-solid fa-thumbs-up"></i> 0 Likes
                            </span>
                            <span>
                                <i class="fa-solid fa-comment"></i> 0 Comments
                            </span>
                            <span>
                                <i class="fa-solid fa-share"></i> 0 Shares
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Card -->
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow sm:mx-auto">
                    <a href="#">
                        <img class="rounded-t-lg" src="https://neilpatel.com/wp-content/uploads/2017/08/blog.jpg"
                            alt="" />
                    </a>
                    <div class="p-5">

                        <div class="flex items-center text-slate-500 text-sm font-bold my-2 justify-between">
                            <span>
                                <i class="fa-solid fa-user"></i>
                                Admin
                            </span>
                            <span>
                                <i class="fa-solid fa-calendar"></i>
                                23-July-2023
                            </span>
                        </div>

                        <a href="#">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-700 ">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-600 text-sm dark:text-gray-400 lime-clamp-3">Here are the
                            biggest
                            enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>

                        <div class="flex items-center justify-between text-sm text-slate-700">
                            <span>
                                <i class="fa-solid fa-thumbs-up"></i> 0 Likes
                            </span>
                            <span>
                                <i class="fa-solid fa-comment"></i> 0 Comments
                            </span>
                            <span>
                                <i class="fa-solid fa-share"></i> 0 Shares
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Card -->
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow sm:mx-auto">
                    <a href="#">
                        <img class="rounded-t-lg" src="https://neilpatel.com/wp-content/uploads/2017/08/blog.jpg"
                            alt="" />
                    </a>
                    <div class="p-5">

                        <div class="flex items-center text-slate-500 text-sm font-bold my-2 justify-between">
                            <span>
                                <i class="fa-solid fa-user"></i>
                                Admin
                            </span>
                            <span>
                                <i class="fa-solid fa-calendar"></i>
                                23-July-2023
                            </span>
                        </div>

                        <a href="#">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-700 ">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-600 text-sm dark:text-gray-400 lime-clamp-3">Here are the
                            biggest
                            enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>

                        <div class="flex items-center justify-between text-sm text-slate-700">
                            <span>
                                <i class="fa-solid fa-thumbs-up"></i> 0 Likes
                            </span>
                            <span>
                                <i class="fa-solid fa-comment"></i> 0 Comments
                            </span>
                            <span>
                                <i class="fa-solid fa-share"></i> 0 Shares
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Card -->
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow sm:mx-auto">
                    <a href="#">
                        <img class="rounded-t-lg" src="https://neilpatel.com/wp-content/uploads/2017/08/blog.jpg"
                            alt="" />
                    </a>
                    <div class="p-5">

                        <div class="flex items-center text-slate-500 text-sm font-bold my-2 justify-between">
                            <span>
                                <i class="fa-solid fa-user"></i>
                                Admin
                            </span>
                            <span>
                                <i class="fa-solid fa-calendar"></i>
                                23-July-2023
                            </span>
                        </div>

                        <a href="#">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-700 ">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-600 text-sm dark:text-gray-400 lime-clamp-3">Here are the
                            biggest
                            enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>

                        <div class="flex items-center justify-between text-sm text-slate-700">
                            <span>
                                <i class="fa-solid fa-thumbs-up"></i> 0 Likes
                            </span>
                            <span>
                                <i class="fa-solid fa-comment"></i> 0 Comments
                            </span>
                            <span>
                                <i class="fa-solid fa-share"></i> 0 Shares
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Card -->
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow sm:mx-auto">
                    <a href="#">
                        <img class="rounded-t-lg" src="https://neilpatel.com/wp-content/uploads/2017/08/blog.jpg"
                            alt="" />
                    </a>
                    <div class="p-5">

                        <div class="flex items-center text-slate-500 text-sm font-bold my-2 justify-between">
                            <span>
                                <i class="fa-solid fa-user"></i>
                                Admin
                            </span>
                            <span>
                                <i class="fa-solid fa-calendar"></i>
                                23-July-2023
                            </span>
                        </div>

                        <a href="#">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-700 ">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-600 text-sm dark:text-gray-400 lime-clamp-3">Here are the
                            biggest
                            enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>

                        <div class="flex items-center justify-between text-sm text-slate-700">
                            <span>
                                <i class="fa-solid fa-thumbs-up"></i> 0 Likes
                            </span>
                            <span>
                                <i class="fa-solid fa-comment"></i> 0 Comments
                            </span>
                            <span>
                                <i class="fa-solid fa-share"></i> 0 Shares
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Card -->
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow sm:mx-auto">
                    <a href="#">
                        <img class="rounded-t-lg" src="https://neilpatel.com/wp-content/uploads/2017/08/blog.jpg"
                            alt="" />
                    </a>
                    <div class="p-5">

                        <div class="flex items-center text-slate-500 text-sm font-bold my-2 justify-between">
                            <span>
                                <i class="fa-solid fa-user"></i>
                                Admin
                            </span>
                            <span>
                                <i class="fa-solid fa-calendar"></i>
                                23-July-2023
                            </span>
                        </div>

                        <a href="#">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-700 ">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-600 text-sm dark:text-gray-400 lime-clamp-3">Here are the
                            biggest
                            enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>

                        <div class="flex items-center justify-between text-sm text-slate-700">
                            <span>
                                <i class="fa-solid fa-thumbs-up"></i> 0 Likes
                            </span>
                            <span>
                                <i class="fa-solid fa-comment"></i> 0 Comments
                            </span>
                            <span>
                                <i class="fa-solid fa-share"></i> 0 Shares
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Card -->
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow sm:mx-auto">
                    <a href="#">
                        <img class="rounded-t-lg" src="https://neilpatel.com/wp-content/uploads/2017/08/blog.jpg"
                            alt="" />
                    </a>
                    <div class="p-5">

                        <div class="flex items-center text-slate-500 text-sm font-bold my-2 justify-between">
                            <span>
                                <i class="fa-solid fa-user"></i>
                                Admin
                            </span>
                            <span>
                                <i class="fa-solid fa-calendar"></i>
                                23-July-2023
                            </span>
                        </div>

                        <a href="#">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-700 ">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-600 text-sm dark:text-gray-400 lime-clamp-3">Here are the
                            biggest
                            enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>

                        <div class="flex items-center justify-between text-sm text-slate-700">
                            <span>
                                <i class="fa-solid fa-thumbs-up"></i> 0 Likes
                            </span>
                            <span>
                                <i class="fa-solid fa-comment"></i> 0 Comments
                            </span>
                            <span>
                                <i class="fa-solid fa-share"></i> 0 Shares
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Card -->
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow sm:mx-auto">
                    <a href="#">
                        <img class="rounded-t-lg" src="https://neilpatel.com/wp-content/uploads/2017/08/blog.jpg"
                            alt="" />
                    </a>
                    <div class="p-5">

                        <div class="flex items-center text-slate-500 text-sm font-bold my-2 justify-between">
                            <span>
                                <i class="fa-solid fa-user"></i>
                                Admin
                            </span>
                            <span>
                                <i class="fa-solid fa-calendar"></i>
                                23-July-2023
                            </span>
                        </div>

                        <a href="#">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-700 ">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-600 text-sm dark:text-gray-400 lime-clamp-3">Here are the
                            biggest
                            enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>

                        <div class="flex items-center justify-between text-sm text-slate-700">
                            <span>
                                <i class="fa-solid fa-thumbs-up"></i> 0 Likes
                            </span>
                            <span>
                                <i class="fa-solid fa-comment"></i> 0 Comments
                            </span>
                            <span>
                                <i class="fa-solid fa-share"></i> 0 Shares
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Card -->
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow sm:mx-auto">
                    <a href="#">
                        <img class="rounded-t-lg" src="https://neilpatel.com/wp-content/uploads/2017/08/blog.jpg"
                            alt="" />
                    </a>
                    <div class="p-5">

                        <div class="flex items-center text-slate-500 text-sm font-bold my-2 justify-between">
                            <span>
                                <i class="fa-solid fa-user"></i>
                                Admin
                            </span>
                            <span>
                                <i class="fa-solid fa-calendar"></i>
                                23-July-2023
                            </span>
                        </div>

                        <a href="#">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-700 ">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-600 text-sm dark:text-gray-400 lime-clamp-3">Here are the
                            biggest
                            enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>

                        <div class="flex items-center justify-between text-sm text-slate-700">
                            <span>
                                <i class="fa-solid fa-thumbs-up"></i> 0 Likes
                            </span>
                            <span>
                                <i class="fa-solid fa-comment"></i> 0 Comments
                            </span>
                            <span>
                                <i class="fa-solid fa-share"></i> 0 Shares
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Card -->
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow sm:mx-auto">
                    <a href="#">
                        <img class="rounded-t-lg" src="https://neilpatel.com/wp-content/uploads/2017/08/blog.jpg"
                            alt="" />
                    </a>
                    <div class="p-5">

                        <div class="flex items-center text-slate-500 text-sm font-bold my-2 justify-between">
                            <span>
                                <i class="fa-solid fa-user"></i>
                                Admin
                            </span>
                            <span>
                                <i class="fa-solid fa-calendar"></i>
                                23-July-2023
                            </span>
                        </div>

                        <a href="#">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-700 ">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-600 text-sm dark:text-gray-400 lime-clamp-3">Here are the
                            biggest
                            enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>

                        <div class="flex items-center justify-between text-sm text-slate-700">
                            <span>
                                <i class="fa-solid fa-thumbs-up"></i> 0 Likes
                            </span>
                            <span>
                                <i class="fa-solid fa-comment"></i> 0 Comments
                            </span>
                            <span>
                                <i class="fa-solid fa-share"></i> 0 Shares
                            </span>
                        </div>
                    </div>
                </div>

            </div>





        </section>

        <!-- Pagination -->
        <div class="flex items-center justify-center my-10">

            <nav aria-label="Page navigation example">
                <ul class="inline-flex -space-x-px">
                    <li>
                        <a href="#"
                            class="px-4 py-3 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-md hover:bg-gray-100 hover:text-gray-700">Previous</a>
                    </li>
                    <li>
                        <a href="#"
                            class="px-4 py-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">1</a>
                    </li>
                    <li>
                        <a href="#"
                            class="px-4 py-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">2</a>
                    </li>
                    <li>
                        <a href="#" aria-current="page"
                            class="px-4 py-3 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 ">3</a>
                    </li>
                    <li>
                        <a href="#"
                            class="px-4 py-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">4</a>
                    </li>
                    <li>
                        <a href="#"
                            class="px-4 py-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">5</a>
                    </li>
                    <li>
                        <a href="#"
                            class="px-4 py-3 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-md hover:bg-gray-100 hover:text-gray-700">Next</a>
                    </li>
                </ul>
            </nav>
        </div>


        <!-- Footer -->

        <footer class="border-t-2 bg-gray-50 ">
            <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
                <div class="md:flex md:justify-between">
                    <div class="mb-6 md:mb-0">
                        <a href="https://flowbite.com/" class="flex items-center">
                            <span class="self-center text-2xl text-stone-700 font-semibold whitespace-nowrap ">CMS
                                Blog</span>
                        </a>
                    </div>
                    <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase ">Resources Link
                            </h2>
                            <ul class="text-gray-600 dark:text-gray-400 font-medium">
                                <li class="mb-4">
                                    <a href="https://flowbite.com/" class="hover:underline">Home</a>
                                </li>
                                <li class="mb-4">
                                    <a href="https://flowbite.com/" class="hover:underline">About</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/" class="hover:underline">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase ">Follow us
                            </h2>
                            <ul class="text-gray-600 dark:text-gray-400 font-medium">
                                <li class="mb-4">
                                    <a href="https://github.com/themesberg/flowbite"
                                        class="hover:underline ">Facebook</a>
                                </li>
                                <li class="mb-4">
                                    <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Instagram</a>
                                </li>
                                <li class="mb-4">
                                    <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Twitter</a>
                                </li>
                                <li>
                                    <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Reddit</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase ">Legal</h2>
                            <ul class="text-gray-600 dark:text-gray-400 font-medium">
                                <li class="mb-4">
                                    <a href="#" class="hover:underline">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
                <div class="sm:flex sm:items-center sm:justify-between">
                    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a
                            href="https://flowbite.com/" class="hover:underline">CMS™</a>. All Rights Reserved.
                    </span>
                    <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Facebook page</span>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Instagram page</span>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path
                                    d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                            <span class="sr-only">Twitter page</span>
                        </a>

                    </div>
                </div>
            </div>
        </footer>



    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
</body>

</html>