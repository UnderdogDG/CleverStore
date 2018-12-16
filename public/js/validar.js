const email = document.getElementById('email');

// #region [w] ======== ( NO TERMINADO ) ========

function requestAJAX( email ){

  let request = new XMLHttpRequest();
  let data = new FormData();

  data.append("email", email);

  request.onreadystatechange = function(){
    if( this.status == 200 && this.readyState == 4){
      responseJSON = (JSON.parse(this.responseText).items).map(e=>e.volumeInfo);
      createStore();
    }
  };

  request.open('POST', '');
  request.send(data);
};

// #endregion   ========================

function matchString( e, regExp ){
  
  let expresion = new RegExp(regExp, "g");
  
  if(e.target.value.match(expresion)){

    requestAJAX(e.target.value);

    e.target.style = 'border: 1px solid #76FF03; box-shadow: 1px 1px 4px #76FF03';
    if(email.value != "" && nombre.value !="" && telefono.value != ""){
      enviar.removeAttribute("disabled");
    }
  }else{
    e.target.style = 'border: 1px solid red; box-shadow: 1px 1px 4px red';
    if(email.value == "" || nombre.value == "" || telefono.value == "" || duplicado.value == ""){
      enviar.setAttribute("disabled", "disabled");
    }
  };
}

email.addEventListener('input', (e)=> matchString(e, "'/\\w{8,}[@]\\w{3,8}[.][a-z]{3,8}([.])?([a-z]{2,4})?/'"));