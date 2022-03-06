import Vue from "vue";
import Router from "vue-router";
Vue.use(Router);
export default new Router({
  mode: "history",
  routes: [
    {
      path: "/admin/home",
      alias: "/test",
      name: "test",
      component: () => import("../components/Test")
    },
    {
      path: "/admin/producatori",
      alias: "producatori",
      name: "producatori",
      component: () => import("../components/Producatori")
    }
  ]
});