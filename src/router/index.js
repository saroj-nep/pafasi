import { createRouter, createWebHistory } from 'vue-router'
import MainPageView from '../views/MainPageView.vue'
import EinleitungView from '../views/EinleitungView.vue'
import Wartezimmer from '../views/Wartezimmer.vue'
import Login from '../views/LoginPage.vue'
import Patient from '../views/patients/PatientProfile.vue'
import Anamnesemenu from '../views/menu/Anamnesemenu.vue'
import Facharztmenu from '../views/menu/Facharztmenu.vue'
import Labaratorymenu from '../views/menu/Labaratorymenu.vue'
import Patientenaktemenu from '../views/menu/Patientenaktemenu.vue'
import Untersuchenmenu from '../views/menu/Untersuchenmenu.vue'
import Submitmenu from '../views/menu/Submitmenu.vue'
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
    path: '/anamnese',name: 'Anamnese',component: Anamnesemenu, 
  },

  {
    path: '/patientenakte',name: 'Patientenakte',component: Patientenaktemenu, 
  },
  {
    path: '/untersuchen',name: 'Untersuchen',component: Untersuchenmenu,
  },
  {
    path: '/labaratory',name: 'Labaratory',component: Labaratorymenu, 
  },
  {
    path: '/facharzt',name: 'Facharzt',component: Facharztmenu, 
  },
  
  {
    path: '/submit',name: 'Submit',component: Submitmenu, 
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
