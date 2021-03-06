require('./bootstrap');

import {createApp} from 'vue'
import App from './components/App.vue'
import "bootstrap-icons/font/bootstrap-icons.css";
import ElementPlus from 'element-plus';
import 'element-plus/lib/theme-chalk/index.css';
// import Toaster from "@meforma/vue-toaster";
import router from './router'

// import bootstrap from 'bootstrap';


// import VueRouter from 'vue-router'
// createApp(App).use(Toaster);
const app = createApp(App)
app.use(router)
app.use(ElementPlus)
app.mount("#App")
// App.use(VueRouter)
