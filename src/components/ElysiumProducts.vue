<template>
    <div>
        <section id="products" class="ui container space">
            <div class="ui stackable equal width grid">
                <div class="ui container space centered">
                    <h2>OUR PRODUCTS</h2>
                </div>
                <div class="column">
                    <elysium-product
                        img="shared1"
                        product="appbox_regular"
                        type="shared"
                        price="9.99"
                        title="APPBOX 1"
                        desc="The Appbox for all the single people out there! No just kidding you can watch with your spouse, too!"
                        url="https://elysium.to/client/cart.php?a=add&pid=1"
                        :transcodes=1
                        v-bind:in-stock=$root.stock.shared_appbox_1
                    />
                </div>
                <div class="column">
                    <elysium-product
                        img="dedicated1"
                        product="appbox_plus"
                        type="shared"
                        price="19.99"
                        title="APPBOX+ 1"
                        desc="We get it; you like 4k. And possibly Tautulli too! Go ahead and get some use out of that 4k TV you got hanging on the wall!"
                        url="https://elysium.to/client/cart.php?a=add&pid=20"
                        :tautulli=true
                        :four_k=true
                        :transcodes=4
                        v-bind:in-stock=$root.stock.shared_appbox_1_plus
                    />
                </div>
                <div class="column">
                    <elysium-product
                        img="dedicated3"
                        product="baremetal"
                        type="dedicated"
                        price="60"
                        title="Baremetal 1"
                        desc="Okay we're getting serious... Click on <strong>Tell me more</strong> to learn more! There's a lot to learn"
                        url="https://elysium.to/client/cart.php?a=add&pid=16"
                        :transcodes=25
                        :four_k=true
                        :tautulli=true
                        v-bind:in-stock=$root.stock.baremetal_1
                    />
                </div>
            </div>
            <div class="ui stackable equal width grid">
                <div class="column">
                    <elysium-product
                        img="shared2"
                        product="appbox_regular"
                        type="shared"
                        price="15"
                        title="APPBOX 2"
                        desc="Feeling extra kind? Share with a friend or two! Or dont... we're not the boss of you"
                        url="https://elysium.to/client/cart.php?a=add&pid=7"
                        :transcodes=3
                        v-bind:in-stock=$root.stock.shared_appbox_2
                    />
                </div>
                <div class="column">
                    <elysium-product
                        img="dedicated2"
                        product="appbox_plus"
                        type="shared"
                        price="29.99"
                        title="Appbox+ 2"
                        desc="For all the popular people out there with very demanding friends! Room for all your friends with those big 4k TVs."
                        url="https://elysium.to/client/cart.php?a=add&pid=23"
                        :tautulli=true
                        :four_k=true
                        :transcodes=6
                        v-bind:in-stock=$root.stock.shared_appbox_2_plus
                    />
                </div>
                <div class="column">
                    <elysium-product
                        img="dedicated3"
                        product="baremetal"
                        type="dedicated"
                        price="75"
                        title="Baremetal 2"
                        desc="Looking to bring out the big guns I see... Click on <strong>Tell me more</strong> to learn more! There's a lot to learn"
                        url="https://elysium.to/client/cart.php?a=add&pid=25"
                        :tautulli=true
                        :four_k=true
                        :transcodes=25
                        v-bind:in-stock=$root.stock.baremetal_2
                    />
                </div>
            </div>
        </section>

        <section class="ui container space">
            <elysium-emby-product/>
        </section>

        <section id="newsletter" class="ui container space centered">
            <form class="ui form" id="mailforge-embedded-form" action="https://hosted.mailforge.io/subscribe?u=37pJOG" method="POST">
                <h2 class="mailforge-title"><small>Product out of stock?</small></h2>
                <p>Subscribe to our mailing list and get notified when products are in stock!</p>
                <div class="ui stackable one column centered grid">
                    <div class="four column centered row">
                        <div class="column">
                            <div class="field">
                                <input type="text" id="57" placeholder="Your E-mail address" name="email">
                            </div>
                        </div>
                        <div class="column">
                            <button type="submit" class="ui positive fluid button icon labeled">
                                <i class="envelope outline icon"></i>
                                Subscribe
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>
</template>

<script>
import ElysiumProduct from './ElysiumProduct'
import ElysiumEmbyProduct from '@/components/ElysiumEmbyProduct'

export default {
    name: 'ElysiumProducts',
    components: {
        ElysiumProduct,
        ElysiumEmbyProduct
    }
}
</script>

<style scoped>

</style>
