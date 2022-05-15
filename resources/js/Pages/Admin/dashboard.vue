<template>
  <Layout>
    <slot>dashboard
    </slot>
    </Layout>
</template>

<script>
import Layout from "./layout";

export default {
  name: 'dashboard',
  components: {Layout},
  props: {
  },

  data() {
    return {};
  },
  computed: {},
  methods: {},

  mounted() {
    console.log(localStorage.getItem('api_backend_token'));
    if (localStorage.getItem('api_backend_token') === null) {
      window.location.href = '/login';
    }
  }
}
</script>