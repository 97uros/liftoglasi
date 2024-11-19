jQuery(window).on('load', function() {

  // AOS 

  AOS.init({
    offset: 120,
    delay: 0,
    duration: 400,
    easing: 'ease',
    once: true,
    mirror: false, 
    anchorPlacement: 'top-bottom'
  });

  // Slider

  jQuery('.logo-slider').owlCarousel({
    autoplay: true,
    slideTransition: 'linear',
    autoplayTimeout: 6000,
    autoplaySpeed: 6000,
    autoplayHoverPause: false,
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
      0:{
        items:3,
        nav:false
      },
      600:{
        items:4,
        nav:false
      },
      1000:{
        items:7,
        nav:false
      }
    }
  })

  jQuery('.locations__slider').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
      navText: [
        "<i class='fa-solid fa-chevron-left'></i>", 
        "<i class='fa-solid fa-chevron-right'></i>"
      ],
    responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 3
        }
    }
  });

  jQuery('.locations__single__gallery').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    navText: [
      "<i class='fa-solid fa-chevron-left'></i>", 
      "<i class='fa-solid fa-chevron-right'></i>"
    ],
    center: true,
    items: 3,
    responsive: {
        0: {
          items: 1
        },
        600: {
          items: 3
        },
        1000: {
          items: 3
        }
    }
  })

  jQuery('.testimonials__slider').owlCarousel({
    loop: true,
    nav: true,
    navText: [
      "<i class='fa-solid fa-chevron-left'></i>", 
      "<i class='fa-solid fa-chevron-right'></i>"
    ],
    center: true,
    items: 1,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 1
      },
      1000: {
        items: 1
      }
    }
  });

  // Counter 

  function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }

  // Function to start the counter animation

  function startCounterAnimation() {
    jQuery(".counter__title").each(function () {
      var count = jQuery(this);
      var countTo = parseInt(count.attr('data-count'), 10);
      var initialCount = parseInt(count.text(), 10);

      if (isNaN(countTo)) {
        console.error('Invalid data-count attribute for element:', count);
        return;
      }

      if (isNaN(initialCount)) {
        initialCount = 0;
      }

      jQuery({ countNum: initialCount }).animate(
        { countNum: countTo },
        {
          duration: 3000,
          easing: 'linear',
          step: function() {
            count.text(Math.floor(this.countNum));
          },
          complete: function() {
            count.text(this.countNum);
            setTimeout(function() {
              count.append('<span class="plus-sign">+</span>');
              jQuery('.plus-sign').addClass('animate');
            }, 500);
          }
        }
      );
    });
  }

  jQuery(window).on('scroll', function() {
    var section = jQuery('.numbers');
    if (isElementInViewport(section.get(0))) {
      startCounterAnimation();
      jQuery(window).off('scroll');
    }
  }); 

  // Prices 

  const $tooltip = jQuery('#tooltip');

  function showTooltip($element) {
    const dimension = $element.data('dimension');
    const text = `Izgled reklame u dimenzijama: ${dimension}`;
    $tooltip.text(text);
    const offset = $element.offset();
    $tooltip.css({
      top: offset.top - $tooltip.outerHeight() - 10,
      left: offset.left + ($element.outerWidth() / 2) - ($tooltip.outerWidth() / 2)
    }).show();
  }

  function hideTooltip() {
    $tooltip.hide();
  }

  jQuery('#adTable tbody tr').hover(function() {
    const dimension = jQuery(this).find('td:nth-child(2)').text();
    const price = jQuery(this).find('td:nth-child(3)').text();
    const $circle = jQuery('.pulsating-circle[data-dimension="' + dimension + '"][data-price="' + price + '"]');
    showTooltip($circle);
  }, hideTooltip);

  jQuery('.pulsating-circle').hover(function() {
    showTooltip(jQuery(this));
  }, hideTooltip);

  // Form 

  const inputs = document.querySelectorAll(".wpcf7-form-control");

  function focusFunc() {
    let parent = this.parentNode;
    parent.classList.add("focus");
  }

  function blurFunc() {
    let parent = this.parentNode;
    if (this.value == "") {
      parent.classList.remove("focus");
    }
  }

  inputs.forEach((input) => {
    input.addEventListener("focus", focusFunc);
    input.addEventListener("blur", blurFunc);
  });

  // Forms 

  jQuery(function() {
    jQuery( "#desired_date" ).datepicker({
      dateFormat: 'dd/mm/yy',
      firstDay: 1
    });
  })
});