import AllJurnals from './views/allJurnals.vue';
import Coba from './views/coba.vue';

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
    // {
    //     name: 'edit',
    //     path: '/edit/:id',
    //     component: EditBook
    // }
];