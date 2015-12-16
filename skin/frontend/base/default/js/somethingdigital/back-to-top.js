(function($) {
  var BackToTop = {
    scrollAppears: 300,
    scrollSpeed: BackToTopConfig.speed,
    persistMethod: BackToTopConfig.persist,

    init: function() {
      if(this.persistMethod === 'persist') {
        this.bindPersistShow();
      } else if(this.persistMethod === 'scroll') {
        this.bindScrollShow();
      } else {
        return;
      }

      $('#back-to-top').on('click', function(e) {
        e.preventDefault();
        this.scrollToTop();
      }.bind(this));
    },
    scrollToTop: function() {
      $('html, body').animate({
        scrollTop: 0
      }, this.scrollSpeed);
    },
    bindPersistShow: function() {
      $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
          $('#back-to-top').fadeIn();
        } else {
          $('#back-to-top').fadeOut();
        }
      });
    },
    bindScrollShow: function() {
      var lastScrollTop = 0;
      $(window).scroll(function(e){
         var st = $(this).scrollTop();
         if (st > lastScrollTop){
           $('#back-to-top').fadeOut();
         } else {
           $('#back-to-top').fadeIn();
         }
         lastScrollTop = st;
      });
    },
  }
  BackToTop.init();
}(jQuery));