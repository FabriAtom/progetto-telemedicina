<template>
  <div>
    <!-- il router view monta il componente Home.vue -->
    <!-- rotta percorso e path sono in routes -->

    <router-view></router-view>

    <div>
      <psyCard/>
      <serdCard/>
    </div>
    
  </div>
</template>

<script>
import Home from '../pages/Home.vue';
import psyCard from '../components/psyCard.vue';
import serdCard from '../components/serdCard.vue';

export default {
  components: { 
    serdCard, 
    Home,
    psyCard
  }
}
</script>

<style lang="scss" scoped>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
</style>