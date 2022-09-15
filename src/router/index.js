import { createRouter, createWebHashHistory } from 'vue-router'
import Main from '../views/MainPageView.vue'
import EinleitungView from '../views/EinleitungView.vue'
import Wartezimmer from '../views/Wartezimmer.vue'
import Login from '../views/LoginPage.vue'
import Patient from '../views/patients/PatientProfile.vue'
import ErrorPage from "@/views/ErrorPage.vue"
import store from '@/store'

const routes = [
 { path: "/",
  redirect:'/login',
  component: Main,
  meta: { requiresAuth: true }
},

{path:'/main', name:'Main', component:Main,},

{
  path: "/login",
  name: "Login",
  component: Login,
  meta: {isGuest: true},
},
  
 {
    path: '/warte',name: 'Wartezimmer',component: Wartezimmer,
  },
  {
    path: '/anlei',name: 'EinleitungView',component: EinleitungView
  },
 
  {
    path: '/Schneider',name: 'Patient',component: Patient, props:true, meta: {
      title: "Patient ",
    },
  },
  
  
  {
    path: "/:catchAll(.*)",
    name: "ErrorPage",
    component: ErrorPage,
    meta: {
      title: "Error",
    },
  },

  
];

const router = createRouter({
  history: createWebHashHistory(),
  routes,
 
});

router.beforeEach((to, from, next) => {
  if (to.meta.requiresAuth && !store.state.user.token) {
    next({ name: "Login" });
  } else if (store.state.user.token && to.meta.isGuest) {
    next({ name: "Main" });
  } else {
    next();
  }
});

export default router
