<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A modern blog platform with insightful content across various categories">
    <title>BlogHub - Your Source for Inspiring Content</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="antialiased bg-gray-50 dark:bg-gray-900 font-sans">
    <!-- Navigation -->
    <nav class="bg-white dark:bg-gray-800 shadow-sm fixed w-full z-10 transition-all duration-300">
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
                            <a href="#" class="text-gray-500 dark:text-gray-300 hover:text-gray-700 dark:hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200">Login</a>
                            <a href="#" class="bg-indigo-600 text-white hover:bg-indigo-700 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200 shadow-sm hover:shadow-md">Register</a>
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
        <div class="sm:hidden hidden" id="mobile-menu">
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

    <!-- Hero Section -->
    <div class="relative pt-16 pb-32 flex content-center items-center justify-center" style="min-height: 85vh;">
        <div class="absolute top-0 w-full h-full bg-center bg-cover" style="background-image: url('https://images.unsplash.com/photo-1499750310107-5fef28a66643?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80');">
            <span id="blackOverlay" class="w-full h-full absolute opacity-60 bg-black"></span>
        </div>
        <div class="container relative mx-auto">
            <div class="items-center flex flex-wrap">
                <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                    <div class="">
                        <h1 class="text-white font-bold text-5xl md:text-6xl mb-6 animate-fade-in-up">
                            Discover Inspiring Stories
                        </h1>
                        <p class="mt-4 text-lg text-gray-200 animate-fade-in-up animation-delay-200">
                            Explore a world of knowledge, insights, and creativity through our carefully curated blog posts.
                        </p>
                        <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center animate-fade-in-up animation-delay-400">
                            <a href="#" class="px-8 py-3 bg-indigo-600 text-white font-medium text-base leading-tight rounded-lg shadow-md hover:bg-indigo-700 hover:shadow-lg focus:bg-indigo-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-indigo-800 active:shadow-lg transition duration-150 ease-in-out">
                                Start Reading
                            </a>
                            <a href="#" class="px-8 py-3 bg-transparent border border-white text-white font-medium text-base leading-tight rounded-lg hover:bg-white hover:text-indigo-700 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 right-0">
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                </g>
            </svg>
        </div>
    </div>

    <!-- Featured Categories Section -->
    <section class="py-16 bg-white dark:bg-gray-800">
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
        </div>
    </section>

    <!-- Featured Posts Section -->
    <section class="py-16 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                    Featured Posts
                </h2>
                <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-500 dark:text-gray-300 sm:mt-4">
                    Discover our most popular and trending articles
                </p>
            </div>

            <div class="mt-12 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                <!-- Post 1 -->
                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl bg-white dark:bg-gray-800">
                    <div class="flex-shrink-0">
                        <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">
                    </div>
                    <div class="flex-1 p-6 flex flex-col justify-between">
                        <div class="flex-1">
                            <p class="text-sm font-medium text-indigo-600 dark:text-indigo-400">
                                <a href="#" class="hover:underline">Technology</a>
                            </p>
                            <a href="#" class="block mt-2">
                                <p class="text-xl font-semibold text-gray-900 dark:text-white">The Future of Web Development: Trends to Watch in 2023</p>
                                <p class="mt-3 text-base text-gray-500 dark:text-gray-300">Explore the cutting-edge technologies and methodologies that are reshaping how we build for the web.</p>
                            </a>
                        </div>
                        <div class="mt-6 flex items-center">
                            <div class="flex-shrink-0">
                                <span class="sr-only">Author</span>
                                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900 dark:text-white">
                                    <a href="#" class="hover:underline">John Smith</a>
                                </p>
                                <div class="flex space-x-1 text-sm text-gray-500 dark:text-gray-400">
                                    <time datetime="2023-03-16">Mar 16, 2023</time>
                                    <span aria-hidden="true">&middot;</span>
                                    <span>6 min read</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Post 2 -->
                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl bg-white dark:bg-gray-800">
                    <div class="flex-shrink-0">
                        <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1501785888041-af3ef285b470?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">
                    </div>
                    <div class="flex-1 p-6 flex flex-col justify-between">
                        <div class="flex-1">
                            <p class="text-sm font-medium text-indigo-600 dark:text-indigo-400">
                                <a href="#" class="hover:underline">Travel</a>
                            </p>
                            <a href="#" class="block mt-2">
                                <p class="text-xl font-semibold text-gray-900 dark:text-white">Hidden Gems: 10 Underrated Destinations You Need to Visit</p>
                                <p class="mt-3 text-base text-gray-500 dark:text-gray-300">Discover breathtaking locations off the beaten path that offer authentic experiences away from tourist crowds.</p>
                            </a>
                        </div>
                        <div class="mt-6 flex items-center">
                            <div class="flex-shrink-0">
                                <span class="sr-only">Author</span>
                                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900 dark:text-white">
                                    <a href="#" class="hover:underline">Emily Johnson</a>
                                </p>
                                <div class="flex space-x-1 text-sm text-gray-500 dark:text-gray-400">
                                    <time datetime="2023-02-22">Feb 22, 2023</time>
                                    <span aria-hidden="true">&middot;</span>
                                    <span>8 min read</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Post 3 -->
                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl bg-white dark:bg-gray-800">
                    <div class="flex-shrink-0">
                        <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1484723091739-30a097e8f929?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">
                    </div>
                    <div class="flex-1 p-6 flex flex-col justify-between">
                        <div class="flex-1">
                            <p class="text-sm font-medium text-indigo-600 dark:text-indigo-400">
                                <a href="#" class="hover:underline">Food & Cooking</a>
                            </p>
                            <a href="#" class="block mt-2">
                                <p class="text-xl font-semibold text-gray-900 dark:text-white">Seasonal Cooking: Making the Most of Spring Ingredients</p>
                                <p class="mt-3 text-base text-gray-500 dark:text-gray-300">Learn how to create delicious, nutritious meals using fresh spring produce from local farmers' markets.</p>
                            </a>
                        </div>
                        <div class="mt-6 flex items-center">
                            <div class="flex-shrink-0">
                                <span class="sr-only">Author</span>
                                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900 dark:text-white">
                                    <a href="#" class="hover:underline">Michael Chen</a>
                                </p>
                                <div class="flex space-x-1 text-sm text-gray-500 dark:text-gray-400">
                                    <time datetime="2023-04-05">Apr 5, 2023</time>
                                    <span aria-hidden="true">&middot;</span>
                                    <span>5 min read</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-12 text-center">
                <a href="#" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    View All Posts
                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 -mr-1 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-16 bg-indigo-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:flex lg:items-center lg:justify-between">
                <div class="lg:w-1/2">
                    <h2 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                        Stay Updated
                    </h2>
                    <p class="mt-3 max-w-3xl text-lg text-indigo-100">
                        Subscribe to our newsletter to receive the latest updates, featured posts, and exclusive content directly in your inbox.
                    </p>
                </div>
                <div class="mt-8 lg:mt-0 lg:w-1/2">
                    <form class="sm:flex">
                        <label for="email-address" class="sr-only">Email address</label>
                        <input id="email-address" name="email" type="email" autocomplete="email" required class="w-full px-5 py-3 placeholder-gray-500 focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-700 focus:ring-white focus:border-white sm:max-w-xs rounded-md" placeholder="Enter your email">
                        <div class="mt-3 rounded-md sm:mt-0 sm:ml-3 sm:flex-shrink-0">
                            <button type="submit" class="w-full bg-white border border-transparent rounded-md py-3 px-5 flex items-center justify-center text-base font-medium text-indigo-600 hover:bg-indigo-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-700 focus:ring-white sm:w-auto">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white dark:bg-gray-800">
        <div class="max-w-7xl mx-auto py-12 px-4 overflow-hidden sm:px-6 lg:px-8">
            <nav class="-mx-5 -my-2 flex flex-wrap justify-center" aria-label="Footer">
                <div class="px-5 py-2">
                    <a href="#" class="text-base text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-300">About</a>
                </div>
                <div class="px-5 py-2">
                    <a href="#" class="text-base text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-300">Blog</a>
                </div>
                <div class="px-5 py-2">
                    <a href="#" class="text-base text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-300">Categories</a>
                </div>
                <div class="px-5 py-2">
                    <a href="#" class="text-base text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-300">Contact</a>
                </div>
                <div class="px-5 py-2">
                    <a href="#" class="text-base text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-300">Terms</a>
                </div>
                <div class="px-5 py-2">
                    <a href="#" class="text-base text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-300">Privacy</a>
                </div>
            </nav>
            <div class="mt-8 flex justify-center space-x-6">
                <a href="#" class="text-gray-400 hover:text-gray-500 dark:hover:text-gray-300">
                    <span class="sr-only">Facebook</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500 dark:hover:text-gray-300">
                    <span class="sr-only">Instagram</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500 dark:hover:text-gray-300">
                    <span class="sr-only">Twitter</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                    </svg>
                </a>
            </div>
            <p class="mt-8 text-center text-base text-gray-500 dark:text-gray-400">&copy; 2023 BlogHub, Inc. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Simple JavaScript for mobile menu toggle
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.querySelector('[aria-controls="mobile-menu"]');
            const mobileMenu = document.getElementById('mobile-menu');
            
            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', function() {
                    const expanded = this.getAttribute('aria-expanded') === 'true';
                    this.setAttribute('aria-expanded', !expanded);
                    mobileMenu.classList.toggle('hidden');
                });
            }
        });
    </script>
</body>
</html>