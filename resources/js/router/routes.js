import Home from '../pages/Home.vue';
import serdCard from '../components/serdCard.vue';
import psyCard from '../components/psyCard.vue';
import psyMentalHealthDepartment from '../components/psyMentalHealthDepartment.vue';




const routes = [
    {
      path:"/",
      name: "home",
      component: Home,
    },
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
    {
      path:"/test3",
      name: "psyMentalHealthDepartment",
      component: psyMentalHealthDepartment,
    }
];


export default routes;