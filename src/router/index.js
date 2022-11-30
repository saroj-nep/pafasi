
import Main from '../views/MainPageView.vue'
import EinleitungView from '../views/EinleitungView.vue'
import Wartezimmer from '../views/Wartezimmer.vue'
import Login from '../views/LoginPage.vue'
import Patient from '../views/patients/PatientProfile.vue'
import Hirtz from '../views/Hirtz_patients/Hirtz_PatientProfile.vue'
import Meier from '../views/Meier_patients/Meier_PatientProfile.vue'
import ErrorPage from "@/views/ErrorPage.vue"
import store from '@/store'
import Print from '@/views/Print.vue'
import Hirtzprint from '@/views/Hirtz_Print.vue'
import Meierprint from '@/views/Meier_Print.vue'
import Patientagain from '@/views/patients/Patientagain.vue'
import Hirtzagain from '@/views/Hirtz_patients/Hirtz_Patientagain.vue'
// import Tutorlogin from '@/views/Tutorlogin.vue'
import Tutorpanel from '@/views/Tutorpanel.vue'
import Tutorcaseresult1 from '@/views/Tutorcaseresult1.vue'
import Tutorcaseresult2 from '@/views/Tutorcaseresult2.vue'
import Tutorcaseresult1re from '@/views/Tutorcaseresult1_re.vue'
import Tutorcaseresult2re from '@/views/Tutorcaseresult2_re.vue'
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
    path: '/Meier',name: 'Meier',component: Meier
    
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
    path: '/hirtzprint',name: 'Hirtzprint',component: Hirtzprint
  },
  {
    path: '/meierprint',name: 'Meierprint',component: Meierprint
  },
  {
    path: '/tutorpanel',name: 'Tutorpanel',component: Tutorpanel
  },
   {
    path: '/caseresults1',name: 'Tutorcaseresult1',component: Tutorcaseresult1
  },
  {
    path: '/caseresults2',name: 'Tutorcaseresult2',component: Tutorcaseresult2
  },
   {
    path: '/caseresults1_re',name: 'Tutorcaseresult1_re',component: Tutorcaseresult1re
  },
    {
    path: '/caseresults2_re',name: 'Tutorcaseresult2_re',component: Tutorcaseresult2re
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
