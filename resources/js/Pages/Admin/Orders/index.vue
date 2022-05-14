<template>
  <Layout>
  <slot>orders</slot>
  </Layout>
</template>

<script>
import Layout from "../layout";


export default {
  name: 'index',
  components: {Layout},
  props: {},

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
  },

};
</script>