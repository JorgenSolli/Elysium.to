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
    ],
    scrollBehavior (to, from, savedPosition) {
        if (savedPosition) {
            return savedPosition
        } else {
            if (to.hash) {
                return {
                    selector: to.hash
                }
            }

            return { x: 0, y: 0 }
        }
    }
})
