// All slider start
$('.home_banner').owlCarousel({
  loop: true,
  dots: true,
  nav: false,
  autoplay: true,
  autoplayTimeout: 4000,
  slideTransition: 'ease',
  autoplaySpeed: 3000,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 1,
    },
    991: {
      items: 1,
    },
    1200: {
      items: 1
    }
  },
});
$('.home_testi').owlCarousel({
    loop: true,
    margin: 24,
    dots: true,
    nav: false,
    dotsEach: 1,
    autoplay: false,
    autoplayTimeout: 3000,
    slideTransition: 'linear',
    autoplaySpeed: 2000,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        991: {
            items: 1,
        },
        1200: {
          items: 1
        }
    },
  });
$('.home_event').owlCarousel({
    loop: true,
    dots: true,
    center: true,
    nav: false,
    dotsEach: 1,
     autoplay: true,
    autoplayTimeout: 6000,
    smartSpeed: 1500,
    responsive: {
        0: {
            items: 1,
        },
        576: {
            items: 3,
        },
        991: {
            items: 3,
        },
        1200: {
          items: 3
        }
    },
  }); 
$('.home_team').owlCarousel({
    loop: true,
    dots: false,
    margin: 30,
    center: true,
    nav: true,
    dotsEach: 1,
    autoplay: false,
    autoplayTimeout: 3000,
    slideTransition: 'linear',
    autoplaySpeed: 2000,
    responsive: {
        0: {
            items: 1,
        },
        576: {
            items: 2,
        },
        991: {
            items: 3,
        },
        1200: {
            items: 2
        }
    },
    navText: ["<img src='assets/images/home/prev-icon-white.svg'>",
        "<img src='assets/images/home/next-icon-white.svg'>"
    ]
});

$('.home_blog').owlCarousel({
    loop: true,
    dots: false,
    margin: 10,
    items: 1,
    nav: false,
    autoplay: false,
    autoplayTimeout: 2000,
    slideTransition: 'linear'
});

$('.home_blog_two').owlCarousel({
    loop: true,
    dots: false,
    margin: 10,
    items: 1,
    nav: false,
    autoplay: false,
    autoplayTimeout: 2000,
    slideTransition: 'linear',
    autoplaySpeed: 500
});

$('.life_after_ssla').owlCarousel({
    loop: true,
    dots: false,
    margin: 40,
    nav: true,
    dotsEach: 1,
    autoplay: false,
    autoplayTimeout: 3000,
    slideTransition: 'linear',
    autoplaySpeed: 2000,
    responsive: {
        0: {
            items: 1,
        },
        576: {
            items: 2,
        },
        991: {
            items: 3,
        },
        1200: {
            items: 4
        }
    },
    navText: ["<img src='assets/images/home/prev-icon-white.svg'>",
        "<img src='assets/images/home/next-icon-white.svg'>"
    ]
});

$('.red_carpet').owlCarousel({
    loop: true,
    nav: true,
    items: 1,
    dots: false,
    autoplay: false,
    margin: 0,
    autoplayTimeout: 5000,
    smartSpeed: 1600,
    navText: [
            "<img src='assets/images/home/prev-icon-white.svg'>",
            "<img src='assets/images/home/next-icon-white.svg'>"
        ],
    responsive: {
        0: {
            items: 1,
        },
        768: {
            items: 2
        },
        992: {
            items: 3
        },
        1200: {
            items: 3
        }
    }
});
$('.cijid_gallery').owlCarousel({
  loop: true,
  dots: false,
  nav: true,
  autoplay: false,
  autoplayTimeout: 4000,
  slideTransition: 'ease',
  autoplaySpeed: 3000,
  margin: 15,
  navText: 
        [
            "<img src='assets/images/home/prev-icon-white.svg'>",
            "<img src='assets/images/home/next-icon-white.svg'>"
        ],
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 2,
    },
    991: {
      items: 3,
    },
    1200: {
      items: 4
    }
  },
});
// All slider ends
// Sticky header start
// const header = document.getElementById('myHeader');
// window.addEventListener('scroll', function () {
//   if (window.innerWidth > 991.98) {
//     if (window.scrollY > 250) {
//       header.classList.add('sticky');
//     } else {
//       header.classList.remove('sticky');
//     }
//   } else {  
//     header.classList.remove('sticky');
//   }
// });

// window.addEventListener('resize', function () {
//   if (window.innerWidth <= 992) {
//     header.classList.remove('sticky');
//   }
// });

const header = document.getElementById('myHeader');

setHeaderHeight();

window.addEventListener('scroll', function () {

    if (window.innerWidth > 991.98) {

        if (window.scrollY > 0) {
            header.classList.add('sticky');
        } else {
            header.classList.remove('sticky');
        }

    } else {
        header.classList.remove('sticky');
    }
});

