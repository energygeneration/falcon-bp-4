var firstNavbar = document.querySelector('.first-navbar');

window.addEventListener('scroll', function () {
  if (window.pageYOffset > 100) {
    firstNavbar.classList.add('d-none');
  } else {
    firstNavbar.classList.remove('d-none');
  }
});