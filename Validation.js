function password_check() {
       var x = document.getElementById("password1");
        if (x.type === "password") {
            x.type = "text";
            } 
	    else {
            x.type = "password";
             }                    
         }
		 
const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#pass1');
		 
		 togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye / eye slash icon
    this.classList.toggle('bi-eye');
});
		 
		 
