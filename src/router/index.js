import { createRouter, createWebHistory } from 'vue-router'
import MainPageView from '../views/MainPageView.vue'
import EinleitungView from '../views/EinleitungView.vue'
import Wartezimmer from '../views/Wartezimmer.vue'
import Anleitung from '../views/Anleitung.vue'
import Patient from '../views/patients/PatientProfile.vue'
import DefaultLayout from '../components/DefaultLayout.vue'
import Option from '../components/Option.vue'
import Menu from '../views/menu/Menu.vue'

const routes = [
  {
    path: '/',component: DefaultLayout, children:[{path:"/main", name:"MainPageView", component: MainPageView}],
  },

 
  {
    path: '/warte',name: 'Wartezimmer',component: Wartezimmer
  },
 
  {
    path: '/einleitung',name: 'EinleitungView',component: EinleitungView
  },
  {
    path: '/anlei',name: 'Anleitung',component: Anleitung
  },
  {
    path: '/patients/:id',name: 'Patient',component: Patient, props:true
  },
  {
    path: '/menu_options/:id',name: 'Option',component: Option, props:true
  },
  {
    path: '/Menu/:id',name: 'Menu',component: Menu, props:true
  },
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
