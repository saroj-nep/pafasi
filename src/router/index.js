import { createRouter, createWebHistory } from 'vue-router'
import MainPageView from '../views/MainPageView.vue'
import EinleitungView from '../views/EinleitungView.vue'
import Wartezimmer from '../views/Wartezimmer.vue'
import Anleitung from '../views/Anleitung.vue'
import Patient from '../views/patients/PatientProfile.vue'
import Anamnesemenu from '../views/menu/Anamnesemenu.vue'
import Facharztmenu from '../views/menu/Facharztmenu.vue'
import Labaratorymenu from '../views/menu/Labaratorymenu.vue'
import Patientenaktemenu from '../views/menu/Patientenaktemenu.vue'
import Untersuchenmenu from '../views/menu/Untersuchenmenu.vue'
import Submitmenu from '../views/menu/Submitmenu.vue'
import Menu from '../views/menu/Menu.vue'




const routes = [
  {
    path: '/', children:[{path:"/main", name:"MainPageView", component: MainPageView}],
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
    path: '/menu/:id',name: 'Menu',component: Menu, 
  },
  {
    path: '/menu/1',name: 'Anamnese',component: Anamnesemenu, 
  },

  {
    path: '/menu/2',name: 'Patientenakte',component: Patientenaktemenu, 
  },
  {
    path: '/menu/3',name: 'Untersuchen',component: Untersuchenmenu,
  },
  {
    path: '/menu/4',name: 'Labaratory',component: Labaratorymenu, 
  },
  {
    path: '/menu/5',name: 'Facharzt',component: Facharztmenu, 
  },
  
  {
    path: '/menu/6',name: 'Submit',component: Submitmenu, 
  }

  
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
