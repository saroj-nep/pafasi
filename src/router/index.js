
import Main from '../views/MainPageView.vue'
import EinleitungView from '../views/EinleitungView.vue'
import Wartezimmer from '../views/Wartezimmer.vue'
import Login from '../views/LoginPage.vue'
import Patient from '../views/patients/PatientProfile.vue'
import Hirtz from '../views/Hirtz_patients/Hirtz_PatientProfile.vue'
import ErrorPage from "@/views/ErrorPage.vue"
import store from '@/store'
import Print from '@/views/Print.vue'
import Patientagain from '@/views/patients/Patientagain.vue'
import Hirtzagain from '@/views/Hirtz_patients/Hirtz_Patientagain.vue'
// import Tutorlogin from '@/views/Tutorlogin.vue'
import Tutorpanel from '@/views/Tutorpanel.vue'
import Tutorcaseresult1 from '@/views/Tutorcaseresult1.vue'
import Tutorcaseresult1re from '@/views/Tutorcaseresult1_re.vue'
import Anleitung from '@/views/Anleitung.vue'
import Tipps from '@/views/Tipps.vue'
import Kleingedrucktes from '@/views/Kleingedrucktes.vue'

const routes = [
 { path: "/",
  redirect:'/login',
  component: Login,
  
},

{path:'/main', name:'Main', component:Main,},

{
  path: "/login",
  name: "Login",
  component: Login,
 
},
  
 {
    path: '/warte',name: 'Wartezimmer',component: Wartezimmer,
  },
  {
    path: '/anlei',name: 'EinleitungView',component: EinleitungView
  },
 
  {
    path: '/Schneider',name: 'Patient',component: Patient
    
  },
    {
    path: '/Hirtz',name: 'Hirtz',component: Hirtz
    
  },
  {
    path: '/redodiagnosis',name: 'Patientagain', component: Patientagain
  },
  {
    path: '/redohirtz',name: 'Hirtzagain', component: Hirtzagain
  },
  {
    path: '/print',name: 'Print',component: Print
  },
  {
    path: '/tutorpanel',name: 'Tutorpanel',component: Tutorpanel
  },
   {
    path: '/caseresults1',name: 'Tutorcaseresult1',component: Tutorcaseresult1
  },
   {
    path: '/caseresults1_re',name: 'Tutorcaseresult1_re',component: Tutorcaseresult1re
  },
  {
    path: '/anleitung',name: 'Anleitung',component: Anleitung
  },
{
    path: '/tipps_links',name: 'Tipps & Links',component: Tipps
  },
  {
    path: '/kleingedrucktes_datenschutzerklaerung',name: 'Kleingedrucktes',component: Kleingedrucktes
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

import { createRouter, createWebHistory } from 'vue-router'

const router = createRouter({
  history: createWebHistory(),
  routes,
})



export default router
