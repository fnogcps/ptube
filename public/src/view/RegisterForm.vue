<script>
  import API from "../API";
  const api = new API();

  export default {
    data() {
      return {};
    },
    methods: {
      register() {
        const formElement = this.$refs.RegisterForm;
        const data = new FormData(formElement);
        api
          .createUser(data)
          .then(() => {
            formElement.reset();
            this.$router.push("/login");
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
    <form
      ref="RegisterForm"
      class="flex w-[30rem] flex-col space-y-10"
      method="post"
      @submit.prevent="register">
      <div class="text-center text-4xl font-medium">Register</div>

      <div
        class="w-full transform border-b-2 bg-transparent text-lg duration-300 focus-within:border-indigo-500">
        <input
          id="user"
          type="text"
          placeholder="User"
          name="user"
          class="w-full border-none bg-transparent outline-none placeholder-italic focus:outline-none" />
      </div>

      <div
        class="w-full transform border-b-2 bg-transparent text-lg duration-300 focus-within:border-indigo-500">
        <input
          id="name"
          type="text"
          placeholder="Name"
          name="name"
          class="w-full border-none bg-transparent outline-none placeholder-italic focus:outline-none" />
      </div>

      <div
        class="w-full transform border-b-2 bg-transparent text-lg duration-300 focus-within:border-indigo-500">
        <input
          id="password"
          type="password"
          placeholder="Password"
          name="password"
          class="w-full border-none bg-transparent outline-none placeholder-italic focus:outline-none" />
      </div>

      <button
        class="transform rounded-sm bg-indigo-600 py-2 font-bold duration-300 hover:bg-indigo-400"
        @click="login">
        Register
      </button>

      <p class="text-center text-lg">
        You already have an account
        <router-link
          to="/login"
          class="font-medium text-indigo-500 underline-offset-4 hover:underline">
          Log in
        </router-link>
      </p>
    </form>
  </main>
</template>
