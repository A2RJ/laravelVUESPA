import AllJurnals from './allJurnals.vue';
import Coba from './coba.vue';

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