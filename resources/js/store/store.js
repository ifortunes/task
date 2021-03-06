import Vue from 'vue'
import Vuex from 'vuex'
import chart from './services/chart'

Vue.use(Vuex)

const store = new Vuex.Store({
    modules: {
        chart,
    }
})

export default store
