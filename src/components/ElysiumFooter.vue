<template>
    <footer id="footer">
        <div class="ui large container">
            <div class="ui centered grid">
                <div class="doubling stackable three column row">
                    <div class="centered column">
                        <img :src="require(`@/assets/images/elysium_logo_simple.svg`)" alt="Elysium logo"/>
                        <p>&copy; 2016 - {{ year }}, Elysium.to.</p>
                    </div>

                    <div class="centered column">
                        <div class="ui inverted selection list">
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
                            <a href="#feedback" class="item">
                                <div class="content">
                                    <div class="header">Feedback</div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="centered column">
                        <div class="ui inverted selection huge list">
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
