
jQuery(document).ready(function() {	
	
    /*
        Background slideshow
    */
	$('.banner-area').backstretch([
	                     "images/backgrounds/1.jpg"
	                   , "images/backgrounds/2.jpg"
	                   , "images/backgrounds/3.jpg"
                           , "images/backgrounds/4.jpg"
	                  ], {duration: 3000, fade: 750});

        // при открытии модального окна
        $('#myModal').on('show.bs.modal', function (event) {
          // получить кнопку, которая его открыло
          var button = $(event.relatedTarget) 
          // извлечь информацию из атрибута data-content
          var content = button.data('content') 
          // вывести эту информацию в элемент, имеющий id="content"
          $(this).find('#content').text(content); 
        })

        //Код jQuery, установливающий маску для ввода телефона элементу input
        //1. После загрузки страницы,  когда все элементы будут доступны выполнить...
        $(function(){
          //2. Получить элемент, к которому необходимо добавить маску
          $("#subphone").mask("(999)-999-99-99");
        });
                          
});

// cowntdown function. Set the date by modifying the date in next line (June 1, 2012 00:00:00):
var austDay = new Date("August 1, 2016 00:00:00");
        $('#countdown').countdown({until: austDay, layout: '<div class="item"><p>{dn}</p> {dl}</div> <div class="item"><p>{hn}</p> {hl}</div> <div class="item"><p>{mn}</p> {ml}</div> <div class="item"><p>{sn}</p> {sl}</div>'});
        $('#year').text(austDay.getFullYear());

// smooth scrolling	
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});