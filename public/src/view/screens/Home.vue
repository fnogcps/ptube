<template>
    <div
        class="antialiased bg-gray-900 w-full min-h-screen text-slate-300 relative py-4">
        <div
            class="grid grid-cols-12 mx-auto gap-2 sm:gap-4 md:gap-6 lg:gap-10 xl:gap-14 max-w-7xl my-10 px-2">
            <div id="menu" class="bg-white/10 col-span-3 rounded-lg p-4">
                <h1
                    class="font-bold text-lg lg:text-3xl bg-gradient-to-br from-white via-white/50 to-transparent bg-clip-text text-transparent">
                    Home<span class="text-indigo-400">.</span>
                </h1>
                <p class="text-slate-400 text-sm mb-2">Welcome</p>
                <a
                    href="#"
                    class="flex flex-col space-y-2 md:space-y-0 md:flex-row mb-5 items-center md:space-x-2 hover:bg-white/10 group transition duration-150 ease-linear rounded-lg group w-full py-3 px-2">
                    <div>
                        <img
                            class="rounded-full w-10 h-10 relative object-cover"
                            src="https://img.freepik.com/free-photo/no-problem-concept-bearded-man-makes-okay-gesture-has-everything-control-all-fine-gesture-wears-spectacles-jumper-poses-against-pink-wall-says-i-got-this-guarantees-something_273609-42817.jpg?w=1800&t=st=1669749937~exp=1669750537~hmac=4c5ab249387d44d91df18065e1e33956daab805bee4638c7fdbf83c73d62f125"
                            alt="" />
                    </div>
                    <div>
                        <p
                            class="font-medium group-hover:text-indigo-400 leading-4">
                            Name Lorem
                        </p>
                    </div>
                </a>
                <hr class="my-2 border-slate-700" />
                <div id="menu" class="flex flex-col space-y-2 my-5">
                    <router-link
                        to="/home"
                        class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
                        <div
                            class="flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                            <div>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="w-6 h-6 group-hover:text-indigo-400">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                </svg>
                            </div>
                            <div>
                                <p
                                    class="font-bold text-base lg:text-lg text-slate-200 leading-4 group-hover:text-indigo-400">
                                    Dashboard
                                </p>
                                <p
                                    class="text-slate-400 text-sm hidden md:block">
                                    Data overview
                                </p>
                            </div>
                        </div>
                    </router-link>
                    <router-link
                        to="#todo_myvideos"
                        class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
                        <div
                            class="relative flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                            <div>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="w-6 h-6 group-hover:text-indigo-400">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                </svg>
                            </div>
                            <div>
                                <p
                                    class="font-bold text-base lg:text-lg text-slate-200 leading-4 group-hover:text-indigo-400">
                                    My videos
                                </p>
                                <p
                                    class="text-slate-400 text-sm hidden md:block">
                                    Manage videos
                                </p>
                            </div>
                            <div
                                class="absolute -top-3 -right-3 md:top-0 md:right-0 px-2 py-1.5 rounded-full bg-indigo-800 text-xs font-mono font-bold">
                                videos 23
                            </div>
                        </div>
                    </router-link>
                    <router-link
                        to="#todo_updatesettings"
                        class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
                        <div
                            class="flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                            <div>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="w-6 h-6 group-hover:text-indigo-400">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <p
                                    class="font-bold text-base lg:text-lg text-slate-200 leading-4 group-hover:text-indigo-400">
                                    Settings
                                </p>
                                <p
                                    class="text-slate-400 text-sm hidden md:block">
                                    Edit settings
                                </p>
                            </div>
                        </div>
                    </router-link>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 md:col-span-3">
                <card class="w-full flex flex-col">
                    <div class="relative">
                        <!-- Image Video -->
                        <a href="#">
                            <img
                                src="https://picsum.photos/seed/59/300/200"
                                class="w-96 h-auto" />
                        </a>

                        <p
                            class="absolute right-2 bottom-2 bg-gray-900 text-gray-100 text-xs px-1 py">
                            1:15
                        </p>
                    </div>

                    <div class="flex flex-row mt-2 gap-2">
                        <!-- Profile Picture -->
                        <a href="#">
                            <img
                                src="https://picsum.photos/seed/1/40/40"
                                class="rounded-full max-h-10 max-w-10" />
                        </a>

                        <!-- Description -->
                        <div clas="flex flex-col">
                            <a href="#">
                                <p class="text-gray-100 text-sm font-semibold">
                                    Learn CSS Box Model in 8 Minutes
                                </p>
                            </a>
                            <a
                                class="text-gray-400 text-xs mt-2 hover:text-gray-100"
                                href="#">
                                Web Dev Simplified
                            </a>
                            <p class="text-gray-400 text-xs mt-1">
                                241K views . 3 years ago
                            </p>
                        </div>
                    </div>
                </card>
            </div>

            <!-- Video 2 -->
            <div class="col-span-12 sm:col-span-6 md:col-span-3">
                <card class="w-full flex flex-col">
                    <div class="relative">
                        <!-- Image Video -->
                        <a href="#">
                            <img
                                src="https://picsum.photos/seed/60/300/200"
                                class="w-96 h-auto" />
                        </a>

                        <p
                            class="absolute right-2 bottom-2 bg-gray-900 text-gray-100 text-xs px-1 py">
                            1:15
                        </p>
                    </div>

                    <div class="flex flex-row mt-2 gap-2">
                        <!-- Profile Picture -->
                        <a href="#">
                            <img
                                src="https://picsum.photos/seed/4/40/40"
                                class="rounded-full max-h-10 max-w-10" />
                        </a>

                        <!-- Description -->
                        <div clas="flex flex-col">
                            <a href="#">
                                <p class="text-gray-100 text-sm font-semibold">
                                    Learn CSS Box Model in 8 Minutes
                                </p>
                            </a>
                            <a
                                class="text-gray-400 text-xs mt-2 hover:text-gray-100"
                                href="#">
                                Web Dev Simplified
                            </a>
                            <p class="text-gray-400 text-xs mt-1">
                                241K views . 3 years ago
                            </p>
                        </div>
                    </div>
                </card>
            </div>

            <!-- Video 3 -->
            <div class="col-span-12 sm:col-span-6 md:col-span-3">
                <card class="w-full flex flex-col">
                    <div class="relative">
                        <!-- Image Video -->
                        <a href="#">
                            <img
                                src="https://picsum.photos/seed/22/300/200"
                                class="w-96 h-auto" />
                        </a>

                        <p
                            class="absolute right-2 bottom-2 bg-gray-900 text-gray-100 text-xs px-1 py">
                            1:15
                        </p>
                    </div>

                    <div class="flex flex-row mt-2 gap-2">
                        <!-- Profile Picture -->
                        <a href="#">
                            <img
                                src="https://picsum.photos/seed/88/40/40"
                                class="rounded-full max-h-10 max-w-10" />
                        </a>

                        <!-- Description -->
                        <div clas="flex flex-col">
                            <a href="#">
                                <p class="text-gray-100 text-sm font-semibold">
                                    Learn CSS Box Model in 8 Minutes
                                </p>
                            </a>
                            <a
                                class="text-gray-400 text-xs mt-2 hover:text-gray-100"
                                href="#">
                                Web Dev Simplified
                            </a>
                            <p class="text-gray-400 text-xs mt-1">
                                241K views . 3 years ago
                            </p>
                        </div>
                    </div>
                </card>
            </div>

            <!-- Video 4 -->
            <div class="col-span-12 sm:col-span-6 md:col-span-3">
                <card class="w-full flex flex-col">
                    <div class="relative">
                        <!-- Image Video -->
                        <a href="#">
                            <img
                                src="https://picsum.photos/seed/90/300/200"
                                class="w-96 h-auto" />
                        </a>

                        <p
                            class="absolute right-2 bottom-2 bg-gray-900 text-gray-100 text-xs px-1 py">
                            1:15
                        </p>
                    </div>

                    <div class="flex flex-row mt-2 gap-2">
                        <!-- Profile Picture -->
                        <a href="#">
                            <img
                                src="https://picsum.photos/seed/57/40/40"
                                class="rounded-full max-h-10 max-w-10" />
                        </a>

                        <!-- Description -->
                        <div clas="flex flex-col">
                            <a href="#">
                                <p class="text-gray-100 text-sm font-semibold">
                                    Learn CSS Box Model in 8 Minutes
                                </p>
                            </a>
                            <a
                                class="text-gray-400 text-xs mt-2 hover:text-gray-100"
                                href="#">
                                Web Dev Simplified
                            </a>
                            <p class="text-gray-400 text-xs mt-1">
                                241K views . 3 years ago
                            </p>
                        </div>
                    </div>
                </card>
            </div>
        </div>
    </div>
</template>
