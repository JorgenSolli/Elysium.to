<template>
    <div>
        <elysium-banner></elysium-banner>

        <div class="section-2">
            <elysium-products></elysium-products>
            <elysium-services></elysium-services>
        </div>

        <div class="section-3">
            <elysium-fundementals></elysium-fundementals>
            <elysium-comparison></elysium-comparison>
        </div>

        <elysium-footer></elysium-footer>
    </div>
</template>

<script>
import ElysiumBanner from './ElysiumBanner'
import ElysiumProducts from './ElysiumProducts'
import ElysiumServices from './ElysiumServices'

export default {
    name: 'Elysium',
    components: {
        ElysiumBanner, 
        ElysiumProducts, 
        ElysiumServices
    },
    data () {
        return {
            msg: 'Welcome to Your Vue.js App'
        }
    }
}
</script>

<style scoped>
h1, h2 {
    font-weight: normal;
}
ul {
    list-style-type: none;
    padding: 0;
}
li {
    display: inline-block;
    margin: 0 10px;
}
a {
    color: #42b983;
}
</style>
