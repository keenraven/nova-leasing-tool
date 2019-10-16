import axios from 'axios'
window.axios = axios

Nova.booting((Vue, router, store) => {
    router.addRoutes([
        {
            name: 'nova-leasing-tool',
            path: '/nova-leasing-tool',
            component: require('./components/LeasingTool'),
        },
    ])
})
