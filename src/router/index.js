import Vue from 'vue'
import Router from 'vue-router'
import Elysium from '@/pages/Elysium'
import ElysiumBaremetal from '@/pages/ElysiumBaremetal'

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
            name: 'ElysiumBaremetal',
            component: ElysiumBaremetal
        }
    ]
})
