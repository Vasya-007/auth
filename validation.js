function checkpass() {
    let password = document.getElementById('password');
    let confirm = document.getElementById('confirm');
    let passconf = document.getElementById('passconf');
    let button = document.getElementById('reg');
    let pass = document.getElementById('pass');
   if (password.value == confirm.value) {
       confirm.style.backgroundColor = '#98FB98';
       password.style.backgroundColor = '#98FB98';
       pass.innerText = "Password ✓";
       passconf.innerText = "Password confirmation ✓";
       button.disabled = false;
       
   } else {
    confirm.style.backgroundColor = '#F08080';
    password.style.backgroundColor = '#F08080';
    pass.innerText = "Password*";
    passconf.innerText = "Password confirmation*";
    button.disabled = true;
   }
}

function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
  }