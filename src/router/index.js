import Vue from 'vue'
import Router from 'vue-router'
import Elysium from '@/components/Elysium'
import Baremetal from '@/components/Baremetal'

Vue.use(Router)

export default new Router({
    routes: [
        {
            path: '/',
            name: 'Elysium',
            component: Elysium
        },
        {
            path: '/baremetal',
            name: 'Baremetal',
            component: Baremetal
        }
    ]
})
