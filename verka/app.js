const navSlide = () => {
  const navMenu = document.querySelector('.navMenu');
  const nav = document.querySelector('.nav-links');
  const navLinks = document.querySelectorAll('.nav-links li')

  navMenu.addEventListener('click', () => {
    //toggle nav
    nav.classList.toggle('nav-active');
    //animate link
    navLinks.forEach((link, index) => {
      if(link.style.animation){
        link.style.animation = '';
      }else{
        link.style.animation = `navLinkFade 0.7s ease forwards ${index/12 + 0.4}s`;
      }
    });
    //navMenu animation
    navMenu.classList.toggle('toggle');
  });

}

const navHide = () => {
  const navMenu = document.querySelector('.navMenu');
  const nav = document.querySelector('.nav-links');
  const navLinks = document.querySelectorAll('.nav-links li')
  document.getElementById("menu1").addEventListener("click",  () => {

    nav.classList.toggle('nav-active');
    navLinks.forEach((link, index) => {
      if(link.style.animation){
        link.style.animation = '';
      }else{
        link.style.animation = `navLinkFade 0.7s ease forwards ${index/12 + 0.4}s`;
      }
    });
    navMenu.classList.toggle('toggle');
});
document.getElementById("menu2").addEventListener("click",  () => {

  nav.classList.toggle('nav-active');
  navLinks.forEach((link, index) => {
    if(link.style.animation){
      link.style.animation = '';
    }else{
      link.style.animation = `navLinkFade 0.7s ease forwards ${index/12 + 0.4}s`;
    }
  });
  navMenu.classList.toggle('toggle');
});
document.getElementById("menu3").addEventListener("click",  () => {

  nav.classList.toggle('nav-active');
  navLinks.forEach((link, index) => {
    if(link.style.animation){
      link.style.animation = '';
    }else{
      link.style.animation = `navLinkFade 0.7s ease forwards ${index/12 + 0.4}s`;
    }
  });
  navMenu.classList.toggle('toggle');
});
document.getElementById("menu4").addEventListener("click",  () => {

  nav.classList.toggle('nav-active');
  navLinks.forEach((link, index) => {
    if(link.style.animation){
      link.style.animation = '';
    }else{
      link.style.animation = `navLinkFade 0.7s ease forwards ${index/12 + 0.4}s`;
    }
  });
  navMenu.classList.toggle('toggle');
});
}

navSlide();
navHide();
