new Swiper('.banner .swiper', {

    direction: 'horizontal',
    loop: true,
    speed: 800,

    autoplay: {
        delay: 15000,
        disableOnInteraction: false,
    },

    pagination: {
      el: '.banner .swiper .swiper-pagination',
      clickable: true,
    },
  
    navigation: {
      nextEl: '.banner .swiper .swiper-button-next',
      prevEl: '.banner .swiper .swiper-button-prev',
    },
  
});

new Swiper('.tariffs .swiper', {

  direction: 'horizontal',
  loop: true,
  speed: 800,
  slidesPerView: 3,
  watchOverflow: true,

  navigation: {
    nextEl: '.tariffs .swiper .swiper-button-next',
    prevEl: '.tariffs .swiper .swiper-button-prev',
  },

});

function SubMenu(text) {
    document.getElementById(text).classList.add("show");
}
  

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn1')) {
    var dropdowns = document.getElementsByClassName("dropdown_dots_content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
  if (!event.target.matches('.dropbtn2')) {
    var dropdowns = document.getElementsByClassName("dropdown_communication_content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
      }
    }
  }
}