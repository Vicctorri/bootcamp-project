import VueRouter from 'vue-router';
import routes from './routes.js'

const router = new VueRouter({
    mode: 'history',
    hash: false,
    routes,
})

export default router;
