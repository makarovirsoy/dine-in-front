<template>
  <nav class="bg-cyan-400 p-4 flex flex-row justify-around">
    <div>Administration</div>
    <div>Home</div>
  </nav>
  <div class="grid grid-cols-10 grid-rows-none h-screen">
    <div class="w-64 col-span-2 mt-12 mx-auto ">
      <a href="/orders">
        <div
            class="mb-6 p-6 bg-purple-300 border-2 border-purple-500 rounded-full text-center text-lg text-purple-500 hover:bg-purple-200  hover:cursor-pointer">
          Bestellungen
        </div>
      </a>


      <a href="/categories">
        <div
            class="mb-6 p-6 bg-fuchsia-300 border-2 border-fuchsia-500 rounded-full text-center text-lg hover:bg-fuchsia-200  hover:cursor-pointer">
          Kategorien
        </div>
      </a>

      <a href="/dishes">
        <div
            class="mb-6 p-6 bg-emerald-300 border-2 border-emerald-500 rounded-full text-center text-lg hover:bg-emerald-200  hover:cursor-pointer">
          Speisen
        </div>
      </a>


      <a href="/clients">
        <div
            class="mb-6 p-6 bg-cyan-300 border-2 border-cyan-500 rounded-full text-center text-lg hover:bg-cyan-200  hover:cursor-pointer">
          Kunden
        </div>
      </a>


      <logout/>
    </div>

    <div class=" m-12 col-span-8 ">
      <div class="border border-gray-800 rounded-2xl p-4 ">
        <slot />
      </div>
    </div>
  </div>
</template>

<script>
import Logout from "./logout";

export default {
  name: 'skeleton',
  components: {Logout},
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