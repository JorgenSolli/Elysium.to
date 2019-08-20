$(document).ready(function() {
    $(".toggle").on('click', function() {
        $(".mobile.menu").fadeIn();
    });

    $(".mobile.menu .item").on('click', function() {
        $(".mobile.menu").fadeOut();
    });

    setTimeout(function(){
        $(".fancyfade").animate({ opacity: 1, left: "0px", top: "0px" }, 'slow');
    }, 500);

    $.ajax({
        type: "GET",
        url: "https://manage.elysium.to/api/products/stock",
        success: function(res) {
            $.each(res, function(product, stock) {
                if (stock <= 0) {
                    $obj = $("#" + product);

                    $obj.find('.button').each(function() {
                        $(this).addClass('disabled').text('Out of stock');
                    });
                }
            });
        }
    });
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