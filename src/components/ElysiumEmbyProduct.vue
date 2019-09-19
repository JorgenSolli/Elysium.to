<template>

<div class="landscape-product-card">
    <div class="ui stackable equal width grid">
        <div class="column">
            <div class="header">
                We just went to fucking space... <br/>With Emby <img class="emby-logo" :src="require(`@/assets/images/emby.png`)"/>
                <div class="sub-header">
                    We get it, you're not a Plex person. We have heard you, and in true Elysium fashion, we deliver!

                    <p class="note">Note: this is not an appbox, but an invite to our emby server</p>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="header right-header">
                Quick details
            </div>

            <div class="stats">
                <div class="stat">
                    <span class="stat-value">CDN - </span>
                    <span class="stat">Currently not possible</span>
                </div>
                <div class="stat">
                    <span class="stat-value">4k - </span>
                    <span class="stat">No. Not yet at least</span>
                </div>
                <div class="stat">
                    <span class="stat-value">Transcodes - </span>
                    <span class="stat">3</span>
                </div>
            </div>
        </div>
    </div>

    <a href="https://elysium.to/client/cart.php?a=add&amp;pid=25" class="product-button product-button--large">
        Buy one for 9,99$ /mo
        <i class="fal fa-sm fa-chevron-right"></i>
    </a>
</div>
</template>

<script>
export default {
    name: 'ElysiumEmbyProduct',
}
</script>

<style>
.landscape-product-card {
    background: url("../assets/images/emby-card.png");
    background-size: cover;
    width: 100%;
    min-height: 250px;
    margin: auto;
    border-radius: 19px;
    position: relative;
    text-align: center;
    box-shadow: -1px 15px 30px -12px black;
    color: #fefefe;
    padding: 25px 20px;
}

.landscape-product-card .header {
    font-weight: 700;
    font-family: 'IBM Plex Sans', sans-serif;
    font-style: italic;
    font-size: 2.2rem;
    line-height: 2.2rem;
    text-align: left;
}
.landscape-product-card .header img.emby-logo {
    height: 30px;
    position: relative;
    top: 5px
}

.landscape-product-card .header .sub-header {
    margin-top: 50px;
    font-size: 1.5rem;
    font-style: normal;
    font-weight: 400;
    margin-left: 40px;
}
.landscape-product-card .header .note {
    color: #fff;
    font-size: 1rem;
    margin-top: 1rem;
}

.landscape-product-card .header .sub-header img {
    height: 40px;
}

.landscape-product-card .header.right-header {
    text-align: right;
}

.landscape-product-card .stats .stat {
    font-weight: 700;
    font-family: 'IBM Plex Sans', sans-serif;
    font-size: 1.5rem;
    line-height: 1.5rem;
    text-align: right;
    margin-top: 15px;
}

.product-button {
    border: none;
    color: #fff;
    border-radius: 20px;
    padding: 5px 20px;
    margin: 0 10px;
    cursor: pointer;
    transition: all .2s;
    background: #52b54b;
    margin-top: 40px;
    display: inline-block;
}

.product-button.product-button--large img.emoji {
    height: 30px;
    position: relative;
    top: 5px;
    left: 5px;
}

.product-button.product-button--large {
    padding: 15px 40px;
    border-radius: 40px;
    font-size: 1.5rem;
}

.product-button:hover, .product-button:focus {
    color: #fff;
}

@media screen and (max-width: 770px) {
    .landscape-product-card .header .sub-header {
        margin-top: 15px;
        margin-left: 0;
    }
    .landscape-product-card .header .sub-header img {
        height: 22px;
    }

    .landscape-product-card .header.right-header, .landscape-product-card .stats .stat {
        text-align: left;
    }

    .product-button.product-button--large {
        padding: 5px 40px;
    }
}
</style>
