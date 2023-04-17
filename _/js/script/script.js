$(document).ready(function(){

$('section.cover-text h1').fadeToggle(700);
$('section.cover-text h1').fadeIn(4000);
$('section.cover-text p').fadeToggle(700);
$('section.cover-text p').fadeIn(4000);

$('.row .layout1').fadeToggle(0);
$('.row .layout1').fadeIn(4000);

$("section").animate({

bottom:'20px'
},500);



});