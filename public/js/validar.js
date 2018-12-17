const email = document.getElementById('email');
const adv  = document.getElementById('adv');
// const aviso  = document.getElementById('aviso');

function requestAJAX( email_data ){

  let request = new XMLHttpRequest();
  let data = new FormData();

  data.append("email", email_data);

  request.onreadystatechange = function(){
    if( this.status == 200 && this.readyState == 4){

      let ajaxResponse = this.responseText;
      
      if (ajaxResponse){
        adv.innerHTML="Este correo ya se encuentra registrado";
        email.style = 'border: 1px solid red; box-shadow: 1px 1px 4px red';
      }else{
        adv.innerHTML="";
        email.style = 'border: 1px solid #76FF03; box-shadow: 1px 1px 4px #76FF03';
      }

    }
  };

  request.open('POST', 'http://localhost/store/user/ajax');
  request.send(data);

};


function matchString( e, regExp ){
  
  let expresion = new RegExp(regExp, "g");
  
  if(e.target.value.match(expresion)){
    requestAJAX(e.target.value);
  }else{
    adv.innerHTML="";
    e.target.style = 'border: 1px solid red; box-shadow: 1px 1px 4px red';
  };
}

email.addEventListener('input', (e)=> matchString(e, "^\\w{8,}[@]\\w{3,8}[.][a-z]{3,8}([.][a-z]{2,4})?$"));