var logo = document.querySelector('.container');
var menu = document.querySelector('.menu');

logo.addEventListener('click', () => {
  menu.classList.toggle('.showmenu');
});