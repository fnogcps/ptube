<template>
  <main
    class="mx-auto flex min-h-screen w-full items-center justify-center bg-gray-900 text-white">
    <section class="flex w-[30rem] flex-col space-y-10">
      <!-- <form method="post" @submit.prevent="#"> -->
      <div class="text-center text-4xl font-medium">Update configuration</div>
      <div
        class="w-full transform border-b-2 bg-transparent text-lg duration-300 focus-within:border-indigo-500">
        <input
          type="text"
          placeholder="New name"
          class="w-full border-none bg-transparent outline-none placeholder-italic focus:outline-none" />
      </div>

      <div
        class="w-full transform border-b-2 bg-transparent text-lg duration-300 focus-within:border-indigo-500">
        <input
          type="password"
          placeholder="New password"
          class="w-full border-none bg-transparent outline-none placeholder-italic focus:outline-none" />
      </div>

      <button
        class="transform rounded-sm bg-indigo-600 py-2 font-bold duration-300 hover:bg-indigo-400"
        @click="login">
        Update
      </button>

      <p class="text-center text-lg">
        Don't want to edit?
        <router-link
          to="/home"
          class="font-medium text-indigo-500 underline-offset-4 hover:underline">
          Home
        </router-link>
      </p>
      <!-- </form> -->
    </section>
  </main>
</template>
