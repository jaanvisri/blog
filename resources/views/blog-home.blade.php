<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog - Your Source for Insightful Content</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-50 dark:bg-gray-900">
    <!-- Navigation -->
    <nav class="bg-white dark:bg-gray-800 shadow-sm fixed w-full z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <span class="text-2xl font-bold text-indigo-600 dark:text-indigo-400">BlogHub</span>
                    </div>
                    <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                        <a href="#" class="border-indigo-500 text-gray-900 dark:text-white inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Home
                        </a>
                        <a href="#" class="border-transparent text-gray-500 dark:text-gray-300 hover:border-gray-300 dark:hover:border-gray-600 hover:text-gray-700 dark:hover:text-gray-200 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Categories
                        </a>
                        <a href="#" class="border-transparent text-gray-500 dark:text-gray-300 hover:border-gray-300 dark:hover:border-gray-600 hover:text-gray-700 dark:hover:text-gray-200 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            About
                        </a>
                        <a href="#" class="border-transparent text-gray-500 dark:text-gray-300 hover:border-gray-300 dark:hover:border-gray-600 hover:text-gray-700 dark:hover:text-gray-200 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Contact
                        </a>
                    </div>
                </div>
                <div class="hidden sm:ml-6 sm:flex sm:items-center">
                    <div class="ml-3 relative">
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-500 dark:text-gray-300 hover:text-gray-700 dark:hover:text-white px-3 py-2 rounded-md text-sm font-medium">Login</a>
                            <a href="#" class="bg-indigo-600 text-white hover:bg-indigo-700 px-3 py-2 rounded-md text-sm font-medium">Register</a>
                        </div>
                    </div>
                </div>
                <div class="-mr-2 flex items-center sm:hidden">
                    <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden" id="mobile-menu">
            <div class="pt-2 pb-3 space-y-1">
                <a href="#" class="bg-indigo-50 dark:bg-indigo-900 border-indigo-500 text-indigo-700 dark:text-indigo-300 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Home</a>
                <a href="#" class="border-transparent text-gray-600 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 hover:border-gray-300 dark:hover:border-gray-600 hover:text-gray-800 dark:hover:text-white block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Categories</a>
                <a href="#" class="border-transparent text-gray-600 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 hover:border-gray-300 dark:hover:border-gray-600 hover:text-gray-800 dark:hover:text-white block pl-3 pr-4 py-2 border-l-4 text-base font-medium">About</a>
                <a href="#" class="border-transparent text-gray-600 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 hover:border-gray-300 dark:hover:border-gray-600 hover:text-gray-800 dark:hover:text-white block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Contact</a>
            </div>
            <div class="pt-4 pb-3 border-t border-gray-200 dark:border-gray-700">
                <div class="flex items-center px-4">
                    <div class="flex-shrink-0">
                        <a href="#" class="text-gray-500 dark:text-gray-300 hover:text-gray-700 dark:hover:text-white block px-3 py-2 rounded-md text-base font-medium">Login</a>
                    </div>
                    <div class="ml-3">
                        <a href="#" class="bg-indigo-600 text-white hover:bg-indigo-700 block px-3 py-2 rounded-md text-base font-medium">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section with Carousel -->
    <div class="relative pt-16 pb-32 flex content-center items-center justify-center" style="min-height: 75vh;">
        <div class="absolute top-0 w-full h-full bg-black">
            <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span>
        </div>
        <div class="container relative mx-auto">
            <div class="items-center flex flex-wrap">
                <!-- Carousel on the left -->
                <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto flex flex-col lg:flex-row">
                    <div class="w-full lg:w-7/12 mb-8 lg:mb-0">
                        <div class="carousel relative overflow-hidden rounded-lg shadow-xl">
                            <!-- Carousel slides -->
                            <div class="carousel-inner relative w-full overflow-hidden h-96">
                                <!-- Slide 1 -->
                                <div class="carousel-item active absolute w-full h-full transition-opacity duration-700 opacity-100">
                                    <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" class="block w-full h-full object-cover" alt="Blog Image 1">
                                </div>
                                <!-- Slide 2 -->
                                <div class="carousel-item absolute w-full h-full transition-opacity duration-700 opacity-0">
                                    <img src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1472&q=80" class="block w-full h-full object-cover" alt="Blog Image 2">
                                </div>
                                <!-- Slide 3 -->
                                <div class="carousel-item absolute w-full h-full transition-opacity duration-700 opacity-0">
                                    <img src="https://images.unsplash.com/photo-1499951360447-b19be8fe80f5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" class="block w-full h-full object-cover" alt="Blog Image 3">
                                </div>
                            </div>
                            <!-- Carousel controls -->
                            <button class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0" type="button">
                                <span class="carousel-control-prev-icon inline-block bg-no-repeat bg-contain w-10 h-10 bg-white/30 rounded-full p-2" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0" type="button">
                                <span class="carousel-control-next-icon inline-block bg-no-repeat bg-contain w-10 h-10 bg-white/30 rounded-full p-2" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                            <!-- Carousel indicators -->
                            <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
                                <button type="button" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" aria-label="Slide 2"></button>
                                <button type="button" aria-label="Slide 3"></button>
                            </div>
                        </div>
                    </div>
                    <!-- Content on the right -->
                    <div class="w-full lg:w-5/12 lg:pl-8">
                        <div class="text-left lg:text-left">
                            <h1 class="text-white font-semibold text-4xl lg:text-5xl">
                                Discover Inspiring Stories
                            </h1>
                            <p class="mt-4 text-lg text-gray-200">
                                Explore a world of knowledge, insights, and creativity through our carefully curated blog posts.
                            </p>
                            <a href="#" class="mt-8 inline-block px-6 py-3 bg-indigo-600 text-white font-medium text-base leading-tight rounded shadow-md hover:bg-indigo-700 hover:shadow-lg focus:bg-indigo-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-indigo-800 active:shadow-lg transition duration-150 ease-in-out">
                                Start Reading
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Categories Section -->
    <section class="py-12 bg-white dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                    Explore Categories
                </h2>
                <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-500 dark:text-gray-300 sm:mt-4">
                    Dive into your favorite topics and discover new interests
                </p>
            </div>

            <div class="mt-12 grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-4">
                <!-- Category 1 -->
                <div class="group relative overflow-hidden rounded-2xl shadow-lg transform transition duration-500 hover:scale-105">
                    <div class="relative h-80 w-full overflow-hidden rounded-t-lg bg-white dark:bg-gray-700">
                        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1472&q=80" alt="Technology" class="h-full w-full object-cover object-center transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="p-6 bg-white dark:bg-gray-800">
                        <h3 class="text-lg font-semibold text-indigo-600 dark:text-indigo-400">
                            <a href="#" class="hover:underline">
                                Technology
                            </a>
                        </h3>
                        <p class="mt-2 text-base text-gray-700 dark:text-gray-300">Latest tech trends and innovations that are shaping our future</p>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="text-sm text-gray-500 dark:text-gray-400">42 articles</span>
                            <a href="#" class="text-sm font-medium text-indigo-600 dark:text-indigo-400 hover:text-indigo-500 dark:hover:text-indigo-300">View all →</a>
                        </div>
                    </div>
                </div>

                <!-- Category 2 -->
                <div class="group relative overflow-hidden rounded-2xl shadow-lg transform transition duration-500 hover:scale-105">
                    <div class="relative h-80 w-full overflow-hidden rounded-t-lg bg-white dark:bg-gray-700">
                        <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1473&q=80" alt="Travel" class="h-full w-full object-cover object-center transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="p-6 bg-white dark:bg-gray-800">
                        <h3 class="text-lg font-semibold text-indigo-600 dark:text-indigo-400">
                            <a href="#" class="hover:underline">
                                Travel
                            </a>
                        </h3>
                        <p class="mt-2 text-base text-gray-700 dark:text-gray-300">Explore destinations and adventures around the world</p>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="text-sm text-gray-500 dark:text-gray-400">38 articles</span>
                            <a href="#" class="text-sm font-medium text-indigo-600 dark:text-indigo-400 hover:text-indigo-500 dark:hover:text-indigo-300">View all →</a>
                        </div>
                    </div>
                </div>

                <!-- Category 3 -->
                <div class="group relative overflow-hidden rounded-2xl shadow-lg transform transition duration-500 hover:scale-105">
                    <div class="relative h-80 w-full overflow-hidden rounded-t-lg bg-white dark:bg-gray-700">
                        <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="Food" class="h-full w-full object-cover object-center transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="p-6 bg-white dark:bg-gray-800">
                        <h3 class="text-lg font-semibold text-indigo-600 dark:text-indigo-400">
                            <a href="#" class="hover:underline">
                                Food & Cooking
                            </a>
                        </h3>
                        <p class="mt-2 text-base text-gray-700 dark:text-gray-300">Delicious recipes and culinary adventures from around the globe</p>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="text-sm text-gray-500 dark:text-gray-400">27 articles</span>
                            <a href="#" class="text-sm font-medium text-indigo-600 dark:text-indigo-400 hover:text-indigo-500 dark:hover:text-indigo-300">View all →</a>
                        </div>
                    </div>
                </div>

                <!-- Category 4 -->
                <div class="group relative overflow-hidden rounded-2xl shadow-lg transform transition duration-500 hover:scale-105">
                    <div class="relative h-80 w-full overflow-hidden rounded-t-lg bg-white dark:bg-gray-700">
                        <img src="https://images.unsplash.com/photo-1434494878577-86c23bcb06b9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="Lifestyle" class="h-full w-full object-cover object-center transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="p-6 bg-white dark:bg-gray-800">
                        <h3 class="text-lg font-semibold text-indigo-600 dark:text-indigo-400">
                            <a href="#" class="hover:underline">
                                Lifestyle
                            </a>
                        </h3>
                        <p class="mt-2 text-base text-gray-700 dark:text-gray-300">Tips for a balanced and fulfilling life</p>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="text-sm text-gray-500 dark:text-gray-400">31 articles</span>
                            <a href="#" class="text-sm font-medium text-indigo-600 dark:text-indigo-400 hover:text-indigo-500 dark:hover:text-indigo-300">View all →</a>
                        </div>
                    </div>
                </div>
            </div>