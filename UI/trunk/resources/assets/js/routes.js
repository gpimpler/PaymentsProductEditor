import VueRouter from 'vue-router';

let routes = [
    {
        path: '/',
        component: require('./views/Home.vue')
    },
    {
        path: '/designer',
        component: require('./views/Designer.vue')
    },
    {
        path: '/accents',
        component: require('./views/Accents.vue')
    },
    {
        path: '/publisher',
        component: require('./views/Publisher.vue')
    },
    {
        path: '/styles',
        component: require('./views/StyleGuide.vue')
    }
]

export default new VueRouter({
    routes: routes
})