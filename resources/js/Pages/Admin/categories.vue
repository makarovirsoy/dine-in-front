<template>
  <p>token : {{ this.$data.api_backend_token }}</p>
</template>

<script>
export default {
  name: 'categories',

  props: {},

  data() {
    return {
      api_backend_token: localStorage.getItem('api_backend_token')
    };
  },

  computed: {},

  methods: {},

  mounted() {
  },
};
</script>