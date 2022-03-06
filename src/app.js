import Vue from 'vue';
import App from './App.vue';
import VuePaginate from 'vue-paginate'
Vue.use(VuePaginate)
// import { BootstrapVue } from 'bootstrap-vue'
// import 'bootstrap-vue/dist/bootstrap-vue.css'
import router from './router';
Vue.config.productionTip = false
// Vue.use(BootstrapVue)
new Vue({
    el: '#app',
    router,
    render: h => h(App)
});