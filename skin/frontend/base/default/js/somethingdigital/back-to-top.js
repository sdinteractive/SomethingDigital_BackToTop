(function($) {
  var BackToTop = {
    scrollAppears: 300,
    scrollSpeed: 300,
    anchorSide: 'left',

    init: function() {
      this.anchorDiv();
      this.bindScrollEvent();

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
    bindScrollEvent: function() {
      $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
          $('#back-to-top').fadeIn();
        } else {
          $('#back-to-top').fadeOut();
        }
      });
    },
    anchorDiv: function() {
      $('#back-to-top').css({'left': '0'});
    }
  }
  BackToTop.init();
}(jQuery));