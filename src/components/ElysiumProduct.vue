<template>

<div :class="product" class="product-card">
    <div class="product-card__image">
        <img class="product" :alt="type" :src="require(`@/assets/images/${img}.svg`)">
        <div class="product-card__level" v-text="type"></div>
        <div class="product-card__unit-name" v-text="title"></div>
    </div>
    <div class="product-card__unit-description" v-html="desc"></div>

    <div class="product-card__price">
        <span class="currency">$</span>
        <span class="value" v-text="price"></span>
        <span class="period">/MO</span>
    </div>
    <span class="product-card__setup-fee" v-if="title == 'Baremetal 1'">
        Setup-fee 50$
    </span>
    <span class="product-card__setup-fee" v-else-if="title == 'Baremetal 2'">
        Setup-fee 70$
    </span>
    <span class="product-card__setup-fee" v-else>
    </span>

    <div class="product-card__cta">
        <a :href="url" v-if="inStock" class="product-button">
            Buy one
            <i class="fal fa-sm fa-chevron-right"></i>
        </a>
        <div v-else class="out-of-stock">
            Out of stock
            <img class="emoji" height="30px" :src="require(`@/assets/images/crying_face.png`)" alt="Sad emoji"/>
        </div>
        <router-link v-if="product == 'baremetal'" :to="{ name: 'ElysiumBaremetal' }" class="product-button">
            Tell me more
            <i class="fal fa-sm fa-chevron-right"></i>
        </router-link>
    </div>

    <div class="product-card__unit-stats clearfix">
        <div class="one-third">
            <div class="stat" v-text="transcodes"></div>
            <div class="stat-value">Transcodes</div>
        </div>

        <div class="one-third">
            <div class="stat">
                <i :class="four_k ? 'fa-check' : 'fa-times'" class="fal"></i>
            </div>
            <div class="stat-value">4k</div>
        </div>

        <div class="one-third no-border">
            <div class="stat">
                <i :class="tautulli ? 'fa-check' : 'fa-times'" class="fal"></i>
            </div>
            <div class="stat-value">Tautulli</div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    name: 'ElysiumProduct',
    props: {
        img: {
            required: true,
            type: String
        },
        price: {
            required: true,
            type: String
        },
        product: {
            required: true,
            type: String
        },
        type: {
            required: true,
            type: String
        },
        title: {
            required: true,
            type: String
        },
        desc: {
            required: true,
            type: String
        },
        transcodes: {
            required: true,
            type: Number
        },
        tautulli: {
            required: false,
            default: false,
            type: Boolean
        },
        url: {
            require: true,
            type: String
        },
        four_k: {
            required: false,
            default: false,
            type: Boolean
        },
        inStock: {
            required: true
        }
    }
}
</script>

<style>
.product-card {
    background: white;
    width: 100%;
    max-width: 320px;
    margin: auto;
    border-radius: 19px;
    position: relative;
    text-align: center;
    box-shadow: -1px 15px 30px -12px black;
}

.product-card__image {
    position: relative;
    height: 220px;
    border-top-left-radius: 14px;
    border-top-right-radius: 14px;
}

.appbox_regular .product-card__image {
    background: url("../assets/images/svg/appbox_regular.svg");
    background-size: cover;
}

.appbox_plus .product-card__image {
    background: url("../assets/images/svg/appbox_plus.svg");
    background-size: cover;
}

.baremetal .product-card__image {
    background: url("../assets/images/svg/baremetal.svg");
    background-size: cover;
}

.product-card__image img {
    width: 200px;
    height: 160px;
    position: relative;
    top: 20px;
}

.product-card__level {
    text-transform: uppercase;
    font-size: 12px;
    font-weight: 700;
    margin-bottom: 3px;
    margin-top: 30px;
}

.appbox_regular .product-card__level {
    color: #1d6fb8;
}

.appbox_plus .product-card__level {
    color: #1c6a73;
}

.baremetal .product-card__level {
    color: #fb6021;
}

.product-card__unit-name {
    font-size: 26px;
    color: black;
    font-weight: 900;
    margin-bottom: 5px;
    text-transform: uppercase;
}

.product-card__unit-description {
    padding: 20px;
    margin-top: 20px;
    min-height: 100px;
}

.product-card__price {
    padding: 0 20px 0 20px;
    margin-bottom: 20px;
    text-align: center;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;

}

.product-card__price .currency {
    display: inline-block;
    vertical-align: top;
    font-size: 1.3rem;
    font-weight: 700;
}

.product-card__price .value {
    font-size: 4rem;
    line-height: 4rem;
    font-weight: 300;
}

.product-card__price .period {
    font-size: 1.4rem;
}

.product-card__setup-fee {
    position: relative;
    top: -20px;
    min-height: 20px;
    display: inline-block;
}

.product-card__unit-stats {
    color: white;
    font-weight: 700;
    border-bottom-left-radius: 14px;
    border-bottom-right-radius: 14px;
}

.appbox_regular .product-card__unit-stats {
    background: #1d6fb8;
}
.appbox_regular .product-card__unit-stats .one-third {
    border-right: 1px solid #204aa0;
}

.appbox_plus .product-card__unit-stats {
    background: #1d6a73;
}
.appbox_plus .product-card__unit-stats .one-third {
    border-right: 1px solid #114c54;
}

.baremetal .product-card__unit-stats {
    background: #fb6021;
}
.baremetal .product-card__unit-stats .one-third {
    border-right: 1px solid #c14918;
}

.product-card__unit-stats .one-third {
    width: 33%;
    float: left;
    padding: 20px 15px;
}

.product-card__unit-stats sup {
    position: absolute;
    bottom: 4px;
    font-size: 45%;
    margin-left: 2px;
}

.product-card__unit-stats .stat {
    position: relative;
    font-size: 24px;
    margin-bottom: 10px;
}

.stat .fal {
    line-height: 0;
}

.product-card__unit-stats .stat-value {
    text-transform: uppercase;
    font-weight: 400;
    font-size: 12px;
}

.product-card__unit-stats .no-border {
    border-right: none !important;
}

.product-card__cta {
    padding-bottom: 20px;
}

.product-card .out-of-stock img.emoji {
    position: relative;
    top: 5px;
    left: 5px;
}

.product-card .out-of-stock {
    margin-top: -15px;
    display: inline-block;
}
</style>
