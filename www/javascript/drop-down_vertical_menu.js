$(document).ready(function(){
 $('.spoiler_links').mouseenter(function(){
  $(this).children('div.spoiler_body').slideDown('normal');
 });
 $('.spoiler_links').mouseleave(function(){
  $(this).children('div.spoiler_body').slideUp('normal');
 });
});
