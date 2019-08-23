<template>
    <section id="difference">
        <div class="ui container space">
            <div class="ui two column centered stackable grid">
                <div class="column">
                    <div class="ui centered">
                        <h2>SHARED <br/>vs <br/>SHARED + & BAREMETAL</h2>
                        <p class="p-lg">
                            Compare our two infrastructures in the table below!
                        </p>
                    </div>
                </div>
            </div>

            <div class="p-t m-t">
                <div class="ui top attached mini unstackable steps">
                    <div class="active step">
                        <i class="fal fa-server icon"></i>
                        <div class="content">
                            <div class="title">Appbox</div>
                        </div>
                    </div>
                    <div class="step">
                        <div class="content">
                            <div class="title">Shared</div>
                        </div>
                    </div>
                    <div class="step">
                        <div class="content">
                            <div class="title">Shared + / Baremetal</div>
                        </div>
                    </div>
                </div>

                <div class="ui middle attached mini unstackable steps">
                    <div class="active step">
                        <i class="fal fa-hdd icon"></i>
                        <div class="content">
                            <div class="title">Disk I/O</div>
                        </div>
                    </div>
                    <div class="step">
                        NVMe
                    </div>
                    <div class="step">
                        NVMe
                    </div>
                </div>

                <div class="ui middle attached mini unstackable steps">
                    <div class="active step">
                        <i class="fal fa-chart-area icon"></i>
                        <div class="content">
                            <div class="title">Tautulli</div>
                        </div>
                    </div>
                    <div class="step">
                        <i class="fal fa-times-circle icon"></i>
                    </div>
                    <div class="step">
                        <i class="fal fa-check-circle icon"></i>
                    </div>
                </div>

                <div class="ui middle attached mini unstackable steps">
                    <div class="active step">
                        <i class="fal fa-microchip icon"></i>
                        <div class="content">
                            <div class="title">Support for Plex GPU transcode</div>
                        </div>
                    </div>
                    <div class="step">
                        <i class="fal fa-check-circle icon"></i>
                    </div>
                    <div class="step">
                        <i class="fal fa-check-circle icon"></i>
                    </div>
                </div>

                <div class="ui middle attached mini unstackable steps">
                    <div class="active step">
                        <i class="fal fa-tachometer icon"></i>
                        <div class="content">
                            <div class="title">Bandwidth</div>
                        </div>
                    </div>
                    <div class="step">
                        <div class="content">
                            <div class="title">1 Gbps</div>
                        </div>
                    </div>
                    <div class="step">
                        <div class="content">
                            <div class="title">1 Gbps</div>
                        </div>
                    </div>
                </div>

                <div class="ui middle attached mini unstackable steps">
                    <div class="active step">
                        <i class="fal fa-play icon"></i>
                        <div class="content">
                            <div class="title">Unlimited Direct Plays</div>
                        </div>
                    </div>
                    <div class="step">
                        <i class="fal fa-check-circle icon"></i>
                    </div>
                    <div class="step">
                        <i class="fal fa-check-circle icon"></i>
                    </div>
                </div>

                <div class="ui middle attached mini unstackable steps">
                    <div class="active step">
                        <i class="fal fa-video icon"></i>
                        <div class="content">
                            <div class="title">4k allowed</div>
                        </div>
                    </div>
                    <div class="step">
                        <i class="fal fa-times-circle icon"></i>
                    </div>
                    <div class="step">
                        <i class="fal fa-check-circle icon"></i>
                    </div>
                </div>

                <div class="ui bottom attached mini unstackable steps">
                    <div class="active step">
                        <i class="fal fa-browser icon"></i>
                        <div class="content">
                            <div class="title">Admin panel access(control your server)</div>
                        </div>
                    </div>
                    <div class="step">
                        <i class="fal fa-check-circle icon"></i>
                    </div>
                    <div class="step">
                        <i class="fal fa-check-circle icon"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: 'ElysiumComparison'
}
</script>

<style scoped>
    .ui.attached.steps {
        width: calc(100% + (-1px * 2)) !important;
        max-width: calc(100% + (-1px * 2));
    }
</style>
