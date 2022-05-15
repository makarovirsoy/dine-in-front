<template>
  <Layout>
    <slots>

      <div class="ml-20 py-4 flex-grow flex flex-col">

        <a type="button" href="/categories/create"
           class="mx-20 mb-10 text-white bg-fuchsia-500 hover:bg-fuchsia-400 focus:ring-4 focus:outline-none focus:ring-fuchsia-600 font-medium rounded-full text-base px-6 py-4 text-center ">
          Karegorie Hinzufügen
        </a>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-20">
          <table class="w-full text-sm text-left text-gray-500 ">
            <thead class="text-xs text-fuchsia-500 uppercase bg-fuchsia-100 ">
            <tr>
              <th scope="col" class="px-6 py-3">
                Kategorien
              </th>
              <th scope="col" class="px-6 py-3">
                id
              </th>
              <th scope="col" class="px-6 py-3 ">
                Bearbeiten
              </th>
              <th scope="col" class="px-6 py-3 ">
                Löschen
              </th>
            </tr>
            </thead>
            <tbody>

            <tr class="border-b  odd:bg-white even:bg-gray-50 ">
              <th scope="row" class="px-6 py-4 font-medium text-fuchsia-900 ">
                getränke
              </th>
              <td class="px-6 py-4 text-fuchsia-400">
                40
              </td>
              <td class="px-6 py-4 text-left">

                <a href="/categories/edit" class="font-medium text-green-600  hover:underline">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                       stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                  </svg>
                </a>
              </td>
              <td class="px-6 py-4 text-left">
                <form method="POST" action="/categories/6">
                  <input type="hidden" name="_method" value="delete" />
                  <button type="submit" class="font-medium text-red-600  hover:underline">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                    </svg>
                  </button>
                </form>
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
    </slots>
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