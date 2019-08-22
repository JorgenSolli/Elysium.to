<template>
    <div id="app">
        <div class="mobile menu">
            <div class="ui container">
                <div class="column">
                    <div class="ui inverted selection huge list">
                        <a class="item toggle off">
                            <i class="fal fa-times"></i>
                        </a>
                        <a href="#products" class="item">
                            <div class="content">
                                <div class="header">Our products</div>
                            </div>
                        </a>
                        <a href="#services" class="item">
                            <div class="content">
                                <div class="header">Our services</div>
                            </div>
                        </a>
                        <a href="#fundamentals" class="item">
                            <div class="content">
                                <div class="header">Fundamentals at Elysium</div>
                            </div>
                        </a>
                        <a href="https://www.elysium.to/client/clientarea.php" class="item">
                            <div class="content">
                                <div class="header">Login</div>
                            </div>
                        </a>
                        <a href="https://www.elysium.to/client/register.php" class="item">
                            <div class="content">
                                <div class="header">Signup</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="ui large top stackable menu">
            <div class="ui container">
                <a class="item toggle">
                    <i class="fal fa-bars"></i>
                </a>
                <a class="item elysium-brand">
                    <img id="logo" src="./assets/images/elysium_logo_white.svg" alt="Logo"/>
                </a>
                <a class="item" href="#products">
                    Our products
                </a>
                <a class="item" href="#services">
                    Our services
                </a>
                <a class="item" href="#fundamentals">
                    Fundamentals at Elysium
                </a>
                <div class="right menu">
                    <div class="item">
                        <a href="https://www.elysium.to/client/clientarea.php" class="ui basic inverted button">Login</a>
                    </div>
                    <div class="item">
                        <a href="https://www.elysium.to/client/register.php" class="ui basic inverted button">Signup</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-content flex">
            <router-view/>
        </div>
    </div>
</template>

<script>
export default {
    name: 'App'
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

</style>