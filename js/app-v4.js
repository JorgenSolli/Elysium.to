var testimonials = [
    {
        name: 'Green',
        data: 'Thanks bud put the server to the test you have one wicked setup 3 Transcodes to 720P @ 4 mb , i could up it later lol.'
    },
    {
        name: 'trudysarge',
        data: 'Wow this is the future way to share plex as gives you extra control rather than just paying for a share , tons of content available and updated regularly and swiftly , request system and discord to boot , after setting up I asked for a few extra tweaks to added to my plex setup , which was provided quickly and friendly , will be staying a customer for a while , thanks again'
    },
    {
        name: 'Kyle009',
        data: 'Such a great service, reliability is perfect and seemingly avoiding the Plex banhammer that frequently gets swung. Great response from support at all hours. Well worth the sub!'
    },
    {
        name: 'delusion',
        data: 'After trying this service for the past week, I can safely say this is by far the best service I’ve used. Keep up the great work.'
    },
    {
        name: 'IPTV_Reseller',
        data: 'From North America. Everything loads instantly. Huge channel selection and awesome customer support in the discord channel. Highly recommended this is amazing!'
    },
    {
        name: 'dbuk44',
        data: 'I use this service. Had a few teething troubles but the support via discord has been virtually instant. It’s a class act; large library, streams great to UK, ombi requests page, plus the benefit of being in control your own plex server - which means ive been able to set the kids up as managed user, plus sync and download. If he keeps prices at this mark ill be continuing... it’s good.'
    },
    {
        name: 'dixienormus1979',
        data: 'This is an excellent service. I just got a 48hr trial and will definitely be paying for the service.<br/>Exactly as described and a great community and admins to assist you it getting it up and running'
    }
];

var f = 0;
var fl = 6;
var $name = $("#feedback h4");
var $data = $("#feedback p");

$(document).ready(function() {
    $('.special.card .image').dimmer({
        on: 'hover'
    });

    $("#product-categories button").on('click', function(e) {
    	var targets = ['shared', 'dedicated'];
    	var target = "#" + $(this).data('target');

    	for (var i = 0; i < targets.length; i++) {
    		$("#" + targets[i]).hide();
    		$("[data-target=" + "'" + targets[i] + "']").removeClass('primary yellow');
    	}

    	$(target).show();
    	if (target == "#dedicated") {
    		$(this).addClass('primary');
    	} else {
    		$(this).addClass('yellow');
    	}

    	e.stopPropagation();
    });

    var changeFeedback = setInterval(changeFeedback, 15000); 
    function changeFeedback() {
        f++;
        if (f == fl) {
            f = 0;
        }
        
        $name.fadeOut(function() {
            $name.text(testimonials[f].name).fadeIn();
        });

        $data.fadeOut(function() {
            $data.text(testimonials[f].data).fadeIn();
        });
    }

    $(".toggle").on('click', function() {
        $(".mobile.menu").fadeIn();
    });

    $(".mobile.menu .item").on('click', function() {
        $(".mobile.menu").fadeOut();
    });

    setTimeout(function(){
        $(".fancyfade").animate({ opacity: 1, left: "0px", top: "0px" }, 'slow');
    }, 500);
});   

/* Smooth Scrolling */
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            block: "start", 
            inline: "nearest",
            behavior: 'smooth'
        });
    });
});