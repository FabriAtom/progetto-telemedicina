import serdCard from '../components/serdCard.vue';
import psyCard from '../components/psyCard.vue';
// import psyMentalHealthDepartment from '../components/psyMentalHealthDepartment.vue';





const routes = [
    {
      path:"/test",
      name: "serdCard",
      component: serdCard,
    },
    {
      path:"/test2",
      name: "psyCard",
      component: psyCard,
    },
 
];


export default routes;