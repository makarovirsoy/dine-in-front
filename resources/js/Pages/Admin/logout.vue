<template>
    <div @click="logout()"
        class="p-6 bg-red-300 border-2 border-red-500 rounded-full text-center text-lg text-red-500 hover:bg-red-200  hover:cursor-pointer row-end-1">
      logout
    </div>
</template>

<script>
export default {
  name: 'logout',

  props: {},

  data() {
    return {};
  },

  computed: {},

  methods: {
    logout: function () {
      localStorage.removeItem('api_backend_token');

      window.location.href = '/login';
    }
  },
  mounted() {
  },
};
</script>