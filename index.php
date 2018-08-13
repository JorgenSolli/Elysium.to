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
    <link rel="stylesheet" href="css/app-v3.css">
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
                                <span class="text-lg">Plex Media Streaming Service You have ever experienced!</span>
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
                                <button data-target="shared" class="ui yellow button">SHARED APPBOX</button>
                                <div class="or"></div>
                                <button data-target="dedicated" class="ui button">DEDICATED APPBOX</button>
                            </div>

                            <div id="product-categories" class="mobile-buttons">
                                <button data-target="shared" class="ui yellow button w-100">SHARED APPBOX</button>
                                <button data-target="dedicated" class="ui button w-100">DEDICATED APPBOX</button>
                            </div>
                        </div>
                        <div id="shared">
                            <div class="ui stackable equal width grid">
                                <div class="column">
                                    <div class="ui special centered card">
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

                                <div class="column">
                                    <div class="ui special raised centered card">
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
                                                            <span class="value">8</span>
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
                                    <div class="ui special centered card">
                                        <div class="blurring dimmable image">
                                            <div class="ui dimmer">
                                                <div class="content">
                                                    <div class="center">
                                                        <div class="ui inverted disabled button">Out of stock</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <img class="product" alt="Shared Appbox 3" src="images/shared3.svg">
                                        </div>
                                        <div class="content">
                                            <h3 class="header">Shared Appbox 3</h3>
                                            <div class="ui relaxed divided list">
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                            5 transcodes
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
                                                            <span class="value">20</span>
                                                            <span class="period">/MO</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="ui large bottom attached primary disabled button">
                                            <i class="fal fa-shopping-cart"></i>
                                            Out of stock
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="dedicated" style="display: none">
                            <div class="ui stackable equal width grid">
                                <div class="column">
                                    <div class="ui special centered card">
                                        <div class="blurring dimmable image">
                                            <div class="ui dimmer">
                                                <div class="content">
                                                    <div class="center">
                                                        <a href="https://www.elysium.to/client/cart.php?a=add&pid=6" class="ui inverted button">Order Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <img class="product" alt="Dedicated Appbox 2" src="images/dedicated2.svg">
                                        </div>
                                        <div class="content">
                                            <h3 class="header">Dedicated Appbox 2</h3>
                                            <div class="ui relaxed divided list">
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                            Unlimited Transcodes(4 suggested)
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
                                                            10gbps Bandwidth
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
                                                            Mount your own NFS/CIFS storage!
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
                                                        <div class="price">
                                                            <span class="currency">$</span>
                                                            <span class="value">30</span>
                                                            <span class="period">/MO</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="https://www.elysium.to/client/cart.php?a=add&pid=6" class="ui large bottom attached primary button">
                                            <i class="fal fa-shopping-cart"></i>
                                            Order Now
                                        </a>
                                    </div>
                                </div>

                                <div class="column">
                                    <div class="ui special centered raised card">
                                        <div class="wrapper">
                                            <div class="badge">
                                                POPULAR
                                            </div>
                                        </div>
                                        <div class="blurring dimmable image">
                                            <div class="ui dimmer">
                                                <div class="content">
                                                    <div class="center">
                                                        <a href="https://www.elysium.to/client/cart.php?a=add&pid=13" class="ui inverted button">Order Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <img class="product" alt="Dedicated Appbox 1" src="images/dedicated1.svg">
                                        </div>
                                        <div class="content">
                                            <h3 class="header">Dedicated Appbox 1</h3>
                                            <div class="ui relaxed divided list">
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                            Unlimited Transcodes(2 suggested)
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
                                                            10gbps Bandwidth
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
                                                            Mount your own NFS/CIFS storage!
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
                                                        <div class="price">
                                                            <span class="currency">$</span>
                                                            <span class="value">18</span>
                                                            <span class="period">/MO</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="https://www.elysium.to/client/cart.php?a=add&pid=13" class="ui large bottom attached primary button">
                                            <i class="fal fa-shopping-cart"></i>
                                            Order Now
                                        </a>
                                    </div>
                                </div>

                                <div class="column">
                                    <div class="ui special centered card">
                                        <div class="blurring dimmable image">
                                            <div class="ui dimmer">
                                                <div class="content">
                                                    <div class="center">
                                                        <a href="https://www.elysium.to/client/cart.php?a=add&pid=15" class="ui inverted button">Order Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <img class="product" alt="Dedicated Appbox 3" src="images/dedicated3.svg">
                                        </div>
                                        <div class="content">
                                            <h3 class="header">Dedicated Appbox 3</h3>
                                            <div class="ui relaxed divided list">
                                                <div class="item">
                                                    <div class="content">
                                                        <p class="header">
                                                            Unlimited Transcodes(6 suggested)
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
                                                            10gbps Bandwidth
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
                                                            Mount your own NFS/CIFS storage!
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
                                                        <div class="price">
                                                            <span class="currency">$</span>
                                                            <span class="value">45</span>
                                                            <span class="period">/MO</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="https://www.elysium.to/client/cart.php?a=add&pid=15" class="ui large bottom attached primary button">
                                            <i class="fal fa-shopping-cart"></i>
                                            Order Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="services" class="ui container space">
                <div class="ui two column centered stackable grid">
                    <div class="column">
                        <div class="ui centered">
                            <h2>OUR SERVICES</h2>
                            <p class="p-lg">
                                Elysium provides a range of service with the primary goal of allowing customers to stream a large variety of media across as large a range of platforms as possible!
                            </p>
                        </div>
                    </div>
                </div>

                <div class="ui stackable grid">
                    <div class="eight wide column centered">
                        <div class="header">
                            <img src="images/unique.png" alt="Unique approach"/>
                            <h3>Unique Approach to Plex Streaming!</h3>
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
                            <img src="images/sonarr.png" alt="Unique approach"/>
                            <h3>Sonarr, Radarr, Requests(Ombi), Organizr</h3>
                        </div>
                        <p class="p-lg">
                            We make use of these applications to insure automatic and daily updates of Movies and TV Shows, users can easily request new content via our request page, and keep track of weekly TV Shows via Organizr!
                        </p>
                    </div>
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

        <section id="statistics">
            <div class="ui large container">
                <div class="ui centered grid">
                    <div class="doubling stackable four column row">
                        <div class="centered column">
                            <i class="fal fa-film"></i>
                            <div class="ui statistic">
                                <div class="value">
                                    4,500+
                                </div>
                                <div class="label">
                                    Movies
                                </div>
                            </div>
                        </div>

                        <div class="centered column">
                            <i class="fal fa-tv"></i>
                            <div class="ui statistic">
                                <div class="value">
                                    900+
                                </div>
                                <div class="label">
                                    TV Shows
                                </div>
                            </div>
                        </div>

                        <div class="centered column">
                            <i class="fal fa-fire"></i>
                            <div class="ui statistic">
                                <div class="value">
                                    33,000+
                                </div>
                                <div class="label">
                                    Episodes
                                </div>
                            </div>
                        </div>

                        <div class="centered column">
                            <i class="fal fa-hdd"></i>
                            <div class="ui statistic">
                                <div class="value">
                                    70+
                                </div>
                                <div class="label">
                                    TeraBytes
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="section-3">
            <section id="fundamentals">
                <div class="ui container">
                    <div class="ui two column centered stackable grid">
                        <div class="column">
                            <div class="ui centered">
                                <h2>FUNDAMENTALS AT ELYSIUM</h2>
                                <p class="p-lg">
                                    At Elysium we strive to provide the best, cheapest and most reliable media streaming service as possible - Below are our key focuses and pillars
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
                                        Fast internal network between all nodes and storage for fast and reliable streaming!
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
                                <h2>SHARED <br/>vs <br/>DEDICATED APPBOX</h2>
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
                                    <div class="title">Dedicated</div>
                                </div>
                            </div>
                        </div>

                        <div class="ui middle attached mini unstackable steps">
                            <div class="active step">
                                <i class="fal fa-microchip icon"></i>
                                <div class="content">
                                    <div class="title">Dedicated CPU Resources</div>
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
                                <i class="fal fa-memory icon"></i>
                                <div class="content">
                                    <div class="title">Dedicated RAM</div>
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
                                    <div class="title">10 Gbps</div>
                                </div>
                            </div>
                        </div>

                        <div class="ui middle attached mini unstackable steps">
                            <div class="active step">
                                <i class="fal fa-expand icon"></i>
                                <div class="content">
                                    <div class="title">Ability to purchase added storage(up to 10tb)</div>
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
                                <i class="fal fa-link icon"></i>
                                <div class="content">
                                    <div class="title">Link 3rd party NFS/CIF share to Server</div>
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
                                <i class="fal fa-cogs icon"></i>
                                <div class="content">
                                    <div class="title">Unlimited Transcodes</div>
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
                                            Appbox Solutions starting at $8/month
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

    <script src="js/app-v4.js"></script>
</body>
</html>