<script>
  import API from "../../API";
  const api = new API();

  export default {
    data() {
      return {};
    },
    methods: {
      update() {
        const formElement = this.$refs.UpdateForm;
        const data = new FormData(formElement);
        api
          .updateUser(data)
          .then(() => {
            formElement.reset();
            this.$router.push("/register/update");
          })
          .catch(() => {
            alert("An unexpected error has occurred.");
            localStorage.clear();
            this.$router.push("/register");
          });
      }
    }
  };
</script>

<template>
  <main
    class="mx-auto flex min-h-screen w-full items-center justify-center bg-gray-900 text-white">
    <section class="flex w-[30rem] flex-col space-y-10">
      <!-- <form method="post" @submit.prevent="#"> -->
      <form
        ref="UpdateForm"
        class="flex w-[30rem] flex-col space-y-10"
        method="post"
        @submit.prevent="update">
        <div class="text-center text-4xl font-medium">Update configuration</div>
        <div
          class="w-full transform border-b-2 bg-transparent text-lg duration-300 focus-within:border-indigo-500">
          <input
            id="new_name"
            name="new_name"
            type="text"
            placeholder="New name"
            class="w-full border-none bg-transparent outline-none placeholder-italic focus:outline-none" />
        </div>

        <div
          class="w-full transform border-b-2 bg-transparent text-lg duration-300 focus-within:border-indigo-500">
          <input
            id="new_password"
            name="new_password"
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
      </form>
    </section>
  </main>
</template>
