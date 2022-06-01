import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import MainPageView from '../views/MainPageView.vue'
import EinleitungView from '../views/EinleitungView.vue'
import Kleingedrucktes from '../views/Kleingedrucktes.vue'
import Wartezimmer from '../views/Wartezimmer.vue'
import Tipps from '../views/Tipps.vue'
import Anleitung from '../views/Anleitung.vue'
import Patient from '../views/patients/PatientProfile.vue'



const routes = [
  {
    path: '/',name: 'MainPage',component: MainPageView
  },
  {
    path: '/home',name: 'home',component: HomeView
  },
  {
    path: '/about',name: 'about',component: () => import(/* webpackChunkName: "about" */ '../views/AboutView.vue')
  },

  {
    path: '/kleinge',name: 'Kleingedrucktes',component: Kleingedrucktes
  }
  ,
  {
    path: '/wart',name: 'Wartezimmer',component: Wartezimmer
  },
  {
    path: '/tip',name: 'Tipps',component: Tipps
  },
  {
    path: '/einlei',name: 'EinleitungView',component: EinleitungView
  },
  {
    path: '/anlei',name: 'Anleitung',component: Anleitung
  },
  {
    path: '/patients/:id',name: 'Patient',component: Patient, props:true
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
