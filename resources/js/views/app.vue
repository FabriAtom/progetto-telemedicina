<template>
  <div>
    <!-- il router view monta il componente Home.vue -->
    <!-- rotta percorso e path sono in routes -->
    <router-view></router-view>
    <!-- <section>

      <h1>questo è il titolo {{ title }}</h1>
    </section> -->
  </div>
</template>

<script>
  // import PostCard from '../components/PostCard.vue'
  export default {
    // components: {
    // },
    data() {
      return {
        title : 'ciao',
      }
    },
    methods: {
    }
  }
</script>

<style>

</style>