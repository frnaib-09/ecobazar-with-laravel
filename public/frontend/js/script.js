const loader = document.getElementById("preloader");

function showPopup() {
  const popup = document.getElementById("popup");

  if (!popup) return;

  const hideUntil = localStorage.getItem("popupHideUntil");

  if (hideUntil && Date.now() < Number(hideUntil)) {
    return;
  }

  popup.classList.add("show");
}

function loadfunc() {
  if (!loader) {
    showPopup();
    return;
  }

  loader.classList.add("loader-hidden");

  loader.addEventListener("transitionend", () => {
    loader.remove();
    showPopup();
  }, { once: true });

  setTimeout(() => {
    loader.remove();
    showPopup();
  }, 600);
}

window.addEventListener("load", loadfunc);

let lastScroll = 0;
const headerTop = document.querySelector(".headerTop");
const headerMid = document.querySelector(".headerMid");
const headerBottom = document.querySelector(".headerBottom");
const mobileHeader = document.querySelector(".mblHdr");

window.addEventListener("scroll", () => {
  let currentScroll = window.scrollY;

  if (currentScroll > lastScroll) {
    headerTop.classList.add("hide");
    headerMid.classList.add("hide");
    headerBottom.classList.add("hide");
    mobileHeader.classList.add("hide");
  } else {
    headerTop.classList.remove("hide");
    headerMid.classList.remove("hide");
    headerBottom.classList.remove("hide");
    mobileHeader.classList.remove("hide");
  }

  lastScroll = currentScroll;
});

$(document).ready(function () {
  $('.banner_slider').slick({
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
    arrows: false,
    cssEase: 'linear',
    dots: true,
    dotsClass: 'banner_sliderDots',
    responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false
      },
    }
  ]
});

  $('.featureSlider').slick({
    slidesToShow: 5,
    autoplay: true,
    arrows: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 676,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 400,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 320,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      }
    ]
  });
  
  $('.top_cat_slider').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    prevArrow: $('.leftArrow'),
    nextArrow: $('.rightArrow'),
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        },
      }
    ]
  });
  
  $('#cot_sale_timer').countdown('2026/04/30', function(event) {
  var $this = $(this).html(event.strftime(''
    +
    '<div class="cot_sale_timer_para"><span class="span_1">%D</span><span class="span_2">Days</span></div> ' +
    '<span class="colon_sign">:</span>'+
    '<div class="cot_sale_timer_para"><span class="span_1">%H</span><span class="span_2">Hours</span></div> ' +
    '<span class="colon_sign">:</span>'+
    '<div class="cot_sale_timer_para"><span class="span_1">%M</span><span class="span_2">Min</span></div> ' +
    '<span class="colon_sign">:</span>'+
    '<div class="cot_sale_timer_para"><span class="span_1">%S</span><span class="span_2">Sec</span></div> ' 
    
    ));
  });

  $('.clientsReviewSlider').slick({
    slidesToShow: 3,
    dots: true,
    dotsClass: 'clientsSliderDots',
    prevArrow: $('.clientsleftArrow'),
    nextArrow: $('.clientsrightArrow'),
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        },
      }
    ]
  });
  
  new VenoBox({
    spinner: 'swing',
    navigation: false,
    navKeyboard: false,
    navTouch: false,
  });
});

let addToWishBtn = document.querySelector(`.wishList`);
function addToWishList() { 
  addToWishBtn.innerHTML = `<iconify-icon icon="mdi:tick"></iconify-icon>`;
}

document.querySelectorAll(".passPanel, .newpass, .newpass_2").forEach((passwordField) => {
  const input = passwordField.querySelector("input");
  const button = passwordField.querySelector("button");

  if (!input || !button) return;

  button.setAttribute("type", "button");

  button.addEventListener("click", () => {
    const isPassword = input.type === "password";

    input.type = isPassword ? "text" : "password";
    button.innerHTML = isPassword
      ? `<iconify-icon icon="iconamoon:eye-off-light"></iconify-icon>`
      : `<iconify-icon icon="iconamoon:eye-light"></iconify-icon>`;
  });
});

let plusBtn = document.querySelector(`.plus`);
let minusBtn = document.querySelector(`.minus`);
let inputField = document.querySelector(`.limit input`);

function addition() {
    if (!inputField) return;

    inputField.value = +inputField.value + 1;
}

if (plusBtn) {
  plusBtn.addEventListener("click", addition);
}

function subtraction() {
    if (!inputField) return;

    inputField.value = +inputField.value - 1;
    if (inputField.value < 1) {
        inputField.value = 1;
        if (minusBtn) {
          minusBtn.style.cursor = "not-allowed";
        }
    }
  }
  if (minusBtn) {
    minusBtn.addEventListener("click", subtraction);
  }

$("#get-started").countdown("2026/09/23", function(event) {

  $("#days").text(event.strftime('%D'));
  $("#hours").text(event.strftime('%H'));
  $("#minutes").text(event.strftime('%M'));
  $("#seconds").text(event.strftime('%S'));
});

//funciton
  const popup = document.getElementById("popup");
  const checkbox = document.getElementById("never_appear");
  const closeBtn =document.getElementById("close");

  function popupOpener() {
    if (!popup) return;

    popup.classList.remove("show");
    if (checkbox && checkbox.checked) {
        const now = new Date().getTime();
        const next24Hours = now + (24 * 60 * 60 * 1000);

        localStorage.setItem("popupHideUntil", next24Hours);
    }
  }

    if (closeBtn) {
      closeBtn.addEventListener("click", popupOpener);
    }

