<template>
    <div>
        <elysium-baremetal-banner></elysium-baremetal-banner>

        <!-- Content -->
        <section id="reseller-panel" class="ui container">
            <div class="ui equal width grid mobile reversed stackable">
                <div class="column">
                    <h2><small>The reseller panel</small></h2>
                    <p class="p-lg">
                        Curabitur tristique purus et lectus cursus semper. Donec vel dapibus diam. Nulla non varius odio, eget imperdiet risus. <br/>Sed urna libero, semper sit amet diam at, sodales fermentum ipsum. Phasellus dolor nulla, sollicitudin et justo eu, tempus malesuada odio. <br/><br/>In in nisi id arcu mollis cursus et in augue. Sed placerat in eros vel dapibus. Maecenas velit elit, aliquet ut sapien eget, viverra sollicitudin lectus.
                    </p>
                </div>

                <div class="centered column">
                    <img class="article-image" :src="require(`@/assets/images/reseller_panel.png`)" alt="Reseller panel illustrated"/>
                </div>
            </div>
        </section>
        <section id="reseller-panel" class="ui container">
            <div class="ui equal width grid mobile reversed stackable">
                <div class="centered column">
                    <img class="article-image" :src="require(`@/assets/images/reseller_panel.png`)" alt="Reseller panel illustrated"/>
                </div>
                <div class="column">
                    <h2><small>You're in total control</small></h2>
                    <p class="p-lg">
                        Curabitur tristique purus et lectus cursus semper. Donec vel dapibus diam. Nulla non varius odio, eget imperdiet risus. <br/>Sed urna libero, semper sit amet diam at, sodales fermentum ipsum. Phasellus dolor nulla, sollicitudin et justo eu, tempus malesuada odio. <br/><br/>In in nisi id arcu mollis cursus et in augue. Sed placerat in eros vel dapibus. Maecenas velit elit, aliquet ut sapien eget, viverra sollicitudin lectus.
                    </p>
                </div>
            </div>
        </section>

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

    .article-image {
        max-width: 100%;
        box-shadow: -1px 15px 30px -12px black;
        border-radius: 5px;
    }

    section {
        padding: 50px 0;
    }
</style>
