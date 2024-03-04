<template>
  <main class="font-medium bg-gray-900 text-white">
    <!-- header block -->
    <div class="bg-gray-900 text-white">
      <header
        class="flex justify-between max-w-screen-xl px-6 py-4 mx-auto lg:px-8 xl:px-4 lg:py-6">
        <a href="#">
          <span class="sr-only">ptube</span>
          <img src="../../public/favicon/apple-touch-icon.png" alt="" />
        </a>
        <nav class="flex items-center space-x-4">
          <router-link
            to="/register"
            class="flex items-center space-x-1 hover:text-white">
            <svg
              class="hidden w-5 h-5 sm:inline"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
            <span>Sign up</span>
          </router-link>
          <router-link
            to="/login"
            class="inline-block px-5 py-2 font-semibold text-white rounded-lg bg-gradient-to-br from-indigo-600 to-indigo-700 hover:from-indigo-500 hover:to-indigo-700">
            Log in
          </router-link>
        </nav>
      </header>
    </div>
    <!--/ header block -->
    <div class="py-12 md:py-24 bg-gray-900">
      <div
        class="grid max-w-screen-xl px-6 mx-auto lg:px-8 xl:px-4 md:grid-cols-4 xl:grid-cols-5 gap-x-12 lg:gap-x-20">
        <div class="self-center order-2 col-span-2 mt-12 md:order-1 md:mt-0">
          <h1
            class="mb-2 text-3xl font-bold text-white md:text-4xl lg:text-5xl md:mb-4 lg:mb-8">
            Lorem ipsum dolor sit amet
          </h1>
          <p class="mb-6 text-lg text-gray-200 xl:text-xl lg:mb-8 xl:mb-10">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. dokawod
            doawkdoa dwaojdi jwai ja
          </p>
          <div class="flex mb-6 space-x-4">
            <router-link
              to="/home"
              class="inline-block px-5 py-2 font-semibold text-white rounded-lg focus:outline-none bg-gradient-to-br from-indigo-600 to-indigo-700 hover:from-indigo-500 hover:to-indigo-700">
              Watch anyway
            </router-link>
          </div>

          <div class="flex mb-6 space-x-4"></div>
          <p class="text-sm text-gray-400">
            Created by ->
            <a
              target="_blank"
              href="https://github.com/fnogcps"
              class="border-b border-gray-200"
              >fnogcps</a
            >
            and
            <a
              target="_blank"
              href="https://github.com/odmrs"
              class="border-b border-gray-200"
              >odmrs</a
            >
          </p>
        </div>
      </div>
    </div>
  </main>
</template>
