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
import ElysiumBanner from '@/components/ElysiumBanner'
import ElysiumProducts from '@/components/ElysiumProducts'
import ElysiumServices from '@/components/ElysiumServices'
import ElysiumFundementals from '@/components/ElysiumFundementals'
import ElysiumComparison from '@/components/ElysiumComparison'
import ElysiumFooter from '@/components/ElysiumFooter'

export default {
    name: 'Elysium',
    components: {
        ElysiumBanner,
        ElysiumProducts,
        ElysiumServices,
        ElysiumFundementals,
        ElysiumComparison,
        ElysiumFooter
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
