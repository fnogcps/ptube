<script>
  import API from "../API";
  const api = new API();

  export default {
    data() {
      return {};
    },
    methods: {
      login() {
        const formElement = this.$refs.LoginForm;
        const data = new FormData(formElement);
        api
          .signIn(data)
          .then(() => {
            formElement.reset();
            this.$router.push("/home");
          })
          .catch(() => {
            alert("An unexpected error has occurred.");
            localStorage.clear();
            this.$router.push("/login");
          });
      }
    }
  };
</script>

<template>
  <main
    class="mx-auto flex min-h-screen w-full items-center justify-center bg-gray-900 text-white">
    <section class="flex w-[30rem] flex-col space-y-10">
      <form
        ref="LoginForm"
        class="flex w-[30rem] flex-col space-y-10"
        method="post"
        @submit.prevent="login">
        <div class="text-center text-4xl font-medium">Log in</div>

        <div
          class="w-full transform border-b-2 bg-transparent text-lg duration-300 focus-within:border-indigo-500">
          <input
            id="user"
            type="text"
            placeholder="Username"
            name="user"
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
          LOG IN
        </button>

        <router-link
          to="/forgot"
          class="transform text-center font-semibold text-gray-500 duration-300 hover:text-gray-300">
          FORGOT PASSWORD?
        </router-link>

        <p class="text-center text-lg">
          No account?
          <router-link
            to="/register"
            class="font-medium text-indigo-500 underline-offset-4 hover:underline">
            Create One
          </router-link>
        </p>
      </form>
    </section>
  </main>
</template>
