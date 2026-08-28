$(window).on("scroll", function () {
    if ($(this).scrollTop() > 150) {
        $("header").addClass("scrolled");
    } else {
        $("header").removeClass("scrolled");
    }
});
$('header li.nav-item.dropdown > .dropdown-toggle').click(function(e) {
    e.preventDefault();
    e.stopPropagation();
    $(this).parent().toggleClass("showhide").siblings().removeClass("showhide");
});

$(".service-item").click(function() {
    if (window.innerWidth < 1024) {
        $(this).toggleClass("open");
    }
});

// Remove 'showhide' when clicking outside
$(document).click(function(e) {
    if (!$(e.target).closest("header li.nav-item.dropdown").length) {
        $("header li.nav-item.dropdown").removeClass("showhide");
    }
});
