console.log("Comprar works");

const NEXT = 'NEXT';
const PREV = 'PREV';
const PUT = 'PUT';

const sku = parseInt(document.getElementById("sku").value);
const price = parseInt(document.getElementById("price").value);
const counter = document.getElementById("counter");
const btnplus = document.getElementById("plus");
const btnmin = document.getElementById("min");
const inputQuantity = document.getElementById("quantity");
const totalPrice =  document.getElementById("totalPrice");

// #region [1] ======== ( STORE ) ========
const store = (reducer)=>{
  let state = {
      price: price,
      quantity: 1,
      total: price
  };
  const listeners = [];
  const getstate = ()=> state;

  const subscribe = (listener)=>{
      listeners.push(listener);
  };

  const dispatch = (action)=>{
      state = reducer(state, action);
      listeners.forEach(listener => listener(state));
  };

  return{ getstate, dispatch, subscribe }
};
// #endregion   ========================

// #region [2] ======== ( REDUCER ) ========
const reducer = (state = {price: price, quantity:1, total: price}, action)=>{
  let prevQuantity;
  let prevTotal;
  
  switch (action.type) {
      case NEXT:
          prevQuantity = state.quantity + action.payload;
          prevTotal = state.price * prevQuantity;
          break;
      case PREV:
          prevQuantity = Math.max((state.quantity + action.payload), 1);
          prevTotal = state.price * prevQuantity;
          break;
      case PUT:
          prevQuantity = Math.max((action.payload), 1);
          prevTotal = state.price * prevQuantity;
          break;
      default:
          return state;
  }

  return Object.assign({}, state, {quantity: prevQuantity, total: prevTotal });

};
// #endregion   ========================

// #region [3] ======== ( ACTIONS ) ========
const actions = {
  next(){
      return {
          type: NEXT,
          payload: 1
      }
  },

  prev(){
      return{
          type: PREV,
          payload: -1
      }
  },

  put(value){
    return{
      type: PUT,
      payload: value
    }
  }
};
// #endregion   ========================

// #region [6] ======== ( STORAGE & SUBCRIBERS ) ========

const storeState = store(reducer);

storeState.subscribe(state =>{
  quantity.value = (state.quantity < 10) ? "0" + state.quantity : state.quantity;
  totalPrice.innerHTML = state.total;  
});
// #endregion   ========================


// #region [7] ======== ( EVENTS ) ========
btnplus.addEventListener('click', ()=>{
  storeState.dispatch(actions.next());
});

btnmin.addEventListener('click', ()=>{
  storeState.dispatch(actions.prev());
});

document.addEventListener('keyup', (x)=>{
  switch (x.key){
      case "ArrowUp":
        storeState.dispatch(actions.next());
      break;
      case "ArrowDown":
        storeState.dispatch(actions.prev());
      break;
  }  
});

window.addEventListener('load', (x)=>{
  storeState.dispatch(actions.prev());
});

quantity.addEventListener('change', (e)=>{
  let value = 1;
  if(e.target.value.match(/\d+/g)){
    value = parseInt(e.target.value);
    storeState.dispatch(actions.put(value));
  }else{
    storeState.dispatch(actions.put(value));
  }
});
// #endregion   ========================

const btnAdd = document.getElementById("cart");

btnAdd.addEventListener('click', ()=>{
  let sku = parseInt(document.getElementById("sku").value);
  let quantity = parseInt(document.getElementById("quantity").value);

  console.log({sku, quantity});
   
  let request = new XMLHttpRequest();
  let data = new FormData();

  data.append("sku", sku);
  data.append("quantity", quantity);

  request.onreadystatechange = function(){
    if( this.status == 200 && this.readyState == 4){
      console.log("enviado: ", quantity);
      let ajaxResponse = this.responseText;
      if(ajaxResponse){
        console.log(`Enviado: ${ajaxResponse}`);
        counter.value = parseInt(counter.value) + 1;
        btnAdd.setAttribute('disabled', 'disabled');
        btnAdd.classList.add('disabled');
        
      }else{
        console.log("ha ocurrido un error");
      
      }
    }
  };

  request.open('POST', 'http://localhost/store/product/addToCart');
  request.send(data);
});

// console.log({sku});

const btn_menu = document.getElementById("btn_menu");
const menu = document.getElementById("menu");



btn_menu.addEventListener('click', ()=>{
  console.log("menu");
  let active = Object.values(btn_menu.classList).find(x=>x=='active');
  if(active){
    for(i=0; i < total_items; i++){
      menu.classList.add("drop");
    }
    btn_menu.classList.remove("active");
  }else{
    for(i=0; i < total_items; i++){
      menu.classList.remove("drop");
    }
    btn_menu.classList.add("active");
  }
});
