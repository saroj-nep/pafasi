import { createRouter, createWebHistory } from 'vue-router'
import MainPageView from '../views/MainPageView.vue'
import EinleitungView from '../views/EinleitungView.vue'
import Wartezimmer from '../views/Wartezimmer.vue'
import Login from '../views/Login.vue'
import Patient from '../views/patients/PatientProfile.vue'
import Anamnesemenu from '../views/menu/Anamnesemenu.vue'
import Facharztmenu from '../views/menu/Facharztmenu.vue'
import Labaratorymenu from '../views/menu/Labaratorymenu.vue'
import Patientenaktemenu from '../views/menu/Patientenaktemenu.vue'
import Untersuchenmenu from '../views/menu/Untersuchenmenu.vue'
import Submitmenu from '../views/menu/Submitmenu.vue'



const routes = [
  {
    path: '/', name:'Login', component:Login
  },
  {
    path: '/main', name:'MainPageView', component:MainPageView
  },
  {
    path: '/warte',name: 'Wartezimmer',component: Wartezimmer
  },
  {
    path: '/einleitung',name: 'EinleitungView',component: EinleitungView
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
 

  
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
