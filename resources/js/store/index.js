import Vuex from 'vuex'
import user from './user.module'
import book from './book.module'
import Vue from "vue";
Vue.use(Vuex);
export default new Vuex.Store({
    modules: {
        user,
        book
    }
})
