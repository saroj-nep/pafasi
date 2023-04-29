import Main from "../views/MainPageView.vue";
import EinleitungView from "../views/EinleitungView.vue";
import Wartezimmer from "../views/Wartezimmer.vue";
import Login from "../views/LoginPage.vue";
import Patient from "../views/patients/PatientProfile.vue";
import Hirtz from "../views/Hirtz_patients/Hirtz_PatientProfile.vue";
// import Rigas from "../views/Rigas_patients/Rigas_PatientProfile.vue";
// import Meier from "../views/Meier_patients/Meier_PatientProfile.vue";
// import Bauch from "../views/Bauch_patients/Bauch_PatientProfile.vue";
// import Holderbaum from "../views/Holderbaum_patients/Holderbaum_PatientProfile.vue";
import ErrorPage from "@/views/ErrorPage.vue";
import store from "@/store";
import Print from "@/views/Print.vue";
import Hirtzprint from "@/views/Hirtz_Print.vue";
// import Rigasprint from "@/views/Rigas_Print.vue";
// import Meierprint from "@/views/Meier_Print.vue";
// import Bauchprint from "@/views/Bauch_Print.vue";
// import Holderbaumprint from "@/views/Holderbaum_Print.vue";
import Patientagain from "@/views/patients/Patientagain.vue";
import Hirtzagain from "@/views/Hirtz_patients/Hirtz_Patientagain.vue";
// import Tutorlogin from '@/views/Tutorlogin.vue'
import Tutorpanel from "@/views/Tutorpanel.vue";
import Tutorcaseresult1 from "@/views/Tutorcaseresult1.vue";
import Tutorcaseresult2 from "@/views/Tutorcaseresult2.vue";
// import Tutorcaseresult1re from "@/views/Tutorcaseresult1_re.vue";
import Tutorcaseresult2re from "@/views/Tutorcaseresult2_re.vue";
// import Tutorcaseresult3 from "@/views/Tutorcaseresult3.vue";
// import Tutorcaseresult3re from "@/views/Tutorcaseresult3_re.vue";
// import Tutorcaseresult4 from "@/views/Tutorcaseresult4.vue";
// import Tutorcaseresult4re from "@/views/Tutorcaseresult4_re.vue";
// import Tutorcaseresult5 from "@/views/Tutorcaseresult5.vue";
// import Tutorcaseresult5re from "@/views/Tutorcaseresult5_re.vue";
// import Tutorcaseresult6 from "@/views/Tutorcaseresult6.vue";
// import Tutorcaseresult6re from "@/views/Tutorcaseresult6_re.vue";
import Anleitung from "@/views/Anleitung.vue";
import Tipps from "@/views/Tipps.vue";
import Kleingedrucktes from "@/views/Kleingedrucktes.vue";

const routes = [
  { path: "/", redirect: "/login", component: Login },

  { path: "/main", name: "Main", component: Main },

  {
    path: "/login",
    name: "Login",
    component: Login,
  },

  {
    path: "/warte",
    name: "Wartezimmer",
    component: Wartezimmer,
  },
  {
    path: "/anlei",
    name: "EinleitungView",
    component: EinleitungView,
  },

  {
    path: "/Schneider",
    name: "Patient",
    component: Patient,
  },
  {
    path: "/Hirtz",
    name: "Hirtz",
    component: Hirtz,
  },
  // {
  //   path: "/Meier",
  //   name: "Meier",
  //   component: Meier,
  // },
  // {
  //   path: "/Rigas",
  //   name: "Rigas",
  //   component: Rigas,
  // },
  // {
  //   path: "/Holderbaum",
  //   name: "Holderbaum",
  //   component: Holderbaum,
  // },
  // {
  //   path: "/Olewski",
  //   name: "Bauch",
  //   component: Bauch,
  // },
  {
    path: "/redodiagnosis",
    name: "Patientagain",
    component: Patientagain,
  },
  {
    path: "/redohirtz",
    name: "Hirtzagain",
    component: Hirtzagain,
  },
  {
    path: "/print",
    name: "Print",
    component: Print,
  },
  {
    path: "/hirtzprint",
    name: "Hirtzprint",
    component: Hirtzprint,
  },
  // {
  //   path: "/rigasprint",
  //   name: "Rigasprint",
  //   component: Rigasprint,
  // },
  // {
  //   path: "/meierprint",
  //   name: "Meierprint",
  //   component: Meierprint,
  // },
  // {
  //   path: "/olewskiprint",
  //   name: "Bauchprint",
  //   component: Bauchprint,
  // },
  // {
  //   path: "/holderbaumprint",
  //   name: "Holderbaumprint",
  //   component: Holderbaumprint,
  // },
  {
    path: "/tutorpanel",
    name: "Tutorpanel",
    component: Tutorpanel,
  },
  {
    path: "/caseresults1",
    name: "Tutorcaseresult1",
    component: Tutorcaseresult1,
  },
  {
    path: "/caseresults2",
    name: "Tutorcaseresult2",
    component: Tutorcaseresult2,
  },
  // {
  //   path: "/caseresults1_re",
  //   name: "Tutorcaseresult1_re",
  //   component: Tutorcaseresult1re,
  // },
  {
    path: "/caseresults2_re",
    name: "Tutorcaseresult2_re",
    component: Tutorcaseresult2re,
  },
  // {
  //   path: "/caseresults3",
  //   name: "Tutorcaseresult3",
  //   component: Tutorcaseresult3,
  // },
  // {
  //   path: "/caseresults4",
  //   name: "Tutorcaseresult4",
  //   component: Tutorcaseresult4,
  // },
  // {
  //   path: "/caseresults4_re",
  //   name: "Tutorcaseresult4_re",
  //   component: Tutorcaseresult4re,
  // },
  // {
  //   path: "/caseresults5_re",
  //   name: "Tutorcaseresult5_re",
  //   component: Tutorcaseresult5re,
  // },
  // {
  //   path: "/caseresults5",
  //   name: "Tutorcaseresult5",
  //   component: Tutorcaseresult5,
  // },
  // {
  //   path: "/caseresults6",
  //   name: "Tutorcaseresult6",
  //   component: Tutorcaseresult6,
  // },
  // {
  //   path: "/caseresults6_re",
  //   name: "Tutorcaseresult6_re",
  //   component: Tutorcaseresult6re,
  // },
  // {
  //   path: "/caseresults3_re",
  //   name: "Tutorcaseresult3_re",
  //   component: Tutorcaseresult3re,
  // },
  {
    path: "/anleitung",
    name: "Anleitung",
    component: Anleitung,
  },
  {
    path: "/tipps_links",
    name: "Tipps & Links",
    component: Tipps,
  },
  {
    path: "/kleingedrucktes_datenschutzerklaerung",
    name: "Kleingedrucktes",
    component: Kleingedrucktes,
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

import { createRouter, createWebHistory } from "vue-router";

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
