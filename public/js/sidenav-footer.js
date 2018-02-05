(function ($) {
    // Hide sideNav
    $('.button-collapse').sideNav({
        menuWidth: 300,
        edge: 'left',
        closeOnClick: false,
        draggable: true
    });
    $(document).ready(function(){
        $('.tooltipped').tooltip({delay: 50});
    });
    $('select').material_select();
    // $('.collapsible').collapsible();

})(jQuery);
