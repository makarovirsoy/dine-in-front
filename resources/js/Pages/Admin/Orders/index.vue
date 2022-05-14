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
  },
};
</script>