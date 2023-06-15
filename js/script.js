new Swiper('.banner .swiper', {

    direction: 'horizontal',
    loop: true,
    speed: 800,
    autoHeight: true,

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

  breakpoints:{
    360:{
      slidesPerView: 1,
    },
    760:{
      slidesPerView: 2,
    },
    1380:{
      slidesPerView: 3,
    }
  }

});

function SubMenu(text) {
    document.getElementById(text).classList.toggle("show");
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
  if (!event.target.matches('.dropbtn2') && !event.target.matches('.menu-images') && !event.target.matches('.drop_communication_menu span')) {
    var dropdowns = document.getElementsByClassName("dropdown_communication_content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
      }
    }
  }
  if (!event.target.matches('.dropbtn4') && !event.target.matches('.menu-images') && !event.target.matches('.drop_menu_menu span')) {
    var dropdowns = document.getElementsByClassName("dropdown_menu_content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
      }
    }
  }
}