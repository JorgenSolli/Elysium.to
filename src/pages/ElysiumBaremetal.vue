<template>
    <div>
        <elysium-baremetal-banner></elysium-baremetal-banner>

        <section id="reseller-panel" class="ui container">
            <div class="ui equal width grid mobile stackable">
                <div class="column">
                    <h2><small>The Reseller Panel</small></h2>
                    <p class="p-lg">
                        The Reseller Panel allows you to deploy and administer users and containers (Plex instances) on your server. This allows you to manage either friends or actual customers.
                        <br/><br/>
                        The panel cost an additional 10$ /month and will allow you to deploy up to <strong>9</strong> containers for the <span class="baremetal label">Baremetal 1</span> and up to <strong>21</strong> for the <span class="baremetal label">Baremetal 2</span>
                    </p>
                </div>

                <div class="centered column">
                    <img class="article-image" :src="require(`@/assets/images/reseller_panel.png`)" alt="Reseller panel illustrated"/>
                </div>
            </div>
        </section>
        <section class="ui container">
            <div class="ui equal width grid mobile reversed stackable">
                <div class="centered column">
                    <img class="article-image" :src="require(`@/assets/images/reseller_panel_server.png`)" alt="Reseller panel illustrated"/>
                </div>
                <div class="column">
                    <h2><small>You're in total control</small></h2>
                    <p class="p-lg">
                        With or without the Reseller Panel, you have total control over your server. We provide you the tools to handle everything that might stand in the way of your movie night! 
                        <br/><br/>
                        If you have the Reseller Panel, you are also given the tools needed to deal with all potential support cases!
                        <br/>
                        You can even sign in directly to the customer's account and assist!
                    </p>
                </div>
            </div>
        </section>
        <section class="ui container">
            <div class="ui equal width grid mobile reversed stackable">
                <div class="column">
                    <h2><small>Even out the cost, or make a little dough!</small></h2>
                    <p class="p-lg">
                        <span class="baremetal label">Baremetal 1</span> is perfectly suited for sharing with a large family and a good circle of <a href="https://support.plex.tv/articles/201105738-creating-and-managing-server-shares/">friends</a> while keeping performance top-notch, getting a few friends on board easily evens out the cost of this box!
                        <br/><br/>
                        <span class="baremetal label">Baremetal 2</span> is better suited for larger-scale reselling, with its larger disks it is possible to deploy significantly more containers, making a little extra on top of this box is easily possible!
                    </p>
                </div>
            </div>
        </section>
        <section class="ui container">
            <div class="ui equal width grid mobile stackable">
                <div class="column">
                    <h2><small>We're here for you!</small></h2>
                    <p class="p-lg">
                        Upon purchase of a Baremetal, you can request access to our reseller channel where you can talk technical details with Elysium staff and other resellers, being a reseller requires the will to be in constant development, as the system grows so does the requirements.
                        <br/><br/>
                        As a reseller you should expect the need for server upgrades in the future, primarily adding additional disks - All this stuff we can help with within this channel!
                    </p>
                </div>

                <div class="centered column hidden-stacked">
                    <img class="article-image" :src="require(`@/assets/images/reseller_discord.png`)" alt="Reseller panel illustrated"/>
                </div>
            </div>
        </section>
        <section class="ui container">
            <div class="ui equal width grid mobile reversed stackable">
                <div class="column baremetal">
                    <a v-if="$root.stock.baremetal_1" href="https://elysium.to/client/cart.php?a=add&pid=16" class="product-button product-button--large">
                        Get a Baremetal 1
                        <img class="emoji" :src="require(`@/assets/images/clapping_hands.png`)"/>
                    </a>
                    <button v-else disabled class="product-button product-button--large">
                        Baremetal 1 is out of stock
                        <img class="emoji" :src="require(`@/assets/images/crying_face.png`)"/>
                    </button>

                    <a v-if="$root.stock.baremetal_2" href="https://elysium.to/client/cart.php?a=add&pid=25" class="product-button product-button--large">
                        Get a Baremetal 2
                        <img class="emoji" :src="require(`@/assets/images/drooling_face.png`)"/>
                    </a>
                    <button v-else class="product-button product-button--large">
                        Baremetal 2 is out of stock
                        <img class="emoji" :src="require(`@/assets/images/crying_face.png`)"/>
                    </button>
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

    .label.baremetal {
        background: linear-gradient(#f8a32f 0%, #fb5e1f 100%);
        border-radius: 15px;
        padding: 2px 10px;
        color: #fff;
    }
</style>
