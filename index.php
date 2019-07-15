<!DOCTYPE html>
<html lang="en">
<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123427982-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-123427982-2');
    </script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#ffffff">
    <title>Elysium</title>

    <!--==== FONTS ====-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,900" rel="stylesheet">

    <!--==== FAVICON ====-->
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/site.webmanifest">
    <link rel="mask-icon" href="images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!--==== Base CSS ====-->
    <link rel="stylesheet" href="css/semantic-v1.min.css">
    
    <!--==== Font Awesome ====-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.1.0/css/light.css" integrity="sha384-ANTAgj8tbw0vj4HgQ4HsB886G2pH15LXbruHPCBcUcaPAtn66UMxh8HQcb1cH141" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.1.0/css/brands.css" integrity="sha384-C1HxUFJBptCeaMsYCbPUw8fdL2Cblu3mJZilxrfujE+7QLr8BfuzBl5rPLNM61F6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.1.0/css/fontawesome.css" integrity="sha384-PnWzJku7hTqk2JREATthkLpYeVVGcBbXG5yEzk7hD2HIr/VxffIDfNSR7p7u4HUy" crossorigin="anonymous">
    
    <!--==== Main CSS ====-->
    <link rel="stylesheet" href="css/app-v6.css">
</head>
<body>
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
                    <a href="#feedback" class="item">
                        <div class="content">
                            <div class="header">Feedback</div>
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
                <img id="logo" src="images/elysium_logo_white.svg" alt="Logo"/>
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
            <a class="item" href="#feedback">
                Feedback
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
                            <img class="fancyfade" src="images/banner1_alt.svg" alt="Banner Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-2">
            <section id="products" class="ui container space">
                <div class="ui grid">
                    <div class="sixteen wide column">
                        <div class="ui container space centered">
                            <h2>OUR PRODUCTS</h2>
                            <div id="product-categories" class="ui large buttons">
                                <button data-target="shared-plus" class="ui blue button">SHARED APPBOX+</button>
                                <button data-target="baremetal" class="ui button">BAREMETAL</button>
                                <button data-target="shared" class="ui button">SHARED APPBOX</button>
                            </div>

                            <div id="product-categories" class="mobile-buttons">
                                <button data-target="shared-plus" class="ui blue button w-100">SHARED APPBOX+</button>
                                <button data-target="baremetal" class="ui button w-100">BAREMETAL</button>
                                <button data-target="shared" class="ui button w-100">SHARED APPBOX</button>
                            </div>
                        </div>

                        <div id="shared-plus">
                            <div class="ui stackable equal width grid">
                                <div class="column">
                                    <div id="shared_appbox_2_plus" class="ui special centered card">
                                        <div class="blurring dimmable image">
                                            <div class="ui dimmer">
                                                <div class="content">
                                                    <div class="center">
                                                        <a href="https://elysium.to/client/cart.php?a=add&pid=23" class="ui inverted button">Order now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <img class="product" alt="Shared Appbox+ 2" src="images/dedicated2.svg">
                                        </div>
                                        <div class="content">
                                            <h3 class="header">Shared Appbox+ 2</h3>
                                            <div class="ui relaxed divided list">
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                            6 transcodes
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                            Unlimited Direct Plays
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                            1gbps Bandwidth
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                            Plex Sync(If plexpass)
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                            Download via plex!
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                            Invite friends!
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                            Run Tautulli!
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                        4k Movies
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="content">
                                                        <div class="price">
                                                            <span class="currency">$</span>
                                                            <span class="value">29.99</span>
                                                            <span class="period">/MO</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="https://elysium.to/client/cart.php?a=add&pid=23" class="ui large bottom attached primary button">
                                            <i class="fal fa-shopping-cart"></i>
                                            Order now
                                        </a>
                                    </div>
                                </div>

                                <div class="column">
                                    <div id="shared_appbox_1_plus" class="ui special centered card">
                                        <div class="wrapper">
                                            <div class="badge">
                                                POPULAR
                                            </div>
                                        </div>
                                        <div class="blurring dimmable image">
                                            <div class="ui dimmer">
                                                <div class="content">
                                                    <div class="center">
                                                        <a href="https://elysium.to/client/cart.php?gid=6" class="ui inverted button">Order Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <img class="product" alt="Shared Appbox+ 1" src="images/dedicated1.svg">
                                        </div>
                                        <div class="content">
                                            <h3 class="header">Shared Appbox+ 1</h3>
                                            <div class="ui relaxed divided list">
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                            4 transcodes
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                            Unlimited Direct Plays
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                            1gbps Bandwidth
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                            Plex Sync(If plexpass)
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                            Download via plex!
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                            Invite friends!
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                            Run Tautulli!
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                        4k Movies
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="content">
                                                        <div class="price">
                                                            <span class="currency">$</span>
                                                            <span class="value">19.99</span>
                                                            <span class="period">/MO</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="https://elysium.to/client/cart.php?gid=6" class="ui large bottom attached primary button">
                                            <i class="fal fa-shopping-cart"></i>
                                            Order Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="baremetal" style="display: none">
                            <div class="ui stackable equal width grid">
                                <div class="column">
                                    <div id="baremetal" class="ui special centered card">
                                        <div class="blurring dimmable image">
                                            <div class="ui dimmer">
                                                <div class="content">
                                                    <div class="center">
                                                        <a href="https://elysium.to/client/cart.php?a=add&pid=16" class="ui inverted button">Order now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <img class="product" alt="Baremetal" src="images/dedicated3.svg">
                                        </div>
                                        <div class="content">
                                            <h3 class="header">Baremetal 1</h3>
                                            <div class="ui relaxed divided list">
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                            Up to <strong>25* transcodes!</strong>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                            Unlimited Direct Plays
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                            1gbps Bandwidth
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                            Plex Sync(If plexpass)
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                            Download via plex!
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                            Invite friends!
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                            Run Tautulli!
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                        4k Movies
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                            Reseller panel**<br/>
                                                            Deploy up to 12 containers
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="content">
                                                        <div class="price">
                                                            <span class="currency">$</span>
                                                            <span class="value">60</span>
                                                            <span class="period">/MO***</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="https://elysium.to/client/cart.php?a=add&pid=16" class="ui large bottom attached primary button">
                                            <i class="fal fa-shopping-cart"></i>
                                            Order now
                                        </a>
                                    </div>
                                </div>
                                <div class="column">
                                    <div id="baremetal2" class="ui special centered card">
                                        <div class="blurring dimmable image">
                                            <div class="ui dimmer">
                                                <div class="content">
                                                    <div class="center">
                                                        <a href="https://elysium.to/client/cart.php?a=add&pid=25" class="ui inverted button">Order now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <img class="product" alt="Baremetal" src="images/dedicated3.svg">
                                        </div>
                                        <div class="content">
                                            <h3 class="header">Baremetal 2</h3>
                                            <div class="ui relaxed divided list">
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                            Up to <strong>25* transcodes!</strong>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                            Unlimited Direct Plays
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                            1gbps Bandwidth
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                            Plex Sync(If plexpass)
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                            Download via plex!
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                            Invite friends!
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                            Run Tautulli!
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                            4k Movies
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                            Reseller panel**<br/>
                                                            Deploy up to 22 containers
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="content">
                                                        <div class="price">
                                                            <span class="currency">$</span>
                                                            <span class="value">75</span>
                                                            <span class="period">/MO***</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="https://elysium.to/client/cart.php?a=add&pid=25" class="ui large bottom attached primary button">
                                            <i class="fal fa-shopping-cart"></i>
                                            Order now
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="ui space centered" style="margin-top: 15px;">
                                <div class="ui compact info message">
                                    *With Plexpass and GPU transcoding enabled<br/>
                                    **Optional addon to deploy customer appboxes on baremetal 1, no more then 12 suggested - On baremetal 2, no more then 22 suggested. If more customers required, additional storage must be purchased
                                    ***If used for reselling to 25+ people, a 50$/month bandwidth package will be required<br/>
                                </div>
                            </div>
                        </div>

                        <div id="shared" style="display: none">
                            <div class="ui stackable equal width grid">
                                <div class="column">
                                    <div id="shared_appbox_1" class="ui special centered card">
                                        <div class="wrapper">
                                            <div class="badge">
                                                POPULAR
                                            </div>
                                        </div>
                                        <div class="blurring dimmable image">
                                            <div class="ui dimmer">
                                                <div class="content">
                                                    <div class="center">
                                                        <a href="https://www.elysium.to/client/cart.php?a=add&pid=1" class="ui inverted button">Order Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <img class="product" alt="Shared Appbox 1" src="images/shared1.svg">
                                        </div>
                                        <div class="content">
                                            <h3 class="header">Shared Appbox 1</h3>
                                            <div class="ui relaxed divided list">
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                            1 transcode
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                            Unlimited Direct Plays
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                            1gbps Bandwidth
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                            Plex Sync(If plexpass)
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                            Download via plex!
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                            Invite friends!
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="content">
                                                        <div class="price">
                                                            <span class="currency">$</span>
                                                            <span class="value">9.99</span>
                                                            <span class="period">/MO</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="https://www.elysium.to/client/cart.php?a=add&pid=1" class="ui large bottom attached primary button">
                                            <i class="fal fa-shopping-cart"></i>
                                            Order Now
                                        </a>
                                    </div>
                                </div>

                                <div class="column">
                                    <div id="shared_appbox_2" class="ui special centered card">
                                        <div class="blurring dimmable image">
                                            <div class="ui dimmer">
                                                <div class="content">
                                                    <div class="center">
                                                        <a href="https://www.elysium.to/client/cart.php?a=add&pid=7" class="ui inverted button">Order Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <img class="product" alt="Shared Appbox 2" src="images/shared2.svg">
                                        </div>
                                        <div class="content">
                                            <h3 class="header">Shared Appbox 2</h3>
                                            <div class="ui relaxed divided list">
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                            2-3 transcodes
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                            Unlimited Direct Plays
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                            1gbps Bandwidth
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                            Plex Sync(If plexpass)
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                            Download via plex!
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                            Invite friends!
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="content">
                                                        <div class="price">
                                                            <span class="currency">$</span>
                                                            <span class="value">15</span>
                                                            <span class="period">/MO</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="https://www.elysium.to/client/cart.php?a=add&pid=7" class="ui large bottom attached primary button">
                                            <i class="fal fa-shopping-cart"></i>
                                            Order Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- BEGIN MAILFORGE EMBED FORM  -->
                        <div class="ui container space centered">
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
                        </div>
                        <!-- END OF MAILFORGE EMBED FORM -->
                    </div>
                </div>
            </section>

            <section id="services" class="ui container space">
                <div class="ui two column centered stackable grid">
                    <div class="column">
                        <div class="ui centered">
                            <h2>OUR SERVICES</h2>
                            <p class="p-lg">
                                Elysium provides a range of service with the primary goal of allowing customers to run Plex in an easily managed environment
                            </p>
                        </div>
                    </div>
                </div>

                <div class="ui stackable grid">
                    <div class="eight wide column centered">
                        <div class="header">
                            <img src="images/unique.png" alt="Unique approach"/>
                            <h3>Unique approach to Plex Hosting!</h3>
                        </div>
                        <p class="p-lg">
                            With our unique approach to plex hosting, we can promise you will never find another service like ours! Unique libraries, full control of the Plex Media Server, admin access and more!
                        </p>
                    </div>
                    <div class="eight wide column centered">
                        <div class="header">
                            <img src="images/bandwidth.png" alt="Unique approach"/>
                            <h3>10gbps internal bandwidth allows for quick loading of all media!</h3>
                        </div>
                        <p class="p-lg">
                            All our products are hosted on hardware that is locally connected with a 10gbps link, insuring that media starts lightning fast on your Plex Server!
                        </p>
                    </div>
                </div>

                <div class="ui stackable grid">
                    <div class="eight wide column centered">
                        <div class="header">
                            <img src="images/control.png" alt="Unique approach"/>
                            <h3>Control your own server, with our custom, professional admin page!</h3>
                        </div>
                        <p class="p-lg">
                            We have developed our own custom admin page for all customers to use, with a unique login and an overview of your personal products, allowing you to stop, start, kill, restart and update your server at any time!
                        </p>
                    </div>
                </div>
            </section>
        </div>

        <div class="section-3">
            <section id="fundamentals">
                <div class="ui container">
                    <div class="ui two column centered stackable grid">
                        <div class="column">
                            <div class="ui centered">
                                <h2>FUNDAMENTALS AT ELYSIUM</h2>
                                <p class="p-lg">
                                    At Elysium we strive to provide the best and most reliable Plex Server hosting as possible
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="ui centered equal height grid">
                        <div class="doubling stackable three column row">
                            <div class="centered column">
                                <div class="ui raised segment">
                                    <i class="fal fa-desktop"></i>
                                    <p class="p-lg">
                                        Monitoring tools for customers servers
                                    </p>
                                </div>
                            </div>

                            <div class="centered column">
                                <div class="ui raised segment">
                                    <i class="fal fa-tachometer"></i>
                                    <p class="p-lg">
                                        Optional CDN configurations for blazing fast network speed in most of the world!
                                    </p>
                                </div>
                            </div>

                            <div class="centered column">
                                <div class="ui raised segment">
                                    <i class="fal fa-life-ring"></i>
                                    <p class="p-lg">
                                        Fast ticket response times, professional and mature support
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ui centered grid">
                        <div class="doubling stackable three column row">
                            <div class="centered column">
                                <div class="ui raised segment">
                                    <i class="fal fa-box-check"></i>
                                    <p class="p-lg">
                                        Only the best hardware! No server auction hardware here!
                                    </p>
                                </div>
                            </div>

                            <div class="centered column">
                                <div class="ui raised segment">
                                    <i class="fal fa-code"></i>
                                    <p class="p-lg">
                                        In-house developers allowing us to build custom tools, such as our custom admin page allowing customers more control then ever!
                                    </p>
                                </div>
                            </div>

                            <div class="centered column">
                                <div class="ui raised segment">
                                    <i class="fal fa-stethoscope"></i>
                                    <p class="p-lg">
                                        General uptime monitoring that clients can follow(see weekly uptime of all nodes!)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ui centered grid">
                        <div class="doubling stackable three column row">
                            <div class="centered column">
                                <div class="ui raised segment">
                                    <i class="fal fa-comments"></i>
                                    <p class="p-lg">
                                        Multiple customer support channels(Discord, email, tickets)
                                    </p>
                                </div>
                            </div>

                            <div class="centered column">
                                <div class="ui raised segment">
                                    <i class="fal fa-hdd"></i>
                                    <p class="p-lg">
                                        Fast SSD hardware to I/O resulting in fast library load times!
                                    </p>
                                </div>
                            </div>

                            <div class="centered column">
                                <div class="ui raised segment">
                                    <i class="fal fa-code-branch"></i>
                                    <p class="p-lg">
                                        Constantly expanding, we never run out of stock as we can expand with new nodes within hours!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

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
                                    <div class="title">Dedicated SSD Disk</div>
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
                                <i class="fal fa-hdd icon"></i>
                                <div class="content">
                                    <div class="title">Disk I/O</div>
                                </div>
                            </div>
                            <div class="step">
                                SSD
                            </div>
                            <div class="step">
                                NVMe(4x faster)
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
                                    <div class="title">4k Movies</div>
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
        </div>

        <section id="feedback">
            <div class="ui two column centered stackable grid">
                <div class="column">
                    <div class="ui centered">
                        <h2>FEEDBACK</h2>
                    </div>
                </div>
            </div>

            <div class="ui container space p-t m-t">
                <div class="cd-author">
                    <div class="ui piled segment">
                        <h4 data-feedback="name" class="ui header">Green</h4>
                        <p data-feedback="data">
                            Thanks bud put the server to the test you have one wicked setup 3 Transcodes to 720P @ 4 mb , i could up it later lol.
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <footer id="footer">
            <div class="ui large container">
                <div class="ui centered grid">
                    <div class="doubling stackable three column row">
                        <div class="centered column">
                            <img src="images/elysium_logo_simple.svg" alt="Elysium logo"/>
                            <p>&copy; 2016<script>new Date().getFullYear()>2010&&document.write("-"+new Date().getFullYear());</script>, Elysium.to.</p>
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
    </div>

    <!-- =============== JQUERY =============== -->
    <script src="js/jquery-2.1.4.min.js"></script>

    <!-- =============== PLUGIN =============== -->
    <script src="js/semantic.min.js"></script>

    <script src="js/app-v7.js"></script>
</body>
</html>
