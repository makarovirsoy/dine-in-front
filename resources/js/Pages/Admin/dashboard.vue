<template>
  <Layout>
    <slot>
      <div class="ml-20 py-4 flex-grow ">

        <div class="grid grid-cols-2 justify-around">
          <div
              class="p-6 rounded-lg border-l-8 border-green-300 border border-green-400 shadow-xl bg-green-300 text-gray-900 m-auto my-10 w-1/2">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-800">{{ this.$props.sales }} €</h5>
            <p class="mb-3 font-normal text-gray-700">Umsatz</p>
          </div>

          <div
              class="p-6 rounded-lg border-l-8 border-blue-300 border border-blue-400 shadow-xl bg-blue-300 text-gray-900 m-auto my-10 w-1/2">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-800">{{ this.$props.ordersToday }}</h5>
            <p class="mb-3 font-normal text-gray-700">bestellungen heute</p>
          </div>

          <div
              class="p-6   rounded-lg border-l-8 border-orange-300 border border-orange-400 shadow-xl bg-orange-300 text-gray-900 m-auto my-10 w-1/2">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-800">{{ this.$props.openOrders }}</h5>
            <p class="mb-3 font-normal text-gray-700">Neue Bestellungen</p>
          </div>

          <div
              class="p-6   rounded-lg border-l-8 border-red-300 border border-red-400 shadow-xl bg-red-300 text-gray-900 m-auto my-10 w-1/2">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-800">{{ this.$props.operBills }}</h5>
            <p class="mb-3 font-normal text-gray-700">Offene Rechungen</p>
          </div>
        </div>
      </div>
    </slot>
  </Layout>
</template>

<script>
import Layout from "./layout";

export default {
  name: 'dashboard',
  components: {Layout},
  props: {
    sales: Number,
    openOrders: Number,
    ordersToday: Number,
    operBills: Number,
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