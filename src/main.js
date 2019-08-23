// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import router from './router'
import axios from 'axios'

Vue.config.productionTip = false

new Vue({
    el: '#app',
    router,
    components: { App },
    template: '<App/>',
    data: {
        stock: {}
    },
    created() {
        axios.get('https://manage.elysium.to/api/products/stock').then((res) => {
            this.stock = res.data
        })
        .catch((err) => {
            console.log(err)
        })
    }
})
