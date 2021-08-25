
require('./bootstrap');

window.Vue = require('vue')

import router from './router'
import ViewUI from 'view-design';
import 'view-design/dist/styles/iview.css';
import Vuikit from 'vuikit'
import VuikitIcons from '@vuikit/icons';
<<<<<<< HEAD
=======

>>>>>>> 73f99a4262d295e758b31409c78a0408d599d5a6
import '@vuikit/theme';
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import common from './common';
import PerfectScrollbar from 'vue2-perfect-scrollbar'
import 'vue2-perfect-scrollbar/dist/vue2-perfect-scrollbar.css';

import FullpageModal from 'vue-fullpage-modal'


<<<<<<< HEAD
Vue.use(FullpageModal)
Vue.use(PerfectScrollbar)
Vue.use(BootstrapVue)
Vue.use(IconsPlugin)
Vue.use(Vuikit)
Vue.use(VuikitIcons)
=======

Vue.use(FullpageModal)
 
Vue.use(PerfectScrollbar)

Vue.use(BootstrapVue)
Vue.use(IconsPlugin)

Vue.use(Vuikit)
Vue.use(VuikitIcons)

>>>>>>> 73f99a4262d295e758b31409c78a0408d599d5a6
Vue.use(ViewUI);
import Vue from 'vue';
Vue.component('mainapp', require('./components/mainapp.vue').default);
Vue.mixin(common);
// Vue.mixin(require('./asset'));

const app = new Vue({
    el: '#app',
    router
});
