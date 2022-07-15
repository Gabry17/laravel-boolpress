import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from './pages/Home.vue';
import About from './pages/About.vue';
import Blog from './pages/Blog.vue';
import SinglePage from './pages/SinglePage.vue';
import Tag from './pages/Tag.vue';
import NotFound from './pages/NotFound';

const router = new VueRouter(
    {
        mode: 'history',
        routes: [
            {
                path: '/',
                name: 'home',
                component: Home
            },
            {
                path: '/about',
                name: 'about',
                component: About
            },
            {
                path: '/blog',
                name: 'blog',
                component: Blog
            },
            {
                path: '/blog/:slug',
                name: 'singlePage',
                component: SinglePage
            },
            {
                path: '/tags/:slug',
                name: 'tag',
                component: Tag
            },
            {
                path: '/*',
                name: 'notFound',
                component: NotFound
            }
        ]
    }
)

export default router;