window.addEventListener('resize', function () {

    if (window.innerWidth > 991.98) {
        setHeaderHeight();
    } else {
        headerWrapper.style.height = '';
        header.classList.remove('sticky');
    }
});

// Sticky header ends

// Responsive header start
function menu() {
    const menuMainBox = document.getElementById("menu_mainbox");
    menuMainBox.classList.toggle("menu_open");
}

function sub_menu(event) {
    event.preventDefault();
    event.stopPropagation();

    const parent = event.currentTarget.closest(".dropdown_menu");
    if (!parent) return;

    const alreadyOpen = parent.classList.contains("sub_menu_open");

    // ✅ Close ALL open menus first
    document.querySelectorAll(".dropdown_menu.sub_menu_open")
        .forEach(el => el.classList.remove("sub_menu_open"));

    // ✅ Re-open only if it was not already open
    if (!alreadyOpen) {
        parent.classList.add("sub_menu_open");
    }
}



// Responsive header ends

// Smooth scrolling start
// Initialize Lenis

// window.lenis = new Lenis({ smooth: true });

// function lenisRAF(time) {
//   window.lenis.raf(time);
//   requestAnimationFrame(lenisRAF);
// }
// requestAnimationFrame(lenisRAF);

let lenis = null;
let rafId = null;

function initLenis() {
    if (window.innerWidth < 992) return;   // ✅ Disable on mobile

    lenis = new Lenis({ smooth: true });

    function lenisRAF(time) {
        lenis.raf(time);
        rafId = requestAnimationFrame(lenisRAF);
    }

    rafId = requestAnimationFrame(lenisRAF);
}

function destroyLenis() {
    if (!lenis) return;

    cancelAnimationFrame(rafId);   // ✅ Stop RAF loop
    lenis.destroy();               // ✅ Completely remove Lenis
    lenis = null;
}

function handleLenis() {
    if (window.innerWidth < 992) {
        destroyLenis();            // ✅ Mobile → Remove Lenis
    } else {
        if (!lenis) initLenis();   // ✅ Desktop → Recreate Lenis
    }
}

/* Run on load */
handleLenis();

/* Run on resize */
window.addEventListener("resize", handleLenis);


document.addEventListener('shown.bs.offcanvas', () => {
  window.lenis.stop();
  document.documentElement.style.overflow = 'hidden';
  document.body.style.overflow = 'hidden';
});

document.addEventListener('hidden.bs.offcanvas', () => {
  document.documentElement.style.overflow = '';
  document.body.style.overflow = '';
  window.lenis.start();
});

// header height calculation for mobile header responsive start
function setHeaderHeight() {
  const header = document.getElementById('myHeader');
  document.documentElement.style.setProperty('--header-height', header.offsetHeight + 'px');
}

window.addEventListener('load', setHeaderHeight);
window.addEventListener('resize', setHeaderHeight);
// header height calculation for mobile header responsive ends

// Pop on clicking anchore tag code start

document.addEventListener("DOMContentLoaded", function () {

    const modalElement = document.getElementById("externalLinkModal");
    const proceedButton = document.getElementById("externalLinkProceed");
    const message = document.getElementById("externalLinkMessage");

    const externalModal = new bootstrap.Modal(modalElement);

    let selectedUrl = "";
    let selectedTarget = "";

    // Detect clicks on all anchor tags
    document.addEventListener("click", function (e) {

        const link = e.target.closest("a");

        if (!link) return;

        // IMPORTANT:
        // Don't intercept the "Know More" button
        if (link.id === "externalLinkProceed") {
            return;
        }

        const href = link.getAttribute("href");

        if (!href) return;

        const isMailLink = href.toLowerCase().startsWith("mailto:");
        const isPhoneLink = href.toLowerCase().startsWith("tel:");
        const isBlankLink = link.getAttribute("target") === "_blank";

        // Show popup only for these links
        if (isMailLink || isPhoneLink || isBlankLink) {

            e.preventDefault();

            selectedUrl = href;
            selectedTarget = isBlankLink ? "_blank" : "_self";

            // Popup message
            if (isMailLink) {

                message.textContent =
                    "You are being redirected to your email application. Click know more to proceed.";

            } else if (isPhoneLink) {

                message.textContent =
                    "You are being redirected to your phone application. Click know more to proceed.";

            } else {

                message.textContent =
                    "You are being redirected to an external web page. Click know more to proceed.";
            }

            externalModal.show();
        }
    });


    // Know More button
    proceedButton.addEventListener("click", function (e) {

        e.preventDefault();

        const url = selectedUrl;
        const target = selectedTarget;

        // Close modal
        externalModal.hide();

        // Wait for modal to close, then perform original action
        setTimeout(function () {

            if (target === "_blank") {

                window.open(url, "_blank", "noopener,noreferrer");

            } else {

                window.location.href = url;

            }

        }, 200);

    });

});

// Pop on clicking anchore tag code ends