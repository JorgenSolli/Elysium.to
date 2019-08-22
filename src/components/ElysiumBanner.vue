<template>
    <div class="container fullheight frontpage">
        <div class="body">
            <div class="container">
                <div class="ui mobile reversed stackable grid">
                    <div class="nine wide column">
                        <h1>
                            <span class="text-sm">The most unique</span> <br/>
                            <span class="text-lg">Plex appbox service ever experienced!</span>
                        </h1>
                    </div>
                    <div class="seven wide column">
                        <img class="fancyfade" src="../assets/images/banner1_alt.svg" alt="Banner Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'ElysiumBanner',
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
