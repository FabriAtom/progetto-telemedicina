import Home from '../pages/Home.vue';
import serdCard from '../components/serdCard.vue';


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
    }
];


export default routes;