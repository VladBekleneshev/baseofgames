var imgs = ['images/games/metal_gear_solid5_ground_zeroes.jpg',"images/games/the_crew.jpg","images/games/this_war_of_mine.jpg","images/games/gta-5.jpg"];
var text = ['<a class="slide_text" href="new.php">Новинки</a>','<a class="slide_text" href="sales.php">Скидки</a>','<a class="slide_text" href="popular.php">Популярное</a>','<a class="slide_text" href="pre-purchase.php">Предзаказ</a>'];
var n=0;
time=800;
play=setInterval("chgImg(0)", 7000);

function chgImg(number) {
if (number!=0) n=number-2;
 $('.slide_show').fadeOut(time, function() {    //для картинок
  $(this).attr('src', imgs[n]).fadeIn(time);
 });

 $('.slide_text').fadeOut(time, function() {    //для текста
  $(this).html(text[n]).fadeIn(time);
 });

n++;
if (n>=imgs.length) n=0;
}