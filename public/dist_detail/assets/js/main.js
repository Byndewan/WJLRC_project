/**
* Template Name: OnePage
* Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
* Updated: Jun 29 2024 with Bootstrap v5.3.3
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

(function() {
  "use strict";

  /**
   * Apply .scrolled class to the body as the page is scrolled down
   */
  function toggleScrolled() {
    const selectBody = document.querySelector('body');
    const selectHeader = document.querySelector('#header');
    if (!selectHeader.classList.contains('scroll-up-sticky') && !selectHeader.classList.contains('sticky-top') && !selectHeader.classList.contains('fixed-top')) return;
    window.scrollY > 100 ? selectBody.classList.add('scrolled') : selectBody.classList.remove('scrolled');
  }

  document.addEventListener('scroll', toggleScrolled);
  window.addEventListener('load', toggleScrolled);

  /**
   * Mobile nav toggle
   */
  const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');

  function mobileNavToogle() {
    document.querySelector('body').classList.toggle('mobile-nav-active');
    mobileNavToggleBtn.classList.toggle('bi-list');
    mobileNavToggleBtn.classList.toggle('bi-x');
  }
  mobileNavToggleBtn.addEventListener('click', mobileNavToogle);

  /**
   * Hide mobile nav on same-page/hash links
   */
  document.querySelectorAll('#navmenu a').forEach(navmenu => {
    navmenu.addEventListener('click', () => {
      if (document.querySelector('.mobile-nav-active')) {
        mobileNavToogle();
      }
    });

  });

  /**
   * Toggle mobile nav dropdowns
   */
  document.querySelectorAll('.navmenu .toggle-dropdown').forEach(navmenu => {
    navmenu.addEventListener('click', function(e) {
      e.preventDefault();
      this.parentNode.classList.toggle('active');
      this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
      e.stopImmediatePropagation();
    });
  });

  /**
   * Preloader
   */
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove();
    });
  }

  /**
   * Scroll top button
   */
  let scrollTop = document.querySelector('.scroll-top');

  function toggleScrollTop() {
    if (scrollTop) {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
  }
  scrollTop.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });

  window.addEventListener('load', toggleScrollTop);
  document.addEventListener('scroll', toggleScrollTop);

  /**
   * Animation on scroll function and init
   */
  function aosInit() {
    AOS.init({
      duration: 600,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', aosInit);

  /**
   * Initiate Pure Counter
   */
  new PureCounter();

  /**
   * Initiate glightbox
   */
  const glightbox = GLightbox({
    selector: '.glightbox'
  });

  /**
   * Init swiper sliders
   */
  function initSwiper() {
    document.querySelectorAll(".init-swiper").forEach(function(swiperElement) {
      let config = JSON.parse(
        swiperElement.querySelector(".swiper-config").innerHTML.trim()
      );

      if (swiperElement.classList.contains("swiper-tab")) {
        initSwiperWithCustomPagination(swiperElement, config);
      } else {
        new Swiper(swiperElement, config);
      }
    });
  }

  window.addEventListener("load", initSwiper);

  /**
   * Init isotope layout and filters
   */
  document.querySelectorAll('.isotope-layout').forEach(function(isotopeItem) {
    let layout = isotopeItem.getAttribute('data-layout') ?? 'masonry';
    let filter = isotopeItem.getAttribute('data-default-filter') ?? '*';
    let sort = isotopeItem.getAttribute('data-sort') ?? 'original-order';

    let initIsotope;
    imagesLoaded(isotopeItem.querySelector('.isotope-container'), function() {
      initIsotope = new Isotope(isotopeItem.querySelector('.isotope-container'), {
        itemSelector: '.isotope-item',
        layoutMode: layout,
        filter: filter,
        sortBy: sort
      });
    });

    isotopeItem.querySelectorAll('.isotope-filters li').forEach(function(filters) {
      filters.addEventListener('click', function() {
        isotopeItem.querySelector('.isotope-filters .filter-active').classList.remove('filter-active');
        this.classList.add('filter-active');
        initIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        if (typeof aosInit === 'function') {
          aosInit();
        }
      }, false);
    });

  });

  /**
   * Frequently Asked Questions Toggle
   */
  document.querySelectorAll('.faq-item h3, .faq-item .faq-toggle').forEach((faqItem) => {
    faqItem.addEventListener('click', () => {
      faqItem.parentNode.classList.toggle('faq-active');
    });
  });

  /**
   * Correct scrolling position upon page load for URLs containing hash links.
   */
  window.addEventListener('load', function(e) {
    if (window.location.hash) {
      if (document.querySelector(window.location.hash)) {
        setTimeout(() => {
          let section = document.querySelector(window.location.hash);
          let scrollMarginTop = getComputedStyle(section).scrollMarginTop;
          window.scrollTo({
            top: section.offsetTop - parseInt(scrollMarginTop),
            behavior: 'smooth'
          });
        }, 100);
      }
    }
  });

  /**
   * Navmenu Scrollspy
   */
  let navmenulinks = document.querySelectorAll('.navmenu a');

  function navmenuScrollspy() {
    navmenulinks.forEach(navmenulink => {
      if (!navmenulink.hash) return;
      let section = document.querySelector(navmenulink.hash);
      if (!section) return;
      let position = window.scrollY + 200;
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        document.querySelectorAll('.navmenu a.active').forEach(link => link.classList.remove('active'));
        navmenulink.classList.add('active');
      } else {
        navmenulink.classList.remove('active');
      }
    })
  }
  window.addEventListener('load', navmenuScrollspy);
  document.addEventListener('scroll', navmenuScrollspy);

})();

