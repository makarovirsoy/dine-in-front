<template>
  <form @submit.prevent="login">
    <div class="flex h-screen justify-center">
      <div class="bg-white shadow-md rounded px-8 pt-6 pb-8  flex flex-col m-auto w-1/4">
        <div class="mb-4">
          <label class="block text-grey-darker text-sm font-bold mb-2" for="username">
            Username
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="username"
                 type="text"
                 v-model="username"
                 placeholder="Username" required>
        </div>
        <div class="mb-6">
          <label class="block text-grey-darker text-sm font-bold mb-2" for="password">
            Password
          </label>
          <input class="shadow appearance-none border border-red rounded w-full py-2 px-3 text-grey-darker mb-3"
                 id="password"
                 type="password"
                 v-model="password"
                 placeholder="******************"
                 required>
        </div>

        <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 rounded" type="submit"
                @click="login()">
          Sign In
        </button>

      </div>
    </div>

  </form>
</template>

<script>
export default {

  name: 'login',
  props: {},

  data() {
    return {
      username: 'yosri',
      password: 'yosri',
    }
  },

  computed: {},

  methods: {
    login: function () {
      this.$inertia.post('login', {
        "username": this.username,
        "password": this.password
      })
    }
  },

  mounted() {
  },
};
</script>