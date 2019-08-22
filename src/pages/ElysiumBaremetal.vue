<template>
    <div>
        <elysium-baremetal-banner></elysium-baremetal-banner>

        <!-- Content -->

        <elysium-footer></elysium-footer>
    </div>
</template>

<script>

import ElysiumBaremetalBanner from '@/components/baremetal/ElysiumBaremetalBanner'
import ElysiumFooter from '@/components/ElysiumFooter'

export default {
    name: 'ElysiumBaremetal',
    components: {
        ElysiumBaremetalBanner, 
        ElysiumFooter
    }
}
</script>

<style scoped>
    .frontpage {
        background: radial-gradient(circle, #f8a32f 0%, #fb5e1f 100%)
    }
</style>
