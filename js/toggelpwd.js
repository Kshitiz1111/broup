const pwdToggelBtn = document.querySelector('#toggelPwd');
const password = document.querySelector('#pwd');
const cPassword = document.querySelector('#cPwd');



function toggelPwd(){
    if(pwdToggelBtn.textContent == 'show' && password.type === 'password'){
      pwdToggelBtn.textContent = 'hide';
      password.type = 'text';
      cPassword.type = 'text';
      
    }else{
      pwdToggelBtn.textContent = 'show';
      password.type = 'password';
      cPassword.type = 'password';
      
    }

}
pwdToggelBtn.addEventListener("click",toggelPwd);