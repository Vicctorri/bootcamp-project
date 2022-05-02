import ExampleComponent from '../components/ExampleComponent';
import Dashboard from '../view/Dashboard';
import Users from '../view/users/Users';
import UserDetails from '../components/users/UserDetailsComponent';
import Error from '../view/Error';

export default [
    {
        path: '/dashboard',
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
