<template>
  <h1>dashboard {{ api_backend_token }}</h1>
  <a href="/categories"> categories</a>

</template>

<script>

export default {
  name: 'dashboard',


  props: {
    api_backend_token: String,
  },

  data() {
    return {};
  },
  computed: {},
  methods: {},

  mounted() {
    localStorage.setItem('api_backend_token', this.$props.api_backend_token);
    if (localStorage.getItem('api_backend_token') === 'undefined') {
      window.location.href = '/login';
    }
  }
}
</script>