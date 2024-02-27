<template>
  <main class="mx-auto flex min-h-screen w-full items-center justify-center bg-gray-900 text-white">
    <section class="flex w-[30rem] flex-col space-y-10">
      <!-- <form method="post" @submit.prevent="#"> -->
      <div class="text-center text-4xl font-medium">Register</div>

      <div class="w-full transform border-b-2 bg-transparent text-lg duration-300 focus-within:border-indigo-500">
        <input
          type="text"
          placeholder="User"
          class="w-full border-none bg-transparent outline-none placeholder-italic focus:outline-none"
        />
      </div>

      <div class="w-full transform border-b-2 bg-transparent text-lg duration-300 focus-within:border-indigo-500">
        <input
          type="text"
          placeholder="Name"
          class="w-full border-none bg-transparent outline-none placeholder-italic focus:outline-none"
        />
      </div>

      <div class="w-full transform border-b-2 bg-transparent text-lg duration-300 focus-within:border-indigo-500">
        <input
          type="password"
          placeholder="Password"
          class="w-full border-none bg-transparent outline-none placeholder-italic focus:outline-none"
        />
      </div>

      <button
        class="transform rounded-sm bg-indigo-600 py-2 font-bold duration-300 hover:bg-indigo-400"
        @click="login"
      >
        Register
      </button>

      <p class="text-center text-lg">
          You already have an account
        <router-link to="/login" class="font-medium text-indigo-500 underline-offset-4 hover:underline">
          Log in
        </router-link>
      </p>
    <!-- </form> -->
    </section>
  </main>
</template>
