<template>
</template>

<script>
export default {

  name: 'loginsuccess',
  props: {
    api_backend_token: String,
  },

  data() {
    return {}
  },

  computed: {},

  methods: {},

  mounted() {
    localStorage.setItem('api_backend_token', this.$props.api_backend_token);
    if (localStorage.getItem('api_backend_token') === 'undefined') {
      window.location.href = '/login';
    }
    window.location.href = '/dashboard';
  },
};
</script>