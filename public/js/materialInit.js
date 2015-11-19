$(function(){
    Materialize.fadeInImage('.fadeMeIn');
    Materialize.showStaggeredList('.unknownList')

    $('.modal-trigger').leanModal();
    $('select').material_select();
    $(".button-collapse").sideNav();
});