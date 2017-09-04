import 'jquery';
import 'bootstrap';

$(window).on('scroll', function() {
    // Parallax Background effect
    $('section[data-type="background"]').each(function() {
        var $bgobj = $(this); // assigning the object
        // Scroll the background at var speed
        // the yPos is a negative value because we're scrolling it UP!
        var yPos = -($(window).scrollTop() / $bgobj.data('speed'));
        // Put together background position
        var coords = '50% '+ yPos + 'px';
        // Move the background
        $bgobj.css({ backgroundPosition: coords });
    });
});


// Typing effect

var TxtType = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};

TxtType.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {

        this.txt = fullTxt.substring(0, this.txt.length - 1);

    } else {

        this.txt = fullTxt.substring(0, this.txt.length + 1);

    }

    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) {

        delta /= 2;

    }

    if (!this.isDeleting && this.txt === fullTxt) {

        delta = this.period;
        this.isDeleting = true;

    } else if (this.isDeleting && this.txt === '') {

        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
    }

    if( i == this.toRotate.length - 1 && this.isDeleting ) {

        this.isDeleting = false;
        delta = 750;
        return false;
    }

    setTimeout(function() {

        that.tick();

    }, delta);
};

window.onload = function() {
    var elements = $('.typewrite');

    for ( var i = 0; i < elements.length; i++ ) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');

        if (toRotate) {
            new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
}

$('.form-control').focus( function() {

  $(this).prev('.form-label').addClass('float');

}).blur( function() {

    if ($(this).val() == '' ) {

       $(this).prev('.form-label').removeClass('float');

    }

});

$('#submit').on('click', function(e) {

  e.preventDefault();

  $('.form-control').each( function() {

    $(this).removeClass('error');

    if ( $(this).val() == '' ) {

      $(this).addClass('error');

    } else {

      var data = {
        'name': $('#name').val(),
        'email': $('#email').val(),
        'subject': $('#subject').val(),
        'description': $('#description').val()
      };

      $.ajax({
        url: '../../..//wp-content/plugins/form-validate.php',
        type: 'post',
        data: data,
        dataType: 'json',
        success: function(data) {

          $('.pre-form').css('display', 'none');
          $('.thanks').css('display', 'block');
          $('.thanks-name').text(data.name);
        }
      });
      return false;
    }

  });

});

$(function() {
      $('a[href*="#"]:not([href="#"]):not([role="tab"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });