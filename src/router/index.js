import Vue from 'vue'
import Router from 'vue-router'
import Elysium from '@/components/Elysium'
import ElysiumBaremetal from '@/components/ElysiumBaremetal'

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
