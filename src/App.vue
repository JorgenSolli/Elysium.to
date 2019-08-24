<template>
    <div id="app">
        <header class="menu">
            <nav class="ui container">
                <a href="#" class="header__link">
                    <transition name="slide-fade">
                        <!-- Header Navigation Menu Icons -->
                        <button class="header--button" v-if="show" key="on" @click="show = false">
                            <i class="fal fa-2x fa-times"></i>
                        </button>
                        <button class="header--button" v-else key="off" @click="show = true">
                            <i class="fal fa-2x fa-compass"></i>
                        </button>
                    </transition>
                </a>
                <!-- Dropdown Menu -->
                <transition name="dropdown">
                    <div class="dropdown__menu" v-bind:class="{ active: show }" v-if="show">
                        <ul class="dropdown__menu-nav">
                            <li class="dropdown__menu-item" @click="show = false">
                                <router-link :to="{ name: 'Elysium', hash: '#products' }" class="dropdown__menu-link">
                                    Our products
                                </router-link>
                            </li>

                            <li class="dropdown__menu-item" @click="show = false">
                                <router-link :to="{ name: 'Elysium', hash: '#services' }" class="dropdown__menu-link">
                                    Our services
                                </router-link>
                            </li>

                            <li class="dropdown__menu-item" @click="show = false">
                                <router-link :to="{ name: 'Elysium', hash: '#fundamentals' }" class="dropdown__menu-link">
                                    Fundamentals at Elysium
                                </router-link>
                            </li>

                            <li class="dropdown__menu-item">
                                <a href="https://www.elysium.to/client/clientarea.php" class="dropdown__menu-link">
                                    Login
                                </a>
                            </li>

                            <li class="dropdown__menu-item">
                                <a href="https://www.elysium.to/client/register.php" class="dropdown__menu-link">
                                    Signup
                                </a>
                            </li>
                        </ul>
                    </div>
                </transition>
            </nav>
        </header>

        <div class="app-content flex">
            <router-view/>
        </div>
    </div>
</template>

<script>
export default {
    name: 'App',
    data() {
        return {show: false}
    },
    methods: {
        toggleMenu: function(action) {

        }
    }
}
</script>

