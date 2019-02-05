// console.log("carrito Works!!!");

const remove = document.getElementsByClassName("remove");
const counter = document.getElementById("counter");

function removeElement(){
  let elementId = this.parentElement.parentElement.parentElement.getAttribute("id");
  let item =  document.getElementById(elementId);
  // console.log(item);
  let request = new XMLHttpRequest();
  let data = new FormData();

  data.append('item', elementId);

  request.onreadystatechange = function(){
    if( this.status == 200 && this.readyState == 4){
      // console.log("enviado: ", elementId);
      let ajaxResponse = this.responseText;
      if(ajaxResponse == 'true'){
        counter.value = parseInt(counter.value) - 1;
        item.remove();
      }else{
        console.log("ha ocurrido un error");
      }
    }
  };

  request.open('POST', 'http://localhost/store/product/removeFromCart');
  request.send(data);
};

for(i = 0; i < remove.length; i++){
  remove[i].addEventListener('click', removeElement
    // function(){
    //   // console.log(this.parentElement.parentElement.parentElement.getAttribute("id"));
    //   let elementId = this.parentElement.parentElement.parentElement.getAttribute("id");
    //   let item =  document.getElementById(elementId);
    //   console.log(item);
    //   item.remove();
    // }
  );
}