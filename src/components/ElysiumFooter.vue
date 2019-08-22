<template>
    <footer id="footer">
        <div class="ui large container">
            <div class="ui centered equal width grid mobile reversed stackable">
                <div class="centered column">
                    <img :src="require(`@/assets/images/elysium_logo_simple.svg`)" alt="Elysium logo"/>
                    <p>&copy; 2016 - {{ year }}, Elysium.to.</p>
                </div>

                <div class="centered column">
                    <div class="ui selection huge list">
                        <a target="blank" href="https://discord.gg/013LDwtvV6OkRjPf9" class="item">
                            <div class="content">
                                <div class="header">
                                    <i class="fab fa-discord"></i>
                                    Join our Discord
                                </div>
                            </div>
                        </a>
                        <a href="#products" class="item">
                            <div class="content">
                                <div class="header">
                                    <i class="fal fa-server"></i>
                                    Appbox Solutions starting at $9.99/month
                                </div>
                            </div>
                        </a>
                        <a href="https://manage.elysium.to" class="item">
                            <div class="content">
                                <div class="header">
                                    <i class="fal fa-stethoscope"></i>
                                    Server management page
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>

<script>
export default {
    name: 'ElysiumFooter',
    computed: {
        year: function() {
            return new Date().getFullYear()
        }
    }
}
</script>

<style>
#footer {
    padding: 50px 0 100px 0;
    background-color: #f9f9f9;
    background: url('../assets/images/svg/footer_bg.svg');
    background-size: cover;
}

#footer p {
    color: #202020;
}

#footer img {
    height: 80px;
}

#footer .list {
    background: transparent;
    box-shadow: 0 1px 2px 0 rgba(34, 36, 38, .15);
    padding: 0;
}

#footer .list .item {
    border-radius: 0;
    border-bottom-color: rgba(34, 36, 38, 0.15);
    border-bottom-style: solid;
    border-bottom-width: 1px;
}

#footer .list .item:last-child {
    border-bottom-color: rgba(34, 36, 38, 0);
}

#footer .list:not(.huge) .item:hover {
    text-decoration: underline;
}

@media screen and (max-width: 900px) {
    #footer p {
        color: #fff;
    }
}
</style>
