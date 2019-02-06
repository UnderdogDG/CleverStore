console.log("favoritos Works!!");

const btn_fav = document.getElementsByClassName('fav');

for(i = 0; i < btn_fav.length; i++){
  btn_fav[i].addEventListener('click', addToFav);
};

function addToFav(){
  let elementId = this.parentElement.parentElement.parentElement.getAttribute("id");
  console.log('click', elementId);
  let request = new XMLHttpRequest();
  let data = new FormData();

  data.append('fav', elementId);

  request.onreadystatechange = function(){
    if( this.status == 200 && this.readyState == 4){
      // console.log("enviado: ", elementId);
      let ajaxResponse = this.responseText;
      if(ajaxResponse){
        // counter.value = parseInt(counter.value) - 1;
        // item.remove();
        console.log(ajaxResponse);
      }else{
        console.log("ha ocurrido un error");
      }
    }
  };

  request.open('POST', 'http://localhost/store/user/addFav');
  request.send(data);
};