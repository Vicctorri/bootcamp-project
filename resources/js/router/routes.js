import ExampleComponent from '../components/ExampleComponent';
import Dashboard from '../view/Dashboard';
import Users from '../view/users/Users';
import UserDetails from '../components/users/UserDetailsComponent';
import Books from "../view/books/Books";
import BookDetails from "../components/books/BookDetailsComponent";
import Categories from "../view/categories/Categories";
import Error from '../view/Error';

export default [
    {
        path: '/dashboard/',
        component: Dashboard,
        name: 'Dashboard',
        redirect: { name: 'ExampleComponent' },
        children: [
            {
                path: '/example',
                component: ExampleComponent,
                name: 'ExampleComponent',
            },
            {
                path: '/users',
                component: Users,
                name: 'Users',
            },
            {
                path: '/user/:id/details',
                component: UserDetails,
                name: 'UserDetails',
            },
            {
                path: '/admin-books',
                component: Books,
                name: 'Books'
            },
            {
                path: '/admin-book/:id/details',
                component: BookDetails,
                name: 'BookDetails'
            },
            {
                path: '/categories',
                component: Categories,
                name: 'Categories'
            }
        ]
    },
    {
        path: "/forbidden",
        name: "PageForbidden",
        component: Error,
        props: { code: 403 },
    },
    {
        path: "*",
        name: "PageNotFound",
        component: Error,
    },
    {
        path: "/internal-error",
        component: Error,
        props: { code: 500 },
    }
]
