<template>
  <button @click="logout()">Logout</button>
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