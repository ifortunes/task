import VueRouter from 'vue-router'

const routes = [
    {
        path: '/',
        name: 'home',
        component: () => import('../components/chart/index'),
    },
    {
        path: '/chart/show/:id',
        name: 'chart-show',
        component: () => import('../components/chart/show'),
    },
    {
        path: '/chart/create',
        name: 'create',
        component: () => import('../components/chart/create'),
    },
    {
        path: '*',
        name: 'notFound',
        component: () => import('../components/pages/404'),
    },

]

export default new VueRouter({
    mode: 'history',
    routes,
    scrollBehavior() {
        // always scroll to top
        return { top: 0 }
    },
})
