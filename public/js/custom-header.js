$(window).on("scroll", function () {
    if ($(this).scrollTop() > 150) {
        $("header").addClass("scrolled");
    } else {
        $("header").removeClass("scrolled");
    }
});
// $(document).ready(function () {
//     $("header li.nav-item.dropdown").click(function(){
//         $(this).toggleClass("showhide").siblings().removeClass("showhide");
//     });
// });
$("header li.nav-item.dropdown").click(function(e) {
    e.stopPropagation(); // prevent click inside dropdown from triggering document click
    $(this).toggleClass("showhide").siblings().removeClass("showhide");
});

// Remove 'showhide' when clicking outside
$(document).click(function(e) {
    if (!$(e.target).closest("header li.nav-item.dropdown").length) {
        $("header li.nav-item.dropdown").removeClass("showhide");
    }
});
