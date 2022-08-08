import { createRouter, createWebHistory } from 'vue-router'
import MainPageView from '../views/MainPageView.vue'
import EinleitungView from '../views/EinleitungView.vue'
import Wartezimmer from '../views/Wartezimmer.vue'
import Login from '../views/LoginPage.vue'
import Patient from '../views/patients/PatientProfile.vue'
import ErrorPage from "@/views/ErrorPage.vue"


const routes = [
  {
    path: '/', name:'Home', component:Login,meta: {
      title: "Login",
    },
  },
  {
    path: '/login', name:'Login', component:Login,meta: {
      title: "Login",
    },
  },

  {
    path: '/main', name:'MainPageView', component:MainPageView
  },
  {
    path: '/warte',name: 'Wartezimmer',component: Wartezimmer
  },
  {
    path: '/einlei',name: 'EinleitungView',component: EinleitungView
  },
 
  {
    path: '/patients/:id',name: 'Patient',component: Patient, props:true
  },
  
  
  {
    path: "/:catchAll(.*)",
    name: "ErrorPage",
    component: ErrorPage,
    meta: {
      title: "Error",
    },
  },

  
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})
router.beforeEach((to, from, next) => {
  document.title = to.meta.title;
  next();
});

export default router