<style>
    body {
        background-color: #f9f9f9;
    }

    h1, h2, h3, h4, p {
        font-family: 'Roboto', Lato, 'Helvetica Neue', Arial, Helvetica, sans-serif !important;
        font-weight: 400 !important;
        color: #232d39;
    }

    h1, h2, h3, h4 {
        font-weight: 900 !important;
    }

    h2 {
        line-height: 4rem;
    }

    h2 small {
        line-height: 2.5rem;
    }

    h1 {
        font-size: 3.5rem !important;
    }

    h2 {
        font-size: 4rem !important;
        text-shadow: 2px 2px 0px #c9bbad;
    }

    h3 {
        font-size: 2.5rem !important;
    }

    h4 {
        font-size: 1.6rem !important;
    }

    p.p-lg {
        font-size: 1.3rem !important;
    }

    .p-t {
        padding-top: 14px;
    }

    .m-t {
        margin-top: 14px;
    }

    .w-100 {
        width: 100% !important;
        max-width: 100% !important;
    }

    .centered {
        text-align: center !important;
    }

    i.icon {
        font-family: "Font Awesome 5 Pro" !important;
    }

    .ui.container.space {
        padding-bottom: 50px;
    }

    .ui.large.container {
        width: 1650px;
    }

    section.ui.container {
        padding-bottom: 2rem;
    }

    .ui.large.menu {
        border-radius: 0;
        border: none;
    }

    .comment .author {
        display: inline;
    }

    .elysium-brand {
        border-left: none !important;
    }

    .elysium-brand #logo {
        width: 140px;
    }

    .ui.top.menu {
        position: absolute;
        margin-bottom: 0;
        margin-top: 0;
        width: 100vw;
        background: rgba(0, 0, 0, .15);
    }

    .ui.top.menu .item {
        color: #fff;
    }

    .ui.top.menu .item:hover {
        color: #fff;
        text-decoration: underline;
    }

    .frontpage {
        min-height: 80vh;
        background: radial-gradient(circle, #1280e1 0%, #002069 100%);
        align-items: stretch;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .frontpage .text-sm {
        font-size: 30px;
        color: #fff;
        font-weight: 400;
        letter-spacing: 5.2px;
        text-transform: uppercase;
        display: inline-block;
    }

    .frontpage .text-lg {
        font-size: 60px;
        line-height: 50px;
        color: #fff;
        margin-bottom: 25px;
        text-transform: uppercase;
        font-weight: 700;
        font-family: 'Open Sans', sans-serif;
        max-width: 970px;
        display: inline-block;
    }

    .frontpage .body {
        align-items: center;
        display: flex;
        flex-grow: 1;
        flex-shrink: 0;
        padding: 3rem 1.5rem;
        margin-top: 51px;
        /* Bumps down because of absolute menu */
    }

    .frontpage .container {
        flex-grow: 1;
        flex-shrink: 1;
        margin: 0 auto;
        position: relative;
    }

    .frontpage .container img {
        max-height: 300px;
    }

    @media screen and (min-width: 1088px) {
        .frontpage .container, .menu .container {
            max-width: 960px;
            width: 960px;
        }
    }

    @media screen and (min-width: 1280px) {
        .frontpage .container, .menu .container {
            max-width: 1152px;
            width: 1152px;
        }
    }

    @media screen and (min-width: 1472px) {
        .frontpage .container, .menu .container {
            max-width: 1344px;
            width: 1344px;
        }
    }

    .section-2 {
        padding-top: 50px;
        background-size: 1800px;
        background-position: top;
        background-repeat: no-repeat;
        background-position-y: 30px;
    }

    .price {
        text-align: center;
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }

    .price .currency {
        display: inline-block;
        vertical-align: top;
        font-size: 1.3rem;
        font-weight: 700;
    }

    .price .value {
        font-size: 4rem;
        line-height: 4rem;
        font-weight: 300;
    }

    .price .period {
        font-size: 1.4rem;
    }

    .ui.card .wrapper {
        z-index: 2;
        height: 0;
    }

    .badge {
        height: 30px;
        background: #e85e38;
        width: 210px;
        text-align: center;
        font-size: 14px;
        line-height: 33px;
        font-family: sans-serif;
        color: #FFF;
        transform: rotate(-45deg);
        position: relative;
        top: 18px;
        left: -71px;
        box-shadow: 0px 0px 4px -1px rgba(58, 58, 58, 1);
    }

    #services .header h3 {
        margin-top: 0;
    }

    #services .header img {
        height: 70px;
    }

    #statistics {
        background: #fff;
        padding: 50px 0;
        box-shadow: inset 0px 0px 6px -2px rgba(58, 58, 58, 1);
    }

    #statistics i.fal {
        font-size: 3rem;
        padding-right: 15px;
    }

    #fundamentals {
        padding: 50px 0;
    }

    #fundamentals .segment {
        height: 100%;
        background: rgba(255, 255, 255, .95);
    }

    #fundamentals .segment i.fal {
        font-size: 2rem;
        margin-bottom: 5px;
    }

    #feedback .segment {
        min-height: 130px;
    }

    .section-3 {
        background: url('./assets/images/banner3.svg');
        background-size: 1920px;
        background-position: top;
        background-repeat: no-repeat;
    }

    .ui.middle.attached .step:first-child {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }

    .ui.middle.attached .step:last-child {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }

    .ui.steps .step {
        width: 25%;
    }

    .ui.steps .step:first-child {
        width: 50%;
    }

    .ui.steps .step:not(.active) i {
        margin: 0;
    }

    .mobile-buttons {
        display: none;
    }

    .mobile-buttons button:first-child {
        margin-bottom: 10px;
    }

    /* XS MOBILE */

    @media screen and (max-width: 500px) {
        h1 {
            font-size: 2.5rem !important;
        }
        h2 {
            font-size: 3rem !important;
            text-shadow: 2px 2px 0px #c9bbad;
        }
        h3 {
            font-size: 1.5rem !important;
        }
        h4 {
            font-size: 1.5rem !important;
        }
        p.p-lg {
            font-size: 1.1rem !important;
        }
        .frontpage .text-lg {
            font-size: 3rem;
            line-height: 40px;
        }
        #product-categories.buttons {
            display: none;
        }
        .mobile-buttons {
            display: initial;
        }
    }

    /* Mobile Menu */

    .top.menu .toggle {
        display: none !important;
    }

    .top.menu .toggle:hover {
        text-decoration: none !important;
    }

    .mobile.menu {
        display: none;
        position: fixed;
        height: 100vh;
        width: 100vw;
        background: radial-gradient(circle, #1280e1 0%, #002069 100%);
        z-index: 10;
    }

    @media screen and (max-width: 767px) {
        .hidden-stacked {
            display: none !important;
        }
    }

    @media screen and (max-width: 1000px) {
        .ui.steps .active.step .icon {
            width: 100%;
            margin: 0;
        }
        .ui.steps .active.step .content .title {
            text-align: center;
        }

        .section-2 {
            background-position-y: 90px;
        }
        .fancyfade {
            opacity: 0;
            left: 0;
            top: 20px;
            position: relative;
        }
        .section-3 {
            background-position-y: 260px;
        }
        .ui.top.menu {
            position: fixed;
            z-index: 9;
            background: radial-gradient(circle, rgba(18, 128, 225, .4) 0%, rgba(0, 32, 105, .4) 100%);
        }
        .top.menu .container {
            margin: 0 !important;
        }
        .top.menu .toggle {
            display: initial !important;
        }
        .top.menu .item:not(.toggle) {
            display: none;
        }
        .frontpage .container h1 {
            text-align: center;
        }
    }

    .clearfix:after {
        visibility: hidden;
        display: block;
        font-size: 0;
        content: " ";
        clear: both;
        height: 0;
    }

    @keyframes fade-in {
        0% {
            opacity: 0;
            left: 20px;
            top: 0;
        }
        100% { 
            visibility: visible;
            opacity: 1;
            left: 0;
            top: 0;
        }
    }

    .fancyfade {
        animation-fill-mode: forwards;
        visibility: hidden;

        animation-delay: .5s;
        animation-name: fade-in;
        animation-duration: 1s;
        position: relative;
    }

    .product-button {
        border: none;
        color: #fff;
        border-radius: 20px;
        padding: 5px 20px;
        margin: 0 10px;
        cursor: pointer;
        transition: all .2s;
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

    .product-button.product-button--medium {
        padding: 10px 20px;
        border-radius: 40px;
        font-size: 1rem;
    }

    .product-button.product-button--medium img.emoji {
        height: 20px;
        position: relative;
        top: 0;
        left: 5px;
    }

    .product-button:hover, .product-button:focus {
        color: #fff;
    }

    .product-button .fal {
        position: relative;
        left: 0;
        transition: left .2s;
    }

    .product-button:hover .fal, .product-button:focus .fal {
        left: 5px;
    }

    .appbox_regular .product-button {
        background: #1d6fb8;
    }

    .appbox_regular .product-button:hover, .appbox_regular .product-button:focus {
        background: #204aa0;
    }

    .appbox_plus .product-button {
        background: #1d6a73;
    }

    .appbox_plus .product-button:hover, .appbox_plus .product-button:focus {
        background: #0f4048;
    }

    .baremetal .product-button {
        background: #fb6021;
    }

    .baremetal .product-button.disabled {
        background: #fc8555;
    }
    .baremetal .product-button.disabled:hover {
        cursor: default;
    }

    .baremetal .product-button:not(.disabled):hover, .baremetal .product-button:not(.disabled):focus {
        background: #c54815;
    }

    .header__nav {
        position: relative;
    }

    .header__navbar {
        display: flex;
        align-items: center;
        justify-content: flex-end;
    }

    .header__item {
        padding: 1rem;
    }

    .header--icon {
        width: 1.65rem;
        height: 1.65rem;
    }

    .header--button {
        top: 15px;
        right: 0;
        position: absolute;
        margin: 0;
        padding: 0;
        color: #fff;
        cursor: pointer;
        border: 1px solid transparent;
        background-color: transparent;
    }

    .header--button:focus {
        outline: 0;
    }

    header nav .header__link {
        margin-left: auto;
        position: relative;
    }

    .dropdown__menu {
        top: 100%;
        right: 0;
        top: 35px;
        position: absolute;
        z-index: 10;
        min-width: 300px;
        margin-top: 1rem;
        overflow-y: auto;
        padding: 2rem 1rem 2rem 0rem;
        border-radius: 12px;
        background-color: white;
        box-shadow: -1px 15px 30px -12px black;
        background-clip: padding-box;
    }

    .dropdown__menu-link {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        text-decoration: none;
        color: rgba(0, 0, 0, 0.6);
        padding: 0.8rem 0 0.8rem 2rem;
        margin-top: 0.2rem;
        margin-bottom: 0.2rem;
        border-radius: 0 50px 50px 0;
    }

    .dropdown__menu-link:hover {
        color: #1c6fb8;
        background-color: rgba(28, 111, 184, 0.2);
    }

    .dropdown__menu-svg {
        width: 1.5rem;
        height: 1.5rem;
    }

    .dropdown__menu-text {
        font-weight: 300;
        margin-left: 1rem;
        margin-right: 1rem;
    }

    .slide-fade-enter-active,
    .slide-fade-leave-active {
        transition: all 0.6s;
    }

    .slide-fade-enter,
    .slide-fade-leave-active {
        opacity: 0;
    }

    .slide-fade-enter {
        -webkit-transform: translateX(31px);
        transform: translateX(31px);
    }

    .slide-fade-leave-active {
        -webkit-transform: translateX(-31px);
        transform: translateX(-31px);
    }

    .dropdown-enter-active,
    .dropdown-leave-active {
        transition: all 1s;
    }

    .dropdown-enter,
    .dropdown-leave-to {
        opacity: 0;
        -webkit-transform: translateY(30px);
        transform: translateY(30px);
    }

    .main {
        margin: 6rem;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .main__subtitle {
        color: #4f5959;
        font-weight: 100;
        margin-bottom: 2rem;
    }

    .main__link {
        margin-right: 1.5rem;
        display: inline-block;
    }

    .main__link:last-child {
        margin-right: 0;
    }

    .main__svg {
        width: 2rem;
        height: 2rem;
        opacity: 0.6;
        color: #94a2b0;
    }

    .main__svg:hover {
        color: #ffad1f;
    }

    .dropdown__menu-nav {
        list-style: none;
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }

    .dropdown__menu-item {
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }

    .dropdown__menu hr {
        border: 0;
        height: 0;
        margin: 1.5rem 0;
        border-top: 1px solid #1c6fb8;
    }

    header nav.ui.container {
        position: relative;
        display: flex;
    }

    @media screen and (max-width: 770px) {
        .product-button {
            display: block !important;
            text-align: center;
        }

        .product-button:last-child {
            margin-top: 10px;
        }

        .product-button {
            line-height: 25px;
        }

        .product-button.product-button--large {
            line-height: 40px;
        }

        .product-button.product-button--large:last-child {
            margin-top: 20px;
        }
    }
</style>