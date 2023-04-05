import Home from '../pages/Home.vue';
import serdCard from '../components/serdCard.vue';
import psyCard from '../components/psyCard.vue';




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
];


export default routes;