function iniciaModal(modalID) {
  const modal = document.getElementById(modalID);
  modal.classList.toggle('hide');
}

const button1 = document.querySelector('.full-album');
const button2 = document.querySelector('.fechar');
const modal = document.querySelector('.modal-container');


button1.addEventListener('click', () => {  
  modal.classList.toggle('hide');
  console.log('Click')
});

button2.addEventListener('click', () => {  
  modal.classList.toggle('hide');
  console.log('Click')
});
