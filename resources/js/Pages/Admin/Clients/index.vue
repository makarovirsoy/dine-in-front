<template>
  <Layout>
    <slot>
      <div class="ml-20 py-4 flex-grow flex flex-col">
        <h1 class="block mb-4 mx-auto  text-xl font-medium text-cyan-600">Kunden</h1>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-20">
          <table class="w-full text-sm text-left text-gray-500 ">
            <thead class="text-xs text-cyan-500 uppercase bg-cyan-100 ">
            <tr>
              <th scope="col" class="px-6 py-3">
                kunde
              </th>
              <th scope="col" class="px-6 py-3">
                besuche
              </th>
              <th scope="col" class="px-6 py-3 ">
                email
              </th>
            </tr>
            </thead>
            <tbody>
            <tr class="border-b  odd:bg-white even:bg-gray-50 ">
              <th scope="row" class="px-6 py-4 font-medium text-cyan-900 ">
                momo
              </th>
              <td class="px-6 py-4 text-cyan-400">
                40
              </td>
              <td class="px-6 py-4 text-cyan-400">
                kunde@email.ce
              </td>
            </tr>
            </tbody>
          </table>
        </div>
      </div>
    </slot>
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
    if (localStorage.getItem('api_backend_token') === null) {
      window.location.href = '/login';
    }
  },
};
</script>