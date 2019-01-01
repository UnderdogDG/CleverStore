const hamburguesa = document.getElementById("hamburguesa");
const item = document.getElementsByClassName("item");
const total_items = item.length;

hamburguesa.addEventListener('click',()=>{
  let active = Object.values(hamburguesa.classList).find(x=>x=='active');
  if(active){
    for(i=0; i < total_items; i++){
      item[i].classList.add("hidden");
    }
    hamburguesa.classList.remove("active");
  }else{
    for(i=0; i < total_items; i++){
      item[i].classList.remove("hidden");
    }
    hamburguesa.classList.add("active");
  }
});