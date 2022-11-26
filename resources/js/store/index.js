import { createApp } from 'vue'
import { createStore } from 'vuex'
import Dashboard from './modules/dashboard.js';


export default createStore({
    modules:{
        Dashboard,
    }
})

