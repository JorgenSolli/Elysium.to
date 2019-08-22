<template>
    <div class="container fullheight frontpage">
        <div class="body">
            <div class="container">
                <div class="ui mobile reversed stackable grid">
                    <div class="nine wide column">
                        <h1>
                            <span class="text-sm">The Baremetal</span> <br/>
                            <span class="text-lg">Everything about it, and its features</span>
                        </h1>
                    </div>
                    <div class="seven wide column">
                        <img class="fancyfade" :src="require(`@/assets/images/dedicated3.svg`)" alt="Banner Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'ElysiumBaremetalBanner',
}
</script>

<style scoped>
.container.fullheight {
    height: 500px !important;
}
</style>