// Comment
// function toggleReplies(button) {
//   // Temukan elemen replies yang berdekatan dengan tombol
//   // var replies = button.closest('.comment-main').nextElementSibling;
//   var replies = button.closest('.comment').querySelector('.replies');

//   // Temukan ikon chevron yang ada di dalam tombol
//   var chevronIcon = button.querySelector('i');

//   // Cek apakah replies ditampilkan atau disembunyikan, dan lakukan toggle
//   if (replies.style.display === "none" || replies.style.display === "") {
//       replies.style.display = "block";
//       button.innerHTML = "Hide Replies "; // Ubah teks tombol
//       chevronIcon.classList.remove("fa-chevron-down");
//       chevronIcon.classList.add("fa-chevron-up");
//   } else {
//       replies.style.display = "none";
//       button.innerHTML = "Show Replies "; // Ubah teks tombol
//       chevronIcon.classList.remove("fa-chevron-up");
//       chevronIcon.classList.add("fa-chevron-down");
//   }

//   // Tambahkan ikon ke dalam tombol setelah mengganti teks
//   button.appendChild(chevronIcon);
// }

// function addReplyForm(button) {
    function addReplyForm(element, commentId) {
        const form = document.getElementById(`reply-form-${commentId}`);
        const formData = new FormData(form);
        fetch(`/comments/${commentId}/replies`, {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        })
        .then(response => response.json())
        .then(data => {
            // Handle response data
        })
        .catch(error => {
            // Handle error
        });
    }
//   // Temukan elemen komentar di mana form akan ditambahkan
//   var comment = button.closest('.comment');

//   // Cek apakah form reply sudah ada, jika ada maka tidak menambah form baru
//   var form = comment.querySelector('.reply-form');
//   if (form) return;

//   // HTML untuk form reply
//   var formHtml = `
//       <form class="reply-form mt-3">
//           <textarea class="form-control mb-2" placeholder="Add a reply..." required></textarea>
//           <button class="btn btn-primary" type="submit">Submit</button>
//       </form>
//   `;

//   // Tambahkan form sebelum bagian replies
//   comment.insertAdjacentHTML('beforeend', formHtml);
//  }

function toggleReplies(button) {
  // Cari elemen '.replies' yang berada dalam elemen '.comment'
  var replies = button.closest('.comment').querySelector('.replies');

  // Cek apakah elemen replies ditemukan
  if (!replies) {
      console.error('Replies element not found');
      return;
  }

  // Cari ikon chevron dalam tombol
  var chevronIcon = button.querySelector('i');

  // Cek apakah ikon ditemukan
  if (!chevronIcon) {
      console.error('Chevron icon not found');
      return;
  }

  // Cek apakah replies ditampilkan atau disembunyikan
  if (replies.style.display === "none" || replies.style.display === "") {
      replies.style.display = "block"; // Tampilkan replies
      button.innerHTML = "Hide Replies "; // Ubah teks tombol
      chevronIcon.classList.remove("fa-chevron-down");
      chevronIcon.classList.add("fa-chevron-up");
  } else {
      replies.style.display = "none"; // Sembunyikan replies
      button.innerHTML = "Show Replies "; // Ubah teks tombol
      chevronIcon.classList.remove("fa-chevron-up");
      chevronIcon.classList.add("fa-chevron-down");
  }

  // Tambahkan ikon ke dalam tombol setelah mengubah teks
  button.appendChild(chevronIcon);
}

function addReplyForm(button, commentId, csrfToken) {
    var comment = button.closest('.comment');

    // Cek apakah form reply sudah ada
    var form = comment.querySelector('.reply-form');
    if (form) return;

    // HTML form reply
    var formHtml = `
      <form id="reply-form-${commentId}" class="reply-form mt-3">
        <textarea name="reply" class="form-control mb-2" placeholder="Add a reply..." required></textarea>
        <button class="btn btn-primary" type="button" id="submit-reply">Submit</button>
        <button type="button" class="btn btn-secondary cancel-reply">Cancel</button>
      </form>
    `;

    // Tambahkan form setelah bagian comment actions
    comment.insertAdjacentHTML('beforeend', formHtml);

    // Get the form element
    var form = comment.querySelector('.reply-form');

    // Get the submit button element
    var submitButton = document.getElementById('submit-reply');

    // Add event listener for submit button click
    submitButton.addEventListener('click', function() {
        console.log('Tombol submit diklik');

        // Buat instance FormData baru
        var formData = new FormData(form);

        console.log('Data form:', formData);

        fetch(`/comments/${commentId}/replies`, {
          method: 'POST',
          body: formData,
          headers: {
            'X-CSRF-TOKEN': csrfToken
          }
        })
        .then(response => {
          if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
          } else {
            return response.json();
          }
        })
        .then(data => {
          console.log('Data respons:', data);
        })
        .catch(error => {
          console.error('Error:', error);
        });
      });

    // Tambahkan event listener untuk tombol Cancel
    var cancelButton = comment.querySelector('.cancel-reply');
    cancelButton.addEventListener('click', function() {
      removeReplyForm(cancelButton);
    });
  }

function removeReplyForm(cancelButton) {
  // Cari form reply yang terkait
  var form = cancelButton.closest('.reply-form');

  // Hapus form
  if (form) {
    form.remove();
  }
}
