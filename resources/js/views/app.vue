<template>
  <div>
    <!-- il router view monta il componente Home.vue -->
    <!-- rotta percorso e path sono in routes -->

    <router-view></router-view>

    <div>
      <psyCard/>
      <PsyRehabilitationPsychiatricCard/>
      <!-- <serdCard/> -->
      <psyMentalHealthDepartment/>
    </div>
    
  </div>
</template>

<script>
// import Home from '../pages/Home.vue';
import psyCard from '../components/psyCard.vue';
// import serdCard from '../components/serdCard.vue';
import psyMentalHealthDepartment from '../components/psyMentalHealthDepartment.vue';
import PsyRehabilitationPsychiatricCard from '../components/PsyRehabilitationPsychiatricCard.vue';

export default {
  components: { 
    // serdCard, 
    // Home,
    psyCard,
    psyMentalHealthDepartment,
    PsyRehabilitationPsychiatricCard
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