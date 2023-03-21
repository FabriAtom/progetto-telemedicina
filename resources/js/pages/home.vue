<template>
    <div>
        <section>
           <SerdCard/>
        </section>
    </div>
</template>

<script>
import SerdCard from '../components/serdCard.vue';

export default {
    name: 'Home',

    components: { 
        SerdCard,
    },

    data(){
      return{
        title: 'Home Page',
      }
   }
}
</script>

<style lang="scss" scoped>

</style>