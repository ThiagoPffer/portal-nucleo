// Side Menu

$("#menu-close, .overlay").click(function(e) {
    e.preventDefault();
    $("#sidebar-wrapper").toggleClass("active");
    $(".overlay").removeClass("show");
});
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#sidebar-wrapper").toggleClass("active");
    $(".overlay").addClass("show");
});