<template>
    <div>
        <elysium-baremetal-banner></elysium-baremetal-banner>

        <elysium-footer></elysium-footer>
    </div>
</template>

<script>

import ElysiumBaremetalBanner from './ElysiumBaremetalBanner'
import ElysiumProducts from './ElysiumProducts'
import ElysiumServices from './ElysiumServices'
import ElysiumFooter from './ElysiumFooter'

export default {
    name: 'ElysiumBaremetal',
    components: {
        ElysiumBaremetalBanner, 
        ElysiumProducts, 
        ElysiumServices,
        ElysiumFooter
    }
}
</script>
