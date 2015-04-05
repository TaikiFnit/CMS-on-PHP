$(function(){
    $("#accordion").accordion();
    $('.dropdown-toggle').dropdown();
    $("[data-toggle=tooltip-top]").tooltip({
        placement: 'top'
    });
    $("[data-toggle=tooltip-bottom]").tooltip({
        placement: 'bottom'
    });
});