console.log("favoritos Works!!");

const btn_fav = document.getElementsByClassName('fav');

for(i = 0; i < btn_fav.length; i++){
  btn_fav[i].addEventListener('click', addToFav);
};

function addToFav(){
  console.log('click');
};