

    $('document').ready(function()
{

// Custom
var customElement = $("<img />", {
    "css"   : {
        "font-size"     : "40px",
        "text-align"    : "center",
        "padding"       : "10px",
        "width"       : "250%"
    },
    "class" : "upDown",
    "src" : "assets/images/logo.png"
});
$.LoadingOverlay("show", {
    image       : "",
    custom      : customElement
});


window.addEventListener('load', function () {






    
                    $.LoadingOverlay("hide", {
    image       : "",
    custom      : customElement
});
               



}, false);




});