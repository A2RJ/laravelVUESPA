import AllJurnals from './views/allJurnals.vue';
import Coba from './views/coba.vue';
import Input from './views/input.vue';

export const routes = [
    {
        name: 'home',
        path: '/',
        component: AllJurnals
    },
    {
        name: 'add',
        path: '/add',
        component: Coba
    },
    {
        name: 'input',
        path: '/input',
        component: Input
    }
];