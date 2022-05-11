<template>
  <h1>dashboard {{ api_backend_token }}</h1>
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
    localStorage.setItem('api_backend_token', this.api_backend_token);
  },
};
</script>